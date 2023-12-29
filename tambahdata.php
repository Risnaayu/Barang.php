<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
</head>
<body>
<h1>Tambah Data Barang</h1>
<br/>
<a href="index.php">Data Barang</a>
<br/><br/>
<form action="prosestambah.php" method="post" enctype="multipart/form-data">

<table width="400" >
<tr>
<td>KODE</td>
<td><input type="text" name="kode"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" requied></td>
</tr>
<tr>
<td>Kategori</td>
<td>
<input type="radio" value=B name="kategori">Buku
<input type="radio" value=P name="kategori">Pulpen
<input type="radio" value=T name="kategori">Tas
</td>
</tr>
<tr>
<td>Satuan</td>
<td>
<Select name=satuan>
<option value=Pcs Informasi>Pcs</option>
<option value=Rim Informatika>Rim</option>
<option value=Pack Informatika>Pack</option>
</select>
</td>
</tr>
<tr>
<td>Harga Modal</td>
<td><input type="text" name="harga"></td>
</tr>
<tr>
<td>Harga Jual</td>
<td><input type="text" name="hrg_jual"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="file"></td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="save" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
</body>
</html>