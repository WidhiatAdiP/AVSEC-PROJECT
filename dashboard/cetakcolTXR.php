<?php
 session_start();
 include "koneksi.php";
?>

<?php
    function tglIndonesia($str){
       $tr   = trim($str);
       $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
       return $str;
   }
      
 ?>



<?php

// 2019-06-13

include 'koneksi.php';
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
  // $tanggal1  = "2019-06-13";
  // $tanggal2  = "2019-06-16";

$tanggal1  = $_POST['tanggal1'];
$tanggal2  = $_POST['tanggal2'];

$result = mysqli_query($conn, "SELECT * FROM `lap_txr1` WHERE tanggal BETWEEN '$tanggal1' AND '$tanggal2'");
while($row = $result->fetch_assoc()){
// echo $row["id_lap"];
// echo'<td>'.$row['lokasi'].'</td>';

echo $mpdf->WriteHTML('
<!DOCTYPE html>
<html lang="en">
<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="Style.css" rel="stylesheet" type="text/css"/>
  <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
<style type="text/css">
  table {
    table-layout: fixed;
  }
</style>
</head>
<body>
<br>
<div class="container-fluid">
  <p style="text-align: center;">TEST HARIAN '.$row['jenis_lap'].'</p>
<table class="table table-bordered">
<input type="hidden" name="id_lap" value="'.$row['id_lap'].'">
      
      <tr>
        <td width="100px"  style="text-align: left; font-size: 11px;">Merk</td>
        <td  style="text-align: left; font-size: 11px;">'.$row['merk'].'</td>
        <td width="100px"  style="text-align: left; font-size: 11px;">Tanggal / Hari</td>
        <td  style="text-align: left; font-size: 11px;">'.tglIndonesia(date('d-m-Y / D',strtotime($row['tanggal']))).'</td>       
      </tr>
      <tr>
        <td style="text-align: left;font-size: 11px;">SN</td>
        <td style="text-align: left;font-size: 11px;">'.$row['sn'].'</td>
        <td style="text-align: left;font-size: 11px;">Jam</td>
        <td style="text-align: left;font-size: 11px;">'.$row['jam'].'</td>       
      </tr>
      <tr>
        <td style="text-align: left;font-size: 11px;">Lokasi</td>
        <td style="text-align: left;font-size: 11px;">'.$row['lokasi'].'</td>
        <td style="text-align: left;font-size: 11px;">Nama Tes</td>
        <td style="text-align: left;font-size: 11px;">'.$row['nama_tes'].'</td>       
      </tr>
      <tr>
        <td style="text-align: left;font-size: 11px;">Peleton</td>
        <td style="text-align: left;font-size: 11px;">'.$row['peleton'].'</td>
        <td style="text-align: left;font-size: 11px;">Dinas</td>
        <td style="text-align: left;font-size: 11px;">'. $row['dinas'].'</td>       
      </tr>
</table>
<div class="container">
<table class="table">
  <tr>
    <td></td>
    <td height="270px" width="400" style="background-image: url(txr1/test2printcoba.png); background-repeat: no-repeat;">
      '.($row['tes2']==1 ? 'V':'X').'
    </td>

    <td colspan="2" style="text-align: left; background-image: url(txr1/test3printcoba.png);background-repeat: no-repeat;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes3']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes4']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes5']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes6']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes7']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes8']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes9']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes10']==1 ? 'V':'X').'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes11']==1 ? 'V':'X').'
    </td>
  </tr>
  <tr>
    <td height="308px" width="400px" colspan="2" style="text-align: left; background-image: url(txr1/test1a1bprintcoba1.png);background-repeat: no-repeat;">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes12']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes13']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes14']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes15']==1 ? 'V':'X').'
      <br>
      <br>
      <br>
    <p style="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes16']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes17']==1 ? 'V':'X').'   
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes18']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes19']==1 ? 'V':'X').'
    </p>
      <br>
      <br>
      <p style="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes20']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes21']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes22']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes23']==1 ? 'V':'X').'
    </p>
      <br>
      <br>
      <p style="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes24']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes25']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes26']==1 ? 'V':'X').'
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes27']==1 ? 'V':'X').'
    </p>
    </td>

    <td  height="300px" width="450px" style="text-align: left; background-image: url(txr1/test4printcoba.png);background-repeat: no-repeat;">
    <p style="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       '.($row['tes28']==1 ? 'V':'X').'
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       '.($row['tes29']==1 ? 'V':'X').'
    </p>
    <br>
    <br>
    <br>
    <p style="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       '.($row['tes30']==1 ? 'V':'X').'
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       '.($row['tes31']==1 ? 'V':'X').'
    </p>
    <br>
    <br>
    <br>
    <br>
    <p style="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       '.($row['tes32']==1 ? 'V':'X').'
    </p>
<br>
    <p style="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       '.($row['tes33']==1 ? 'V':'X').'
    </p>
    </td>

    <td height="300px" width="200px" style="text-align: left; background-image: url(txr1/test5printcoba.png);background-repeat: no-repeat;">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes34']==1 ? 'V':'X').'
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes35']==1 ? 'V':'X').'
      <br>
      <br>
      <br>
      <br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      '.($row['tes36']==1 ? 'V':'X').'
    </td>
    <tr>
      <td colspan="2" height="100" width="400" style="text-align: left; background-image: url(txr1/namates.png); background-repeat: no-repeat;"></td>
        <td></td>
        <td style="background-image: url(txr1/namates5.png); background-repeat: no-repeat;"></td>
    </tr>
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
    <td width="300px" style="text-align: center;">Test 1a</td>
    <td style="text-align: left; font-size: 11px;">&nbsp;'.($row['test1a']).'</td>
  </tr>
  <tr>
    <td>2</td>
    <td width="300px" style="text-align: center;">Test 1b</td>
    <td style="text-align: left; font-size: 11px;">&nbsp;'.($row['test1b']).'</td>
  </tr>
  <tr>
    <td>3</td>
     <td width="300px" style="text-align: center;">Test 2</td>
    <td style="text-align: left;font-size: 11px;">&nbsp;'.($row['test2']).'</td>
  </tr>
  <tr>
    <td>4</td>
    <td width="300px" style="text-align: center;">Test 3</td>
    <td style="text-align: left; font-size: 11px;">&nbsp;'.($row['test3']).'</td>
  </tr>
  <tr>
    <td>5</td>
   <td width="300px" style="text-align: center;">Test 4</td>
    <td style="text-align: left; font-size: 11px;">&nbsp;'.($row['test4']).'</td>
  </tr>
  <tr>
    <td>6</td>
   <td width="300px" style="text-align: center;">Test 5</td>
    <td style="text-align: left;font-size: 11px;">&nbsp;'.($row['test5']).'</td>
  </tr>
</table>
</div>
<div class="container-fluid">
<div class="text-right">
    <p style="font-size: 11px;">Bandara Juanda, '.date(("d-M-Y"), strtotime($row['tanggal'])).' </p>
    <p style="width: 140px; height: 70px; margin-left:82%;"><img src="ttd/'.$row['ttd_img'].'" width="140px;" height="70px;"></p>
    <p style="font-size: 11px;">'.$row['petugas'].'</p>
    
</div></div>
</div>
<br>
<br>
<br>
<br>
');

}
$nama_file = "Laporan TXR";
$mpdf->Output($nama_file.'/'.date(("d-m-Y"), strtotime($_POST['tanggal1'])).'/'.date(("d-m-Y"), strtotime($_POST['tanggal2'])).".pdf" ,'I');
// // $count=mysqli_num_rows($result);
	
// $row= mysqli_fetch_array($result);


// /* close connection */
// mysqli_close($conn);
?>


