<!DOCTYPE html>
<html>
<head>
<title>Upload File </title>
</head>
<body>
<h1>Upload File </h1>
<?php
include 'koneksi.php';
if($_POST['save']){
// menangkap data yang di kirim dari form
$vkode = $_POST['kode'];
$vnama = $_POST['nama'];
$vkategori = $_POST['kategori'];
$vsatuan = $_POST['satuan'];
$vharga = $_POST['harga'];
$vhargajual = $_POST['hrg_jual'];

$ekstensi_diperbolehkan = array('png','jpg');
$photo = $_FILES['file']['name'];
$x = explode('.', $photo);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$namafile = 'img_'.$vkode.'.jpg';
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){
    move_uploaded_file($file_tmp, 'file/'.$namafile);
    $query = mysqli_query($koneksi,"insert into tb_barang (kode,nama,kategori,satuan,harga,hrg_jual,photo) values('$vkode','$vnama','$vkategori','$vsatuan','$vharga','$vhargajual','$namafile')");
    if($query){
    echo "<script>alert('DATA BERHASIL DI SIMPAN');window.location='index.php';</script>";
    }else{
    echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
    }
    }else{
    echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
    }
    }else{
    
    echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='tambahdata.php';</script>";
    }
    }
    ?>
</body>
</html>