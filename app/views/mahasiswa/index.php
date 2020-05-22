<div class="container mt-4">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-2">
		<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
		  Tambah Mahasiswa
		</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari Apa?" name="keyword" id="keyword" autocomplete="off">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6 mt-2">
			<h3>Daftar Mahasiswa</h3>
	<ul class="list-group">
				<?php foreach( $data['mhs'] as $mhs ) : ?>
  		<li class="list-group-item">
  			<?= $mhs['nama'];  ?>
  				<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">Hapus</a>
  				<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id']; ?>">Ubah</a>
  				<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
  			</li>
  		<?php endforeach; ?>
	</ul>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

		 	<input type="hidden" name="id" id="id">

		   <div class="form-group">
		    <label for="nama">Nama</label>
		    <input type="text" class="form-control" id="nama" name="nama">
		  </div>

		  <div class="form-group">
		    <label for="nim">NIM</label>
		    <input type="number" class="form-control" id="nim" name="nim">
		  </div>

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>

		<div class="form-group">
		    <label for="jurusan">jurusan</label>
		    <select class="form-control" id="jurusan" name="jurusan">
		    <option value="Teknik Informatika">Teknik Informatika</option>
		    <option value="Teknologi Informasi">Teknologi Informasi</option>
		    <option value="Sistem Informasi">Sistem Informasi</option>
		    </select>
		</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>