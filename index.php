<!DOCTYPE html>
<html>
<head>
<title>Tambah Data </title>
</head>
<body>
<h1>Tambah Data Barang</h1>
<?php
include 'koneksi.php';
?>
<br/>
<a href="tambahdata.php">Tambah Data</a>
<br/><br/>
<table border="1" cellpadding="10">
<tr>
<th>No</th>
<th>Kode</th>
<th>Nama</th>
<th>Kategori</th>
<th>Satuan</th>
<th>Harga Modal</th>
<th>Harga Jual</th>
<th>Photo</th>
</tr>
<?php
$no = 1;
$data = mysqli_query($koneksi,"select * from tb_barang");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kode']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td>
<?php
if($d['kategori']=='B') echo 'Buku';
if($d['kategori']=='P') echo 'Pulpen';
elseif($d['kategori']=='T') echo 'Tas';
?>
</td>
<td><?php echo $d['satuan']; ?></td>
<td><?php echo $d['harga']; ?></td>
<td><?php echo $d['hrg_jual']; ?></td>
<td>
<img src="<?php echo "file/".$d['photo']; ?>" width="100" height="130" >
</td>
<td>
<a href="editbrg.php?id=<?php echo $d['kode'];
?>">Edit</a> |
<a href="proseshapus.php?id=<?php echo $d['kode']; ?>"
onclick="return confirm('Anda yakin akan menghapus data ini?\n<?php echo
$d['kode']; ?>')">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
<br/>
<?php
echo "Total data : ". mysqli_num_rows($data)." tb_barang";
?>
</body>
</html>