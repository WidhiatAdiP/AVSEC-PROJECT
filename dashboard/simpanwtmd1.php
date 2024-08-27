<?php
    session_start();
      include "koneksi.php";
      date_default_timezone_set('Asia/Jakarta');

      $lokasi  = $_POST['lokasi'];
      $merk  = $_POST['merk'];
      $sn  = $_POST['sn'];
      $peleton = $_POST['peleton'];
      $dinas = $_POST['dinas'];
      $tanggal = date("Y-m-d");
      $jam = date("H:i:s");
      $tes = $_POST['tes'];

      // $lkarr = $_POST['lk'];
      // $lknew = implode(",", $lkarr);

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


      // $pkarr = $_POST['pk'];
      // $pknew = implode(",", $pkarr);

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




      // $parr = $_POST['p'];
      // $pnew = implode(",", $parr);


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
      


      // $perkaarr = $_POST['perka'];
      // $perkanew = implode(",", $perkaarr);

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


      // $pkarr = $_POST['pk'];
      // $pknew = implode(",", $pkarr);

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

      $mysqli  = "INSERT INTO lap_wtmd1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, lk1,lk2,lk3,lk4,lk5,lk6,lk7,lk8,lk9,lk10, pk1,pk2,pk3,pk4,pk5,pk6,pk7,pk8,pk9,pk10, p1,p2,p3,p4,p5,p6,p7,p8,p9,p10, perka1,perka2,perka3,perka4,perka5,perka6,perka7,perka8,perka9,perka10, keterangan , keterangan2 , keterangan3, keterangan4, lk11,lk12,lk13,lk14,lk15,lk16,lk17,lk18,lk19,lk20, pk11,pk12,pk13,pk14,pk15,pk16,pk17,pk18,pk19,pk20, p11,p12,p13,p14,p15,p16,p17,p18,p19,p20, perka11,perka12,perka13,perka14,perka15,perka16,perka17,perka18,perka19,perka20, keterangan11 , keterangan12 , keterangan13, keterangan14) VALUES ('$lokasi', '$merk', '$sn', '$peleton', '$tanggal' , '$jam', '$tes', '$dinas', '$lk1', '$lk2', '$lk3', '$lk4', '$lk5' ,'$lk6', '$lk7', '$lk8', '$lk9', '$lk10', '$pk1', '$pk2', '$pk3', '$pk4', '$pk5' ,'$pk6', '$pk7', '$pk8', '$pk9', '$pk10', '$p1', '$p2', '$p3', '$p4', '$p5' ,'$p6', '$p7', '$p8', '$p9', '$p10', '$perka1', '$perka2', '$perka3', '$perka4', '$perka5' ,'$perka6', '$perka7', '$perka8', '$perka9', '$perka10','$keterangan' , '$keterangan2', '$keterangan3' , '$keterangan4' , '$lk11', '$lk12', '$lk13', '$lk14', '$lk15' ,'$lk16', '$lk17', '$lk18', '$lk19', '$lk20', '$pk11', '$pk12', '$pk13', '$pk14', '$pk15' ,'$pk16', '$pk17', '$pk18', '$pk19', '$pk20', '$p11', '$p12', '$p13', '$p14', '$p15' ,'$p16', '$p17', '$p18', '$p19', '$p20', '$perka11', '$perka12', '$perka13', '$perka14', '$perka15' ,'$perka16', '$perka17', '$perka18', '$perka19', '$perka20','$keterangan11' , '$keterangan12', '$keterangan13' , '$keterangan14')";


      $result  = mysqli_query($conn, $mysqli);
      if ($result) {
        echo "Input berhasil";
      //   header("location:index.php");
      } else {
        echo "Input gagal";

      }
      mysqli_close($conn);
    ?>

 