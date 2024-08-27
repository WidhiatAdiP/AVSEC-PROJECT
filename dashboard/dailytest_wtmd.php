<?php
error_reporting(0);
  include "koneksi.php";
  date_default_timezone_set('Asia/Jakarta');
if (isset($_POST['submit']))
{
  $lokasi  = $_POST['lokasi'];
  $merk  = $_POST['merk'];
  $sn  = $_POST['sn'];
  $peleton = $_POST['peleton'];
  $nama_tes = $_POST['nama_tes'];
  $dinas = $_POST['dinas'];
  $tanggal = date("Y-m-d");
  $jam = date("H:i:s");
  $tes = $_POST['tes'];

if (isset($_POST['lk1'])) {
      $lk1 = $_POST['lk1'];
}
else {
      $lk1 = '0';
}
if (isset($_POST['lk2'])) {
      $lk2 = $_POST['lk2'];
}
else {
      $lk2 = '0';
}
if (isset($_POST['lk3'])) {
      $lk3 = $_POST['lk3'];
}
else {
      $lk3 = '0';
}
if (isset($_POST['lk4'])) {
      $lk4 = $_POST['lk4'];
}
else {
      $lk4 = '0';
}
if (isset($_POST['lk5'])) {
      $lk5 = $_POST['lk5'];
}
else {
      $lk5 = '0';
}
if (isset($_POST['lk6'])) {
      $lk6 = $_POST['lk6'];
}
else {
      $lk6 = '0';
}
if (isset($_POST['lk7'])) {
      $lk7 = $_POST['lk7'];
}
else {
      $lk7 = '0';
}
if (isset($_POST['lk8'])) {
      $lk8 = $_POST['lk8'];
}
else {
      $lk8 = '0';
}
if (isset($_POST['lk9'])) {
      $lk9 = $_POST['lk9'];
}
else {
      $lk9 = '0';
}
if (isset($_POST['lk10'])) {
      $lk10 = $_POST['lk10'];
}
else {
      $lk10 = '0';
}

if (isset($_POST['pk1'])) {
      $pk1 = $_POST['pk1'];
}
else {
      $pk1 = '0';
}
if (isset($_POST['pk2'])) {
      $pk2 = $_POST['pk2'];
}
else {
      $pk2 = '0';
}
if (isset($_POST['pk3'])) {
      $pk3 = $_POST['pk3'];
}
else {
      $pk3 = '0';
}
if (isset($_POST['pk4'])) {
      $pk4 = $_POST['pk4'];
}
else {
      $pk4 = '0';
}
if (isset($_POST['pk5'])) {
      $pk5 = $_POST['pk5'];
}
else {
      $pk5 = '0';
}
if (isset($_POST['pk6'])) {
      $pk6 = $_POST['pk6'];
}
else {
      $pk6 = '0';
}
if (isset($_POST['pk7'])) {
      $pk7 = $_POST['pk7'];
}
else {
      $pk7 = '0';
}
if (isset($_POST['pk8'])) {
      $pk8 = $_POST['pk8'];
}
else {
      $pk8 = '0';
}
if (isset($_POST['pk9'])) {
      $pk9 = $_POST['pk9'];
}
else {
      $pk9 = '0';
}
if (isset($_POST['pk10'])) {
      $pk10 = $_POST['pk10'];
}
else {
      $pk10 = '0';
}

if (isset($_POST['p1'])) {
      $p1 = $_POST['p1'];
}
else {
      $p1 = '0';
}
if (isset($_POST['p2'])) {
      $p2 = $_POST['p2'];
}
else {
      $p2 = '0';
}
if (isset($_POST['p3'])) {
      $p3 = $_POST['p3'];
}
else {
      $p3 = '0';
}
if (isset($_POST['p4'])) {
      $p4 = $_POST['p4'];
}
else {
      $p4 = '0';
}
if (isset($_POST['p5'])) {
      $p5 = $_POST['p5'];
}
else {
      $p5 = '0';
}
if (isset($_POST['p6'])) {
      $p6 = $_POST['p6'];
}
else {
      $p6 = '0';
}
if (isset($_POST['p7'])) {
      $p7 = $_POST['p7'];
}
else {
      $p7 = '0';
}
if (isset($_POST['p8'])) {
      $p8 = $_POST['p8'];
}
else {
      $p8 = '0';
}
if (isset($_POST['p9'])) {
      $p9 = $_POST['p9'];
}
else {
      $p9 = '0';
}
if (isset($_POST['p10'])) {
      $p10 = $_POST['p10'];
}
else {
      $p10 = '0';
}

if (isset($_POST['perka1'])) {
      $perka1 = $_POST['perka1'];
}
else {
      $perka1 = '0';
}
if (isset($_POST['perka2'])) {
      $perka2 = $_POST['perka2'];
}
else {
      $perka2 = '0';
}
if (isset($_POST['perka3'])) {
      $perka3 = $_POST['perka3'];
}
else {
      $perka3 = '0';
}
if (isset($_POST['perka4'])) {
      $perka4 = $_POST['perka4'];
}
else {
      $perka4 = '0';
}
if (isset($_POST['perka5'])) {
      $perka5 = $_POST['perka5'];
}
else {
      $perka5 = '0';
}
if (isset($_POST['perka6'])) {
      $perka6 = $_POST['perka6'];
}
else {
      $perka6 = '0';
}
if (isset($_POST['perka7'])) {
      $perka7 = $_POST['perka7'];
}
else {
      $perka7 = '0';
}
if (isset($_POST['perka8'])) {
      $perka8 = $_POST['perka8'];
}
else {
      $perka8 = '0';
}
if (isset($_POST['perka9'])) {
      $perka9 = $_POST['perka9'];
}
else {
      $perka9 = '0';
}
if (isset($_POST['perka10'])) {
      $perka10 = $_POST['perka10'];
}
else {
      $perka10 = '0';
}
 
if (isset($_POST['keterangan'])) {
      $keterangan = $_POST['keterangan'];
}
else {
      $keterangan = "normal";
}
if (isset($_POST['keterangan2'])) {
      $keterangan2 = $_POST['keterangan2'];
}
else {
      $keterangan2 = "normal";
}
if (isset($_POST['keterangan3'])) {
      $keterangan3 = $_POST['keterangan3'];
}
else {
      $keterangan3 = "normal";
}
if (isset($_POST['keterangan4'])) {
      $keterangan4 = $_POST['keterangan4'];
}
else {
      $keterangan4 = "normal";
}

//table 1430

if (isset($_POST['lk11'])) {
      $lk11 = $_POST['lk11'];
}
else {
      $lk11 = '0';
}
if (isset($_POST['lk12'])) {
      $lk12 = $_POST['lk12'];
}
else {
      $lk12 = '0';
}
if (isset($_POST['lk13'])) {
      $lk13 = $_POST['lk13'];
}
else {
      $lk13 = '0';
}
if (isset($_POST['lk14'])) {
      $lk14 = $_POST['lk14'];
}
else {
      $lk14 = '0';
}
if (isset($_POST['lk15'])) {
      $lk15 = $_POST['lk15'];
}
else {
      $lk15 = '0';
}
if (isset($_POST['lk16'])) {
      $lk16 = $_POST['lk16'];
}
else {
      $lk16 = '0';
}
if (isset($_POST['lk17'])) {
      $lk17 = $_POST['lk17'];
}
else {
      $lk17 = '0';
}
if (isset($_POST['lk18'])) {
      $lk18 = $_POST['lk18'];
}
else {
      $lk18 = '0';
}
if (isset($_POST['lk19'])) {
      $lk19 = $_POST['lk19'];
}
else {
      $lk19 = '0';
}
if (isset($_POST['lk20'])) {
      $lk20 = $_POST['lk20'];
}
else {
      $lk20 = '0';
}




if (isset($_POST['pk11'])) {
      $pk11 = $_POST['pk11'];
}
else {
      $pk11 = '0';
}
if (isset($_POST['pk12'])) {
      $pk12 = $_POST['pk12'];
}
else {
      $pk12 = '0';
}
if (isset($_POST['pk13'])) {
      $pk13 = $_POST['pk13'];
}
else {
      $pk13 = '0';
}
if (isset($_POST['pk14'])) {
      $pk14 = $_POST['pk14'];
}
else {
      $pk14 = '0';
}
if (isset($_POST['pk15'])) {
      $pk15 = $_POST['pk15'];
}
else {
      $pk15 = '0';
}
if (isset($_POST['pk16'])) {
      $pk16 = $_POST['pk16'];
}
else {
      $pk16 = '0';
}
if (isset($_POST['pk17'])) {
      $pk17 = $_POST['pk17'];
}
else {
      $pk17 = '0';
}
if (isset($_POST['pk18'])) {
      $pk18 = $_POST['pk18'];
}
else {
      $pk18 = '0';
}
if (isset($_POST['pk19'])) {
      $pk19 = $_POST['pk19'];
}
else {
      $pk19 = '0';
}
if (isset($_POST['pk20'])) {
      $pk20 = $_POST['pk20'];
}
else {
      $pk20 = '0';
}

if (isset($_POST['p11'])) {
      $p11 = $_POST['p11'];
}
else {
      $p11 = '0';
}
if (isset($_POST['p12'])) {
      $p12 = $_POST['p12'];
}
else {
      $p12 = '0';
}
if (isset($_POST['p13'])) {
      $p13 = $_POST['p13'];
}
else {
      $p13 = '0';
}
if (isset($_POST['p14'])) {
      $p14 = $_POST['p14'];
}
else {
      $p14 = '0';
}
if (isset($_POST['p15'])) {
      $p15 = $_POST['p15'];
}
else {
      $p15 = '0';
}
if (isset($_POST['p16'])) {
      $p16 = $_POST['p16'];
}
else {
      $p16 = '0';
}
if (isset($_POST['p17'])) {
      $p17 = $_POST['p17'];
}
else {
      $p17 = '0';
}
if (isset($_POST['p18'])) {
      $p18 = $_POST['p18'];
}
else {
      $p18 = '0';
}
if (isset($_POST['p19'])) {
      $p19 = $_POST['p19'];
}
else {
      $p19 = '0';
}
if (isset($_POST['p20'])) {
      $p20 = $_POST['p20'];
}
else {
      $p20 = '0';
}



if (isset($_POST['perka11'])) {
      $perka11 = $_POST['perka11'];
}
else {
      $perka11 = '0';
}
if (isset($_POST['perka12'])) {
      $perka12 = $_POST['perka12'];
}
else {
      $perka12 = '0';
}
if (isset($_POST['perka13'])) {
      $perka13 = $_POST['perka13'];
}
else {
      $perka13 = '0';
}
if (isset($_POST['perka14'])) {
      $perka14 = $_POST['perka14'];
}
else {
      $perka14 = '0';
}
if (isset($_POST['perka15'])) {
      $perka15 = $_POST['perka15'];
}
else {
      $perka15 = '0';
}
if (isset($_POST['perka16'])) {
      $perka16 = $_POST['perka16'];
}
else {
      $perka16 = '0';
}
if (isset($_POST['perka17'])) {
      $perka17 = $_POST['perka17'];
}
else {
      $perka17 = '0';
}
if (isset($_POST['perka18'])) {
      $perka18 = $_POST['perka18'];
}
else {
      $perka18 = '0';
}
if (isset($_POST['perka19'])) {
      $perka19 = $_POST['perka19'];
}
else {
      $perka19 = '0';
}
if (isset($_POST['perka20'])) {
      $perka20 = $_POST['perka20'];
}
else {
      $perka20 = '0';
}
      

if (isset($_POST['keterangan11'])) {
      $keterangan11 = $_POST['keterangan11'];
}
else {
      $keterangan11 = "normal";
}
if (isset($_POST['keterangan12'])) {
      $keterangan12 = $_POST['keterangan12'];
}
else {
      $keterangan12 = "normal";
}
if (isset($_POST['keterangan13'])) {
      $keterangan13 = $_POST['keterangan13'];
}
else {
      $keterangan13 = "normal";
}
if (isset($_POST['keterangan14'])) {
      $keterangan14 = $_POST['keterangan14'];
}
else {
      $keterangan14 = "normal";
}
$petugas = $_SESSION['nama'];
$id_petugas = $_SESSION['id_user'];

$jenis_lap = $_POST['jenis_lap'];
$ttd_img = $_SESSION['ttd_img'];



// $mysqli  = "INSERT INTO lap_wtmd1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, cValues, cValues2, cValues3 , cValues4 , keterangan , keterangan2 , keterangan3, keterangan4, petugas, id_petugas ,jenis_lap) VALUES ('$lokasi', '$merk', '$sn', '$peleton', '$tanggal' , '$jam', '$tes', '$dinas', '$lknew' , '$pknew', '$pnew' , '$perkanew', '$keterangan' , '$keterangan2', '$keterangan3' , '$keterangan4' ,'$petugas' ,'$id_petugas','$jenis_lap')";

$mysqli  = "INSERT INTO lap_wtmd1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, lk1,lk2,lk3,lk4,lk5,lk6,lk7,lk8,lk9,lk10, pk1,pk2,pk3,pk4,pk5,pk6,pk7,pk8,pk9,pk10, p1,p2,p3,p4,p5,p6,p7,p8,p9,p10, perka1,perka2,perka3,perka4,perka5,perka6,perka7,perka8,perka9,perka10, keterangan , keterangan2 , keterangan3, keterangan4, lk11,lk12,lk13,lk14,lk15,lk16,lk17,lk18,lk19,lk20, pk11,pk12,pk13,pk14,pk15,pk16,pk17,pk18,pk19,pk20, p11,p12,p13,p14,p15,p16,p17,p18,p19,p20, perka11,perka12,perka13,perka14,perka15,perka16,perka17,perka18,perka19,perka20, keterangan11 , keterangan12 , keterangan13, keterangan14, petugas, id_petugas ,jenis_lap , ttd_img) VALUES ('$lokasi', '$merk', '$sn', '$peleton', '$tanggal' , '$jam', '$nama_tes', '$dinas', '$lk1', '$lk2', '$lk3', '$lk4', '$lk5' ,'$lk6', '$lk7', '$lk8', '$lk9', '$lk10', '$pk1', '$pk2', '$pk3', '$pk4', '$pk5' ,'$pk6', '$pk7', '$pk8', '$pk9', '$pk10', '$p1', '$p2', '$p3', '$p4', '$p5' ,'$p6', '$p7', '$p8', '$p9', '$p10', '$perka1', '$perka2', '$perka3', '$perka4', '$perka5' ,'$perka6', '$perka7', '$perka8', '$perka9', '$perka10','$keterangan' , '$keterangan2', '$keterangan3' , '$keterangan4' , '$lk11', '$lk12', '$lk13', '$lk14', '$lk15' ,'$lk16', '$lk17', '$lk18', '$lk19', '$lk20', '$pk11', '$pk12', '$pk13', '$pk14', '$pk15' ,'$pk16', '$pk17', '$pk18', '$pk19', '$pk20', '$p11', '$p12', '$p13', '$p14', '$p15' ,'$p16', '$p17', '$p18', '$p19', '$p20', '$perka11', '$perka12', '$perka13', '$perka14', '$perka15' ,'$perka16', '$perka17', '$perka18', '$perka19', '$perka20','$keterangan11' , '$keterangan12', '$keterangan13' , '$keterangan14' , '$petugas' ,'$id_petugas','$jenis_lap' ,'$ttd_img')";

  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
    // header("location:index.php");
  } else {
    echo "Input gagal";

  }
}
else {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daily Test Avsec</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="Style.css" rel="stylesheet" type="text/css"/>
  <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
 


  <style type="text/css">
.table th {
  text-align: center;
  table-layout: fixed;

}
</style>

</head>
<body>

<div class="container-fluid">
  <form action="" method="post">
  <!-- <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> -->
  <br>

 <table class="table table-bordered">
  <tr>
    <th colspan="4">TEST HARIAN WTMD</th>
  </tr>
  <tr>
    <th style="">Lokasi</th>
  <th>
      <select class="form-control" name="lokasi" id="lokasi" onchange="changeValue(this.value)">
        <option value="0">-Pilih Lokasi-</option>
        <?php 

        include 'koneksi.php';

        // mysql_connect("localhost","root","");
        // mysql_select_db("dailytest"); 

        $result = $conn->query("select * from wtmd1");   
        $jsArray = "var dtWtmd = new Array();\n";       
        while ($row = mysqli_fetch_array($result)) {   
          echo '<option value="' . $row['lokasi'] . '">' . $row['lokasi'] . '</option>';
          $jsArray .= "dtWtmd['" . $row['lokasi'] . "'] = {
            merk:'" . addslashes($row['merk']) . "',
            nama_tes:'" . addslashes($row['nama_tes']) . "',
            sn:'".addslashes($row['sn'])."'};\n";   
    }

        ?>
      </select>
    </th>
    <th>Tanggal</th>
    <th>
      <?php
     $tanggal= mktime(date("m"),date("d"),date("Y"));
     ?>
     <input class = "form-control" type="text" name="tanggal" id="tanggal" value="<?php echo date("d-M-Y", $tanggal); ?>" readonly>
    </th>
  </tr>

<tr>
    <th>Merk</th>
    <th>
       <input class = "form-control" type="text" name="merk" id="merk" value="">
    </th>
    <th>Jam</th>
    <td>
      <body onload="tampilkanwaktu(); setInterval('tampilkanwaktu()',1000);">
        <b><span class="form-control" type="text" name="jam" id="jam" readonly></span></b></body>
    </td>
  </tr>

<tr>
    <th>SN</th>
    <th>
      <input class="form-control" type="text" name="sn" id="sn" value="">
    </th>
    <th>Nama Test</th>
    <th>
      <input class = "form-control" type="text" name="nama_tes" id="nama_tes" readonly>
    </th>
  </tr>

  <tr>
    <th>Peleton</th>
    <th>
    <select class="form-control" id="peleton" name="peleton">
    <option value="">-Pilih Peleton-</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    <option value="F">F</option>
  </select>
    </th>
    <th>Dinas</th>
    <th>
    <select class="form-control" name="dinas" id="dinas">
    <option value="">-Pilih Waktu Dinas-</option>
    <option value="PAGI">PAGI</option>
    <option value="SIANG">SIANG</option>
    <option value="MALAM">MALAM</option>
    </select>
    </th>
  </tr>
</table>
</div>









<div class="container-fluid">

  <!-- TABLE 4130 -->

  <table class="table table-bordered">
  <tr>
    <th colspan="2" rowspan="2">OTP (OBJECT TEST PIECE) TYPE
      <br>4140</th>
    <th colspan="5" rowspan="3"><br><br>OTP RESULT (80%)
            <br>
            <span class="glyphicon glyphicon-ok"> = ALARM</span>
            <span class="glyphicon glyphicon-remove"> = NO ALARM</span>
    </th>
    <th>ACTUAL THIS TEST</th>
    <th>MINIMUM</th>
  </tr>
  <tr>
    <th>SENSITIVITY</th>
    <th>SENSITIVITY</th>
  </tr>
  <tr>
    <th>POSITION OF OTP</th>
    <th>POSITION OF OTP</th>
    <th colspan="2">
      DIRECTION OF TRAVEL
      <br>COMMENTS-RECTIFICATION ACTION TAKEN
    </th>
  </tr>

<tr>
    <th rowspan="2">Lengan Kanan</th>
    <th>IN</th>
    <th><input type="checkbox" id="lk" name="lk1" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk2" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk3" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk4" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk5" value="1"></th>
    <td colspan="2" rowspan="2" >
      <small id="note" class="form-text text-muted">Masukkan Keterangan Normal atau Lainnya</small>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan" name="keterangan" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan" name="keterangan"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="lk" name="lk6" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk7" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk8" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk9" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk10" value="1"></th>
  </tr>

    <tr>
    <th rowspan="2">Pinggul Kanan</th>
    <th>IN</th>
    <th><input type="checkbox" id="pk" name="pk1" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk2" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk3" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk4" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk5" value="1"></th>
    <td colspan="2" rowspan="2" ><br>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan2" name="keterangan2" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan2" name="keterangan2"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="pk" name="pk6" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk7" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk8" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk9" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk10" value="1"></th>
  </tr>

  <tr>
    <th rowspan="2">Punggung</th>
    <th>IN</th>
    <th><input type="checkbox" id="p" name="p1" value="1"></th>
    <th><input type="checkbox" id="p" name="p2" value="1"></th>
    <th><input type="checkbox" id="p" name="p3" value="1"></th>
    <th><input type="checkbox" id="p" name="p4" value="1"></th>
    <th><input type="checkbox" id="p" name="p5" value="1"></th>

    <td colspan="2" rowspan="2" ><br>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan3" name="keterangan3" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan3" name="keterangan3"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="p" name="p6" value="1"></th>
    <th><input type="checkbox" id="p" name="p7" value="1"></th>
    <th><input type="checkbox" id="p" name="p8" value="1"></th>
    <th><input type="checkbox" id="p" name="p9" value="1"></th>
    <th><input type="checkbox" id="p" name="p10" value="1"></th>
  </tr>

    <tr>
    <th rowspan="2">Pergelangan Kaki
      <br> Kanan</th>
    <th>IN</th>
    <th><input type="checkbox" id="perka" name="perka1" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka2" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka3" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka4" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka5" value="1"></th>

    <td colspan="2" rowspan="2" ><br>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan4" name="keterangan4" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan4" name="keterangan4"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="perka" name="perka6" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka7" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka8" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka9" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka10" value="1"></th>
  </tr>
</table>
<!-- 
<div class="text-right">
    <button type="button" class="btn btn-primary" id="save1" name="save1">SIMPAN</button>
</div> -->

<!-- <br> -->



<!-- TABLE 4130 -->
  <table class="table table-bordered">
  <tr>
    <th colspan="2" rowspan="2">OTP (OBJECT TEST PIECE) TYPE
      <br>4130</th>
    <th colspan="5" rowspan="3"><br><br>OTP RESULT (80%)
            <br>
            <span class="glyphicon glyphicon-ok"> = ALARM</span>
            <span class="glyphicon glyphicon-remove"> = NO ALARM</span>
    </th>
    <th>ACTUAL THIS TEST</th>
    <th>MINIMUM</th>
  </tr>
  <tr>
    <th>SENSITIVITY</th>
    <th>SENSITIVITY</th>
  </tr>
  <tr>
    <th>POSITION OF OTP</th>
    <th>POSITION OF OTP</th>
    <th colspan="2">
      DIRECTION OF TRAVEL
      <br>COMMENTS-RECTIFICATION ACTION TAKEN
    </th>
  </tr>

<tr>
    <th rowspan="2">Lengan Kanan</th>
    <th>IN</th>
    <th><input type="checkbox" id="lk" name="lk11" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk12" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk13" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk14" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk15" value="1"></th>
    <td colspan="2" rowspan="2" >
      <small id="note" class="form-text text-muted">Masukkan Keterangan Normal atau Lainnya</small>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan11" name="keterangan11" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan11" name="keterangan11"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="lk" name="lk16" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk17" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk18" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk19" value="1"></th>
    <th><input type="checkbox" id="lk" name="lk20" value="1"></th>
  </tr>

    <tr>
    <th rowspan="2">Pinggul Kanan</th>
    <th>IN</th>
    <th><input type="checkbox" id="pk" name="pk11" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk12" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk13" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk14" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk15" value="1"></th>
    <td colspan="2" rowspan="2" ><br>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan12" name="keterangan12" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan12" name="keterangan12"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="pk" name="pk16" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk17" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk18" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk19" value="1"></th>
    <th><input type="checkbox" id="pk" name="pk20" value="1"></th>
  </tr>

  <tr>
    <th rowspan="2">Punggung</th>
    <th>IN</th>
    <th><input type="checkbox" id="p" name="p11" value="1"></th>
    <th><input type="checkbox" id="p" name="p12" value="1"></th>
    <th><input type="checkbox" id="p" name="p13" value="1"></th>
    <th><input type="checkbox" id="p" name="p14" value="1"></th>
    <th><input type="checkbox" id="p" name="p15" value="1"></th>

    <td colspan="2" rowspan="2" ><br>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan13" name="keterangan13" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan13" name="keterangan13"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="p" name="p16" value="1"></th>
    <th><input type="checkbox" id="p" name="p17" value="1"></th>
    <th><input type="checkbox" id="p" name="p18" value="1"></th>
    <th><input type="checkbox" id="p" name="p19" value="1"></th>
    <th><input type="checkbox" id="p" name="p20" value="1"></th>
  </tr>

    <tr>
    <th rowspan="2">Pergelangan Kaki
      <br> Kanan</th>
    <th>IN</th>
    <th><input type="checkbox" id="perka" name="perka11" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka12" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka13" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka14" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka15" value="1"></th>

    <td colspan="2" rowspan="2" ><br>
      <b style="text-align: center;">
        <!-- <input type="text" class="form-control" id="keterangan14" name="keterangan14" > -->
        <textarea rows="3" cols="40" class="form-control" id="keterangan14" name="keterangan14"></textarea>
        <b>
  </td>
  </tr>
  <tr>
    <th>OUT</th>
    <th><input type="checkbox" id="perka" name="perka16" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka17" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka18" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka19" value="1"></th>
    <th><input type="checkbox" id="perka" name="perka20" value="1"></th>
  </tr>
</table>


<div class="text-right">
    <input type="submit" id="submit" name="submit" value="SIMPAN" class="btn btn-primary">
</div>
<br>

<input type="hidden" id="jenis_lap" name="jenis_lap" value="WTMD">

</form>

<div class="container text text-center">    
</br></div>

			</body></html>
                  <script type="text/javascript">   
    <?php echo $jsArray; 
    include 'koneksi.php'; ?> 
    function changeValue(lokasi){ 
    document.getElementById('merk').value = dtWtmd[lokasi].merk; 
    document.getElementById('sn').value = dtWtmd[lokasi].sn;
    document.getElementById('nama_tes').value = dtWtmd[lokasi].nama_tes;
    }; 


function tampilkanwaktu(){
    <?php
    include 'koneksi.php';
    ?>
        var waktu = new Date();
        var sh = waktu.getHours() + ""; 
        var sm = waktu.getMinutes() + "";
        var ss = waktu.getSeconds() + "";
        document.getElementById("jam").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
    </script> 
