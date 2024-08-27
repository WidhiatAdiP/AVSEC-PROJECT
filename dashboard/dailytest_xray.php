<?php
error_reporting(0);
  include "koneksi.php";
  date_default_timezone_set('Asia/Jakarta');
if (isset($_POST['submit']))
{
  $xlokasi  = $_POST['xlokasi'];
  $xtype  = $_POST['xtype'];
  $xsn  = $_POST['xsn'];
  $xpeleton = $_POST['xpeleton'];
  $xdinas = $_POST['xdinas'];
  $xtanggal = date("Y-m-d");
  $xjam = date("H:i:s");
  $xtes = $_POST['xtes'];

if (isset($_POST['tes2'])) {
  $tes2 = $_POST['tes2'];
}
else {
  $tes2 = '0';
}    

if (isset($_POST['tes3'])) {
  $tes3 = $_POST['tes3'];
}
else {
  $tes3 = '0';
}

if (isset($_POST['tes4'])) {
  $tes4 = $_POST['tes4'];
}
else {
  $tes4 = '0';
}

if (isset($_POST['tes5'])) {
  $tes5 = $_POST['tes5'];
}
else {
  $tes5 = '0';
}

if (isset($_POST['tes6'])) {
  $tes6 = $_POST['tes6'];
}
else {
  $tes6 = '0';
}

if (isset($_POST['tes7'])) {
  $tes7 = $_POST['tes7'];
}
else {
  $tes7 = '0';
}

if (isset($_POST['tes8'])) {
  $tes8 = $_POST['tes8'];
}
else {
  $tes8 = '0';
}

if (isset($_POST['tes9'])) {
  $tes9 = $_POST['tes9'];
}
else {
  $tes9 = '0';
}
if (isset($_POST['tes10'])) {
  $tes10 = $_POST['tes10'];
}
else {
  $tes10 = '0';
}

if (isset($_POST['tes11'])) {
  $tes11 = $_POST['tes11'];
}
else {
  $tes11 = '0';
}
if (isset($_POST['tes12'])) {
  $tes12 = $_POST['tes12'];
}
else {
  $tes12 = '0';
}
if (isset($_POST['tes13'])) {
  $tes13 = $_POST['tes13'];
}
else {
  $tes13 = '0';
}

if (isset($_POST['tes14'])) {
  $tes14 = $_POST['tes14'];
}
else {
  $tes14 = '0';
}
if (isset($_POST['tes15'])) {
  $tes15 = $_POST['tes15'];
}
else {
  $tes15 = '0';
}
if (isset($_POST['tes16'])) {
  $tes16 = $_POST['tes16'];
}
else {
  $tes16 = '0';
}
if (isset($_POST['tes17'])) {
  $tes17 = $_POST['tes17'];
}
else {
  $tes17 = '0';
}
if (isset($_POST['tes18'])) {
  $tes18 = $_POST['tes18'];
}
else {
  $tes18 = '0';
}
if (isset($_POST['tes19'])) {
  $tes19 = $_POST['tes19'];
}
else {
  $tes19 = '0';
}
if (isset($_POST['tes20'])) {
  $tes20 = $_POST['tes20'];
}
else {
  $tes20 = '0';
}
if (isset($_POST['tes21'])) {
  $tes21 = $_POST['tes21'];
}
else {
  $tes21 = '0';
}
if (isset($_POST['tes22'])) {
  $tes22 = $_POST['tes22'];
}
else {
  $tes22 = '0';
}
if (isset($_POST['tes23'])) {
  $tes23 = $_POST['tes23'];
}
else {
  $tes23 = '0';
}
if (isset($_POST['tes24'])) {
  $tes24 = $_POST['tes24'];
}
else {
  $tes24 = '0';
}
if (isset($_POST['tes25'])) {
  $tes25 = $_POST['tes25'];
}
else {
  $tes25 = '0';
}
if (isset($_POST['tes26'])) {
  $tes26 = $_POST['tes26'];
}
else {
  $tes26 = '0';
}
if (isset($_POST['tes27'])) {
  $tes27 = $_POST['tes27'];
}
else {
  $tes27 = '0';
}
if (isset($_POST['tes28'])) {
  $tes28 = $_POST['tes28'];
}
else {
  $tes28 = '0';
}
if (isset($_POST['tes29'])) {
  $tes29 = $_POST['tes29'];
}
else {
  $tes29 = '0';
}
if (isset($_POST['tes30'])) {
  $tes30 = $_POST['tes30'];
}
else {
  $tes30 = '0';
}
if (isset($_POST['tes31'])) {
  $tes31 = $_POST['tes31'];
}
else {
  $tes31 = '0';
}
if (isset($_POST['tes32'])) {
  $tes32 = $_POST['tes32'];
}
else {
  $tes32 = '0';
}
if (isset($_POST['tes33'])) {
  $tes33 = $_POST['tes33'];
}
else {
  $tes33 = '0';
}
if (isset($_POST['tes34'])) {
  $tes34 = $_POST['tes34'];
}
else {
  $tes34 = '0';
}
if (isset($_POST['tes35'])) {
  $tes35 = $_POST['tes35'];
}
else {
  $tes35 = '0';
}

if (isset($_POST['tes36'])) {
  $tes36 = $_POST['tes36'];
}
else {
  $tes36 = '0';
}

if (isset($_POST['test1a'])) {
  $test1a = $_POST['test1a'];
}
else {
  $test1a = "normal";
}

if (isset($_POST['test1b'])) {
  $test1b = $_POST['test1b'];
}
else {
  $test1b = "normal";
}

if (isset($_POST['test2'])) {
  $test2 = $_POST['test2'];
}
else {
  $test2 = "normal";
}
if (isset($_POST['test3'])) {
  $test3 = $_POST['test3'];
}
else {
  $test3 = "normal";
}
if (isset($_POST['test4'])) {
  $test4 = $_POST['test4'];
}
else {
  $test4 = "normal";
}
if (isset($_POST['test5'])) {
  $test5 = $_POST['test5'];
}
else {
  $test5 = "normal";
}

$xpetugas = $_SESSION['nama'];
$xid_petugas = $_SESSION['id_user'];


  // $mysqli  = "INSERT INTO lap_wtmd1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, cValues, cValues2, cValues3 , cValues4 , keterangan , keterangan2 , keterangan3, keterangan4, petugas, id_petugas ,jenis_lap) VALUES ('$lokasi', '$merk', '$sn', '$peleton', '$tanggal' , '$jam', '$tes', '$dinas', '$lknew' , '$pknew', '$pnew' , '$perkanew', '$keterangan' , '$keterangan2', '$keterangan3' , '$keterangan4' ,'$petugas' ,'$id_petugas','$jenis_lap')";

  $mysqli  = "INSERT INTO lap_txr1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, tes2, tes3,tes4,tes5,tes6,tes7,tes8,tes9,tes10,tes11,tes12,tes13,tes14,tes15,tes16,tes17,tes18,tes19,tes20,tes21,tes22,tes23,tes24,tes25,tes26,tes27,tes28,tes29,tes30,tes31 ,tes32 ,tes33, tes34,tes35,tes36, test1a, test1b, test2,test3,test4,test5, petugas, id_petugas ,jenis_lap,ttd_img) VALUES ('$xlokasi', '$xtype', '$xsn', '$xpeleton', '$xtanggal' , '$xjam', '$xtes', '$xdinas','$tes2','$tes3','$tes4','$tes5','$tes6','$tes7','$tes8','$tes9','$tes10','$tes11','$tes12','$tes13','$tes14','$tes15','$tes16','$tes17','$tes18','$tes19','$tes20','$tes21','$tes22','$tes23','$tes24','$tes25','$tes26','$tes27','$tes28','$tes29','$tes30','$tes31','$tes32','$tes33','$tes34','$tes35','$tes36','$test1a','$test1b','$test2','$test3','$test4','$test5','$petugas' ,'$id_petugas','$xjenis_lap','$ttd_img')";


  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
    // header('location:index.php');
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

  

</div>

<table class="table table-bordered">
  <tr>
    <th colspan="4">TEST X-RAY</th>
  </tr>
  <tr>
    <th style="">Lokasi</th>
  <th>
      <select class="form-control" name="xlokasi" id="xlokasi" onchange="changeValue(this.value)">
        <option value="0">-Pilih Lokasi-</option>
        <?php 
        include 'koneksi.php';
        // mysql_connect("localhost","root","");
        // mysql_select_db("dailytest"); 

        $result = $conn ->query("select * from txr1");   
        $jsArray = "var dtTxr = new Array();\n";       
        while ($row = mysqli_fetch_array($result)) {   
          echo '<option value="' . $row['xlokasi'] . '">' . $row['xlokasi'] . '</option>';
          $jsArray .= "dtTxr['" . $row['xlokasi'] . "'] = {
            xtype:'" . addslashes($row['xtype']) . "',
            xtes:'" . addslashes($row['xtes']) . "',
            xsn:'".addslashes($row['xsn'])."'};\n";   
    }

        ?>
      </select>
    </th>
    <th>Tanggal</th>
    <th>
      <?php
     $tanggal= mktime(date("m"),date("d"),date("Y"));
     ?>
     <input class = "form-control" type="text" name="date" id="date" value="<?php echo date("d-M-Y", $tanggal); ?>" readonly>
    </th>
  </tr>

<tr>
    <th>X-Ray Type</th>
    <th>
       <input class = "form-control" type="text" name="xtype" id="xtype" value="">
    </th>
    <th>Jam</th>
    <td>
      <body onload="tampilkanwaktu(); setInterval('tampilkanwaktu()',1000);">
        <b><span class="form-control" type="text" id="jam" readonly></span></b></body>
    </td>
  </tr>

<tr>
    <th>Seri Number</th>
    <th>
      <input class="form-control" type="text" name="xsn" id="xsn" value="">
    </th>
    <th>Nama xtest</th>
    <th>
      <input class = "form-control" type="text" name="xtes" id="xtes" readonly>
    </th>
  </tr>

  <tr>
    <th>Peleton</th>
    <th>
    <select class="form-control" id="xpeleton" name="xpeleton">
    <option>-Pilih Peleton-</option>
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
    <select class="form-control" id="xdinas" name="xdinas">
    <option>-Pilih Waktu Dinas-</option>
    <option>PAGI</option>
    <option>SIANG</option>
    <option>MALAM</option>
    </select>
    </th>
  </tr>
</table>

<div class="container container-fluid">
<table class="table" frame="box">
  <tr>
    <td></td>
    <td height="230px" width="300px" style="background-image: url('txr1/test2new.png'); background-repeat: no-repeat; background-size: 290px 170px;">
      <br><p style="margin-left: 128px;margin-top: 10px;"><input type="checkbox" id="tes2" name="tes2" value="1"></p>
    </td>
    <td width="500px" colspan="2" style="background-image: url('txr1/test3new.png');background-repeat: no-repeat;background-size: 500px 200px;">
      <p style="margin-top: 32px;margin-left: 18px;">
      <input type="checkbox" id="tes3" name="tes3" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes4" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes5" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes6" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes7" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes8" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes9" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes10" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes3" name="tes11" value="1">
    </p>
    </td>
  </tr>
  <tr>
    <td height="300px" width="400px" colspan="2" style="background-image: url('txr1/test1a1bnew.png');background-repeat: no-repeat;background-size: 425px 300px;">
      <p style="margin-top: 44px;margin-left: 102px;">
      <input type="checkbox" id="tes1" name="tes12" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes13" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes14" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes15" value="1">
    </p>
    <p style="margin-top: 34px;margin-left: 102px;">
      <input type="checkbox" id="tes1" name="tes16" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes17" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes18" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes19" value="1">
    </p>
      <p style="margin-top: 32px;margin-left: 102px;">
      <input type="checkbox" id="tes1" name="tes20" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes21" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes22" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes23" value="1">
    </p>
      <p style="margin-top: 32px;margin-left: 102px;">
      <input type="checkbox" id="tes1" name="tes24" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes25" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes26" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes2" name="tes27" value="1">
    </p>
    </td>
    <td height="300px" width="450px" style="background-image: url('txr1/test4new.png');background-repeat: no-repeat;background-size: 400px 300px;">
    <p style="margin-top: 33px;margin-left: 85px;">
      <input type="checkbox" id="tes4" name="tes28" value="1">
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes4" name="tes29" value="1">
    </p>
    <p style="margin-top: 50px;margin-left: 165px;">
      <input type="checkbox" id="tes4" name="tes30" value="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" id="tes4" name="tes31" value="1">
    </p>

    <p style="margin-top: 48px; margin-left: 250px;">
      <input type="checkbox" id="tes4" name="tes32" value="1">
    </p>

    <p style="margin-top: 10px; margin-left: 79px;">
      <input type="checkbox" id="tes4" name="tes33" value="1">
    </p>
    </td>

    <td height="300px" width="200px" style="background-image: url('txr1/test5new.png');background-repeat: no-repeat;background-size: 150px 300px;">
    <p style="margin-top: 6px; margin-left: 48px;">
      <input type="checkbox" id="tes5" name="tes34" value="1">
    </p>
    <p style="margin-top: 60px; margin-left: 48px;">
      <input type="checkbox" id="tes5" name="tes35" value="1">
    </p>
    <p style="margin-top: 60px; margin-left: 48px;">
      <input type="checkbox" id="tes5" name="tes36" value="1">
    </p>

    </td>
  </tr>
</table>

<table class="table table-bordered">
  <tr>
    <td width="30px">No</td>
    <td style="text-align: center;">Image</td>
    <td style="text-align: center;">Keterangan</td>
  </tr>
  <tr>
    <td>1</td>
    <td style="text-align: center;">Test 1a</td>
    <td>
      <!-- <input type="text" class="form-control" name="test1a"> -->
      <textarea rows="4" cols="40" class="form-control" name="test1a"></textarea>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td style="text-align: center;">Test 1b</td>
    <td>
      <!-- <input type="text" class="form-control" name="test1b"> -->
      <textarea rows="4" cols="50" class="form-control" name="test1b"></textarea>
    </td>
  </tr>
  <tr>
    <td>3</td>
     <td style="text-align: center;">Test 2</td>
    <td>
      <!-- <input type="text" class="form-control" name="test2"> -->
      <textarea rows="4" cols="50" class="form-control" name="test2"></textarea>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td style="text-align: center;">Test 3</td>
    <td>
      <!-- <input type="text" class="form-control" name="test3"> -->
      <textarea rows="4" cols="50" class="form-control" name="test3"></textarea>
    </td>
  </tr>
  <tr>
    <td>5</td>
   <td style="text-align: center;">Test 4</td>
    <td>
      <!-- <input type="text" class="form-control" name="test4"> -->
      <textarea rows="4" cols="50" class="form-control" name="test4"></textarea>
    </td>
  </tr>
  <tr>
    <td>6</td>
   <td style="text-align: center;">Test 5</td>
    <td>
      <!-- <input type="text" class="form-control" name="test5"> -->
      <textarea rows="4" cols="50" class="form-control" name="test5"></textarea>
    </td>
  </tr>
</table>

<div class="container container-fluid">
<div class="text-right">
    <input type="submit" id="submit" name="submit" value="SIMPAN" class="btn btn-primary">
</div>

<input type="hidden" id="xjenis_lap" name="xjenis_lap" value="X RAY">
<input type="hidden" id="ttd" name="ttd" value="sudah TTD">

</form>
      </body></html>



      <script type="text/javascript">   
    <?php echo $jsArray; 
    include 'koneksi.php'; ?> 
    function changeValue(xlokasi){ 
    document.getElementById('xtype').value = dtTxr[xlokasi].xtype; 
    document.getElementById('xsn').value = dtTxr[xlokasi].xsn;
    document.getElementById('xtes').value = dtTxr[xlokasi].xtes;
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