<h1>Tambah Layanan</h1>

	<form method='POST' action="simpan.php">
		<div class="form-group">
		    <label for="Judul">Nama Layanan</label>
		    <input type="text" class="form-control" name="nama" id="judul" required >    
		</div>

		<div class="form-group">
			<label for="isi">Deskripsi</label>
			<textarea class="form-control" name="deskripsi" rows="10" required id="isi"></textarea>
		</div>

        <br>
		<button type="submit" class="btn btn-primary">Tambah</button>
	</form>
