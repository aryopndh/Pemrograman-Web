<div class="container-fluid">
	<h3 class="section-title mb-3">EDIT DATA HUNIAN</h3>

	<?php foreach ($hunian as $huni) : ?>

		<form method="="post action="<?php echo base_url().'admin/data_hunian/update' ?>">

			<div class="for-group">
				<label>Nama Hunian</label>
				<input type="text" name="nama_hunian" class="form-control" value="<?php echo $huni->nama_hunian ?>">
			</div>

			<div class="for-group">
				<label>Keterangan Lokasi</label>
				<input type="hidden" name="id_hunian" class="form-control" value="<?php echo $huni->id_hunian ?>">
				<input type="text" name="ket_lokasi" class="form-control" value="<?php echo $huni->ket_lokasi ?>">
			</div>

			<div class="for-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $huni->alamat ?>">
			</div>

			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $huni->kategori ?>">
			</div>

			<div class="for-group">
				<label>Deskripsi</label>
				<input type="text" name="deskripsi" class="form-control" value="<?php echo $huni->deskripsi ?>">
			</div>
			
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $huni->harga ?>">
			</div>

			<div class="for-group">
				<label>NO HP Pemilik</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $huni->no_hp ?>">
			</div>

        	<button type="submit" class="btn btn-primary">Simpan</button>


		</form>

	<?php endforeach ?>
</div>