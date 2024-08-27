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

if (isset($_POST['1_tkm'])) {
      $_1_tkm = $_POST['1_tkm'];
}
else {
      $_1_tkm = '0';
}
if (isset($_POST['1_es'])) {
      $_1_es= $_POST['1_es'];
}
else {
      $_1_es = '0';
}
if (isset($_POST['1_c4'])) {
      $_1_c4= $_POST['1_c4'];
}
else {
      $_1_c4 = '0';
}
if (isset($_POST['1_sh'])) {
      $_1_sh= $_POST['1_sh'];
}
else {
      $_1_sh = '0';
}
if (isset($_POST['1_tnt'])) {
      $_1_tnt= $_POST['1_tnt'];
}
else {
      $_1_tnt = '0';
}


if (isset($_POST['2_3d'])) {
      $_2_3d= $_POST['2_3d'];
}
else {
      $_2_3d = '0';
}


if (isset($_POST['3_reply'])) {
      $_3_reply= $_POST['3_reply'];
}
else {
      $_3_reply = '0';
}



if (isset($_POST['4_om'])) {
      $_4_om= $_POST['4_om'];
}
else {
      $_4_om = '0';
}
if (isset($_POST['4_im'])) {
      $_4_im= $_POST['4_im'];
}
else {
      $_4_im = '0';
}
if (isset($_POST['4_zoom'])) {
      $_4_zoom= $_POST['4_zoom'];
}
else {
      $_4_zoom = '0';
}
if (isset($_POST['4_ci'])) {
      $_4_ci= $_POST['4_ci'];
}
else {
      $_4_ci = '0';
}
if (isset($_POST['4_bwimage'])) {
      $_4_bwimage= $_POST['4_bwimage'];
}
else {
      $_4_bwimage = '0';
}




if (isset($_POST['5_b'])) {
      $_5_b= $_POST['5_b'];
}
else {
      $_5_b = '0';
}
if (isset($_POST['5_s'])) {
      $_5_s= $_POST['5_s'];
}
else {
      $_5_s = '0';
}     


if (isset($_POST['6_acc'])) {
      $_6_acc= $_POST['6_acc'];
}
else {
      $_6_acc = '0';
}
if (isset($_POST['6_r'])) {
      $_6_r= $_POST['6_r'];
}
else {
      $_6_r = '0';
}  


if (isset($_POST['7_analisa'])) {
      $_7_analisa= $_POST['7_analisa'];
}
else {
      $_7_analisa = '0';
}  



if (isset($_POST['8_acc'])) {
      $_8_acc= $_POST['8_acc'];
}
else {
      $_8_acc = '0';
}
if (isset($_POST['8_r'])) {
      $_8_r= $_POST['8_r'];
}
else {
      $_8_r = '0';
}  




//keterangan

if (isset($_POST['ket_1_tkm'])) {
      $ket_1_tkm = $_POST['ket_1_tkm'];
}
else {
      $ket_1_tkm = 'normal';
}
if (isset($_POST['ket_1_es'])) {
      $ket_1_es= $_POST['ket_1_es'];
}
else {
      $ket_1_es = 'normal';
}
if (isset($_POST['ket_1_c4'])) {
      $ket_1_c4= $_POST['ket_1_c4'];
}
else {
      $ket_1_c4 = 'normal';
}
if (isset($_POST['ket_1_sh'])) {
      $ket_1_sh= $_POST['ket_1_sh'];
}
else {
      $ket_1_sh = 'normal';
}
if (isset($_POST['ket_1_tnt'])) {
      $ket_1_tnt= $_POST['ket_1_tnt'];
}
else {
      $ket_1_sh = 'normal';
}


if (isset($_POST['ket_2_3d'])) {
      $ket_2_3d= $_POST['ket_2_3d'];
}
else {
      $ket_2_3d = 'normal';
}


if (isset($_POST['ket_3_reply'])) {
      $ket_3_reply= $_POST['ket_3_reply'];
}
else {
      $ket_3_reply = 'normal';
}



if (isset($_POST['ket_4_om'])) {
      $ket_4_om= $_POST['ket_4_om'];
}
else {
      $ket_4_om = 'normal';
}
if (isset($_POST['ket_4_im'])) {
      $ket_4_im= $_POST['ket_4_im'];
}
else {
      $ket_4_im = 'normal';
}
if (isset($_POST['ket_4_zoom'])) {
      $ket_4_zoom= $_POST['ket_4_zoom'];
}
else {
      $ket_4_zoom = 'normal';
}
if (isset($_POST['ket_4_ci'])) {
      $ket_4_ci= $_POST['ket_4_ci'];
}
else {
      $ket_4_ci = 'normal';
}
if (isset($_POST['ket_4_bwimage'])) {
      $ket_4_bwimage= $_POST['ket_4_bwimage'];
}
else {
      $ket_4_bwimage = 'normal';
}




if (isset($_POST['ket_5_b'])) {
      $ket_5_b= $_POST['ket_5_b'];
}
else {
      $ket_5_b = 'normal';
}
if (isset($_POST['ket_5_s'])) {
      $ket_5_s= $_POST['ket_5_s'];
}
else {
      $ket_5_s = 'normal';
}     


if (isset($_POST['ket_6_acc'])) {
      $ket_6_acc= $_POST['ket_6_acc'];
}
else {
      $ket_6_acc = 'normal';
}
if (isset($_POST['ket_6_r'])) {
      $ket_6_r= $_POST['ket_6_r'];
}
else {
      $ket_6_r = 'normal';
}  


if (isset($_POST['ket_7_analisa'])) {
      $ket_7_analisa= $_POST['ket_7_analisa'];
}
else {
      $ket_7_analisa = 'normal';
}  



if (isset($_POST['ket_8_acc'])) {
      $ket_8_acc= $_POST['ket_8_acc'];
}
else {
      $ket_8_acc = 'normal';
}
if (isset($_POST['ket_8_r'])) {
      $ket_8_r= $_POST['ket_8_r'];
}
else {
      $ket_8_r = 'normal';
}  

    
      $petugas = $_SESSION['nama'];
      $id_petugas = $_SESSION['id_user'];

      $tes = $_POST['tes'];
      $jenis_lap = 'X-Ray HBS';

      $ttd_img = $_SESSION['ttd_img'];



      // $mysqli  = "INSERT INTO lap_wtmd1 (lokasi, merk, sn, peleton,tanggal,jam, nama_tes, dinas, cValues, cValues2, cValues3 , cValues4 , keterangan , keterangan2 , keterangan3, keterangan4, petugas, id_petugas ,jenis_lap) VALUES ('$lokasi', '$merk', '$sn', '$peleton', '$tanggal' , '$jam', '$tes', '$dinas', '$lknew' , '$pknew', '$pnew' , '$perkanew', '$keterangan' , '$keterangan2', '$keterangan3' , '$keterangan4' ,'$petugas' ,'$id_petugas','$jenis_lap')";

      $mysqli  = "INSERT INTO lap_xray 
      (`lokasi`, 
      `merk`, 
      `sn`, 
      `peleton`, 
      `tanggal`, 
      `jam`, 
      `nama_tes`, 
      `dinas`, 
      `1_tkm`, 
      `1_es`, 
      `1_c4`, 
      `1_sh`, 
      `1_tnt`, 
      `2_3d`, 
      `3_reply`, 
      `4_om`, 
      `4_im`, 
      `4_zoom`, 
      `4_ci`, 
      `4_bwimage`, 
      `5_b`, 
      `5_s`, 
      `6_acc`, 
      `6_r`, 
      `7_analisa`, 
      `8_acc`, 
      `8_r`, 
      `ket_1_tkm`, 
      `ket_1_es`, 
      `ket_1_c4`, 
      `ket_1_sh`, 
      `ket_1_tnt`, 
      `ket_2_3d`, 
      `ket_3_reply`, 
      `ket_4_om`, 
      `ket_4_im`, 
      `ket_4_zoom`, 
      `ket_4_ci`, 
      `ket_4_bmimage`, 
      `ket_5_b`, 
      `ket_5_s`, 
      `ket_6_acc`, 
      `ket_6_r`, 
      `ket_7_analisa`, 
      `ket_8_acc`, 
      `ket_8_r`,
      `jenis_lap`,
      `ttd_image`
      ) 
      VALUES ('$lokasi', 
      '$merk', 
      '$sn', 
      '$peleton', 
      '$tanggal', 
      '$jam', 
      '$tes', 
      '$dinas', 
      '$_1_tkm', 
      '$_1_es', 
      '$_1_c4', 
      '$_1_sh', 
      '$_1_tnt', 
      '$_2_3d', 
      '$_3_reply', 
      '$_4_om', 
      '$_4_im', 
      '$_4_zoom', 
      '$_4_ci', 
      '$_4_bwimage', 
      '$_5_b', 
      '$_5_s', 
      '$_6_acc', 
      '$_6_r', 
      '$_7_analisa', 
      '$_8_acc', 
      '$_8_r', 
      '$ket_1_tkm', 
      '$ket_1_es', 
      '$ket_1_c4', 
      '$ket_1_sh', 
      '$ket_1_tnt', 
      '$ket_2_3d', 
      '$ket_3_reply', 
      '$ket_4_om', 
      '$ket_4_im', 
      '$ket_4_zoom', 
      '$ket_4_ci', 
      '$ket_4_bmimage', 
      '$ket_5_b', 
      '$ket_5_s', 
      '$ket_6_acc', 
      '$ket_6_r', 
      '$ket_7_analisa', 
      '$ket_8_acc', 
      '$ket_8_r',
      '$jenis_lap',
      '$ttd_img'
      )";


      $result  = mysqli_query($koneksi, $mysqli);
      if ($result) {
        // echo "Input berhasil";
        header("location:xray.php");
      } else {
        echo $result;
        echo "Input gagal";

      }
      echo $mysqli;
      mysqli_close($koneksi);
    ?>

 