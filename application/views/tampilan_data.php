<!DOCTYPE html>
<html>
<head>
	<base href="<?= base_url() ?>">
	<title>Tampil Data</title>
</head>
<body>
	<center>
		<h1>Tampil Data</h1>
	</center>
	<a href='crud/tambah' class="btn btn-primary">Tambah Data</a>
	<a href='crud/tampilan2' class="btn btn-primary">Tampilan Histori</a>
		<table border="1" style="margin:20px auto;">
			<thead>
	<tr>
		<th>ID</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Nomer Hp</th>
		<th>Edit</th>
		<th>Hapus</th>
		</tr>
	</thead>
		<?php
		foreach ($isi as $k0 => $v0) {
		?>
		<tr>
			<td><?php echo $v0['idmhs'] ?></td>
			<td><?php echo $v0['nim'] ?></td>
			<td><?php echo $v0['nama'] ?></td>
			<td><?php echo $v0['jenis_kelamin'] ?></td>
			<td><?php echo $v0['alamat'] ?></td>
			<td><?php echo $v0['nomer_hp'] ?></td>
			<td><a href='<?php echo "crud/ubah/".$v0["idmhs"] ?>'>ubah<a/></td>
			<td><a href='<?php echo "crud/hapus/".$v0["idmhs"] ?>'>hapus<a/></td>
		</tr>
		<?php } ?>
		</table>
	</form>	
</body>
</html>