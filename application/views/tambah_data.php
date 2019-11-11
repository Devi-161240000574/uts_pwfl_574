<!DOCTYPE html>
<html>
<head>
	<base href="<?= base_url() ?>">
	<title>Tambah Data Data</title>
</head>
<body>
 <?php echo "<h3>".$judul."</h3>"; ?>
<form method="post" action="<?php echo base_url('crud/simpan')?>" enctype="multipart/form-data">
	<div class="form-group row">		
			<label for="Nim" class="col-sm-2 col-form-label">NIM :</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="nim"placeholder="NIM">
			</div>
	</div>

	<div class="form-group row">		
			<label for="Nama" class="col-sm-2 col-form-label"> Nama :</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="nama" placeholder="Nama">
			</div>
	</div>

	<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
 	 <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="Laki-Laki">
            Laki -Laki
     </label>
 	 <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="Perempuan">
            Perempuan
     </label>


	<div class="form-group row">		
			<label for="Alamat" class="col-sm-2 col-form-label"> Alamat :</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="alamat"placeholder="Alamat">
			</div>
	</div>

	<div class="form-group row">		
			<label for="Nomer Hp" class="col-sm-2 col-form-label"> Nomer Handphone :</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="nomer_hp" placeholder="Nomer Hp">
			</div>
	</div>

	<div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
    </div>	

    <div class="col-auto">
    <div class="col-sm-10">
      <a href="<?php echo base_url()."crud/tampilan";?>"><input type="button" class="btn btn-primary" value="Batal"></a>
    </div>	
</form>
</div>
</div>
</form>
</body>
</html>
