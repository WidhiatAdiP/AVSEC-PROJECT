<?php
    session_start();
      include "koneksi.php";
      date_default_timezone_set('Asia/Jakarta');

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
      $xjenis_lap = $_POST['xjenis_lap'];
      $ttd_img = $_SESSION['ttd_img'];


      // $mysqli  = "INSERT INTO lap_wtmd1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, cValues, cValues2, cValues3 , cValues4 , keterangan , keterangan2 , keterangan3, keterangan4, petugas, id_petugas ,jenis_lap) VALUES ('$lokasi', '$merk', '$sn', '$peleton', '$tanggal' , '$jam', '$tes', '$dinas', '$lknew' , '$pknew', '$pnew' , '$perkanew', '$keterangan' , '$keterangan2', '$keterangan3' , '$keterangan4' ,'$petugas' ,'$id_petugas','$jenis_lap')";

      $mysqlix  = "INSERT INTO lap_txr1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, tes2, tes3,tes4,tes5,tes6,tes7,tes8,tes9,tes10,tes11,tes12,tes13,tes14,tes15,tes16,tes17,tes18,tes19,tes20,tes21,tes22,tes23,tes24,tes25,tes26,tes27,tes28,tes29,tes30,tes31 ,tes32 ,tes33, tes34,tes35,tes36, test1a, test1b, test2,test3,test4,test5, petugas, id_petugas ,jenis_lap,ttd_img) VALUES ('$xlokasi', '$xtype', '$xsn', '$xpeleton', '$xtanggal' , '$xjam', '$xtes', '$xdinas','$tes2','$tes3','$tes4','$tes5','$tes6','$tes7','$tes8','$tes9','$tes10','$tes11','$tes12','$tes13','$tes14','$tes15','$tes16','$tes17','$tes18','$tes19','$tes20','$tes21','$tes22','$tes23','$tes24','$tes25','$tes26','$tes27','$tes28','$tes29','$tes30','$tes31','$tes32','$tes33','$tes34','$tes35','$tes36','$test1a','$test1b','$test2','$test3','$test4','$test5','$xpetugas' ,'$xid_petugas','$xjenis_lap','$ttd_img')";


      $result  = mysqli_query($conn, $mysqlix);
      if ($result) {
        // echo "Input berhasil";
        header('location:index.php');
      } else {
        echo "Input gagal";

      }
      mysqli_close($conn);
    ?>