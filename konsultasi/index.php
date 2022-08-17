<?php
include "../config/config.php";


if (@$_POST['submit']) {
    include "head.php";

    echo "<title>Halaman Konsultasi</title></head>";
date_default_timezone_set("Asia/Jakarta");
$inptanggal = date('Y-m-d H:i:s');

$arbobot = array('0', '1', '0.8', '0.6', '0.4', '-0.2', '-0.4', '-0.6', '-0.8', '-1');
$argejala = array();

for ($i = 0; $i < count($_POST['kondisi']); $i++) {
    $arkondisi = explode("_", $_POST['kondisi'][$i]);
    if (strlen($_POST['kondisi'][$i]) > 1) {
        $argejala += array($arkondisi[0] => $arkondisi[1]);
    }
}

$sqlkondisi = mysqli_query($conn, "SELECT * FROM kondisi order by id");
while ($rkondisi = mysqli_fetch_array($sqlkondisi)) {
    $arkondisitext[$rkondisi['id']] = $rkondisi['kondisi'];
}

$sqlpkt = mysqli_query($conn, "SELECT * FROM penyakit order by id");
while ($rpkt = mysqli_fetch_array($sqlpkt)) {
    $arpkt[$rpkt['id']] = $rpkt['nama_penyakit'];
    $ardpkt[$rpkt['id']] = $rpkt['det_penyakit'];
    $arspkt[$rpkt['id']] = $rpkt['srn_penyakit'];
    $argpkt[$rpkt['id']] = $rpkt['img'];
}

// -------- perhitungan certainty factor (CF) ---------
// --------------------- START ------------------------
$sqlpenyakit = mysqli_query($conn, "SELECT * FROM penyakit order by id");
$arpenyakit = array();
while ($rpenyakit = mysqli_fetch_array($sqlpenyakit)) {
  $cftotal_temp = 0;
//   var_dump($rpenyakit['kode_penyakit']);
  $cf = 0;
  $sqlgejala = mysqli_query($conn, "SELECT * FROM pengetahuan where id=$rpenyakit[id]");
  $cflama = 0;
  while ($rgejala = mysqli_fetch_array($sqlgejala)) {
    $arkondisi = explode("_", $_POST['kondisi'][0]);
    $gejala = $arkondisi[0];

    for ($i = 0; $i < count($_POST['kondisi']); $i++) {
      $arkondisi = explode("_", $_POST['kondisi'][$i]);
      $gejala = $arkondisi[0];
      if ($rgejala['id'] == $gejala) {
        $cf = ($rgejala['mb'] - $rgejala['md']) * $arbobot[$arkondisi[1]];
        if (($cf >= 0) && ($cf * $cflama >= 0)) {
          $cflama = $cflama + ($cf * (1 - $cflama));
        }
        if ($cf * $cflama < 0) {
          $cflama = ($cflama + $cf) / (1 - min(abs($cflama), abs($cf)));
        }
        if (($cf < 0) && ($cf * $cflama >= 0)) {
          $cflama = $cflama + ($cf * (1 + $cflama));
        }
      }
    }
  }
  if ($cflama > 0) {
    $arpenyakit += array($rpenyakit['id'] => number_format($cflama, 4));
}
}

arsort($arpenyakit);

$inpgejala = serialize($argejala);
$inppenyakit = serialize($arpenyakit);

$np1 = 0;
foreach ($arpenyakit as $key1 => $value1) {
  $np1++;
  $idpkt1[$np1] = $key1;
  $vlpkt1[$np1] = $value1;
}

mysqli_query($conn, "INSERT INTO riwayat(
            tanggal,
            gejala,
            penyakit,
            hasil_id,
            hasil_nilai
            ) 
      VALUES(
          '$inptanggal',
          '$inpgejala',
          '$inppenyakit',
          '$idpkt1[1]',
          '$vlpkt1[1]'
          )");
// --------------------- END -------------------------

echo "<div class='container'><div class='content'>
	<h3 class='text'>Hasil Diagnosis &nbsp;&nbsp;</h2><a class='btn btn-info' href='".BASE_URL."konsultasi/' id='print' data-toggle='tooltip' data-placement='right' title='Klik tombol ini untuk mencetak hasil diagnosa'><i class='fa fa-arrow-left'></i> Kembali</a>
  <button class='btn btn-primary' id='print' onClick='window.print();' data-toggle='tooltip' data-placement='right' title='Klik tombol ini untuk mencetak hasil diagnosa'><i class='fa fa-print'></i> Cetak</button>
	          <hr><table class='table table-bordered table-striped diagnosa'> 
          <th width=8%>No</th>
          <th width=10%>Kode</th>
          <th>Gejala yang dialami (keluhan)</th>
          <th width=20%>Pilihan</th>
          </tr>";
      $ig = 0;
      foreach ($argejala as $key => $value) {
        $kondisi = $value;
        $ig++;
        $gejala = $key;
        $sql4 = mysqli_query($conn, "SELECT * FROM gejala where id = '$key'");
        $r4 = mysqli_fetch_array($sql4);
        echo '<tr ><td>' . $ig . '</td>';
        echo '<td>' . str_pad($r4['kode_gejala'], 3, '0', STR_PAD_LEFT) . '</td>';
        echo '<td><span class="hasil text text-primary">' . $r4['gejala'] . "</span></td>";
        echo '<td><span class="kondisipilih">' . $arkondisitext[$kondisi] . "</span></td></tr>";
      }
      $np = 0;
      foreach ($arpenyakit as $key => $value) {
        $np++;
        $idpkt[$np] = $key;
        $nmpkt[$np] = $arpkt[$key];
        $vlpkt[$np] = $value;
      }
      if ($argpkt[$idpkt[1]]) {
        $gambar = '../gambar/penyakit/' . $argpkt[$idpkt[1]];
      } else {
        $gambar = '../gambar/noimage.png';
      }
      echo "</table><img class='card-img-top img-bordered-sm' style='float:right; margin-left:15px;' src='" . $gambar . "'><hr><h4>Hasil Diagnosa :</h3>";
      echo "<div class='callout callout-default'><h5>Jenis penyakit yang diderita adalah</h5> <b><h5 class='text text-success'>" . $nmpkt[1] . "</b> / " . $vlpkt[1] * 100 . " % (" . $vlpkt[1] . ")<br></h3>";
      echo "</div><br><br><br><br><br><hr><div class='box box-info box-solid'><div class='box-header with-border'><h3 class='box-title'>Detail :</h3></div><div class='box-body'><h5>";
      echo $ardpkt[$idpkt[1]];
      echo "</h5><br><hr></div></div>
          <div class='box box-warning box-solid'><div class='box-header with-border'><h4 class='box-title'>Saran</h4></div><div class='box-body'><h5>";
      echo $arspkt[$idpkt[1]];
      echo "</h5></div></div><br><hr>
          <div class='box box-danger box-solid'><div class='box-header with-border'><h4 class='box-title'>Kemungkinan lain:</h4></div><div class='box-body'><h4>";
      for ($ipl = 2; $ipl < count($idpkt); $ipl++) {
        echo " <h5><i class='fa fa-caret-square-o-right'></i> " . $nmpkt[$ipl] . "</b> / " . round($vlpkt[$ipl], 2) . " % (" . $vlpkt[$ipl] . ")<br></h4>";
      }
      echo "</div></div>
		  </div></div>";
    } else {
        include "head.php";
        echo "<title>Halaman Konsultasi</title></head><body id='page-top'><div id='wrapper'>";
        
        include "side.php";
        echo "<div class='container'><h1 class='h3 mb-0 text-gray-800'>Diagnosa</h1>
        </div></nav>";
        echo "<div class='container-fluid'><div class='card shadow mb-4'>
        <div class='card-header py-3'><div class='card-body'>";
        echo"<form name=text_form method=POST action='' id=diagnosa><table class='table table-bordered table-striped konsultasi'><tbody class='pilihkondisi'>
        <tr><th>No</th><th>Kode</th><th>Gejala</th><th width='20%'>Pilih Kondisi</th></tr>";

      $sql3 = mysqli_query($conn, "SELECT * FROM gejala order by id");
      $i = 0;
      while ($r3 = mysqli_fetch_array($sql3)) {
        $i++;
        echo "<tr><td class=opsi>$i</td>";
        echo "<td class=opsi>" . str_pad($r3['id'], 3, '0', STR_PAD_LEFT) . "</td>";
        echo "<td class=gejala>$r3[gejala]</td>";
        echo '<td class="opsi"><select name="kondisi[]" id="sl' . $i . '" class="opsikondisi"/><option data-id="0" value="0">Pilih jika sesuai</option>';
        $s = "select * from kondisi order by id";
        $q = mysqli_query($conn, $s) or die($s);
        while ($rw = mysqli_fetch_array($q)) {
          ?>
          <option data-id="<?php echo $rw['id']; ?>" value="<?php echo $r3['id'] . '_' . $rw['id']; ?>"><?php echo $rw['kondisi']; ?></option>
          <?php
        }
        echo '</select></td>';
        echo "</tr>";
      }
      echo "
		  <input class='float' type=submit data-toggle='tooltip' data-placement='top' title='Klik disini untuk melihat hasil diagnosa' name=submit value='Start' style='font-family:Arial, FontAwesome'>
          </tbody></table>
          <button type='reset' name='reset' id='reset' class='floats fa fa-undo my-float' title='klik untuk reset'>
                                </button></form></div></div></div></div></div>";
    }

    
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $trim = explode('-', $tanggal);
  
  // variabel trim 0 = tanggal
  // variabel trim 1 = bulan
  // variabel trim 2 = tahun
 
  return $trim[2] . ' ' . $bulan[ (int)$trim[1] ] . ' ' . $trim[0];
}
    ?>

    <br><br><div class="printf" id="printf" style="text-align: center; float: right; margin-right: 3rem;">
      <h5>Solok, <?= tgl_indo(date('Y-m-d'));; ?></h5>
      <h5>Kasi Perbenihan dan Perlindungan</h5>
      <br><br><br>
      <h5>MUSMULYADI,SP</h5>
      <h5><strong>NIP : 19730722 200501 1 008</strong></h5>
    </div>
    <script>
        document.getElementById("diagnosa").reset();
    </script>