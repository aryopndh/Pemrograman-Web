    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-3">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="<?php echo base_url('admin/dashboard_admin') ?>" class="mb-0">ADMIN INFO HUNIAN</a></h1>
          </div>

          <div class="col-9 col-md-15 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?php echo base_url('admin/dashboard_admin') ?>" class="nav-link">Beranda</a></li>
                <li><a href="#agents-section" class="nav-link">Tabel Data Hunian</a></li>
                <li><a href="#properties-section" class="nav-link">Hunian</a></li>
                <li><a href="#contact-section" class="nav-link">Kontak</a></li>
                <?php if($this->session->userdata('username')) { ?>
                  <li><?php echo anchor('auth/logout','<div class="">Logout</div>') ?></li>
                <?php } else { ?>
                  <li><?php echo anchor('auth/login','<div class="">Login</div>') ?></li>
                <?php } ?>
                
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

      <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets/images/hero_1.jpg);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Inputkan Hunianmu</h1>
              <p class="mb-5 text-shadow">Anda dapat menginputkan hunian yang ingin anda sewakan pada tombol dibawah </p>
              <p><a class="btn btn-primary px-5 py-3" data-toggle="modal" data-target="#tambah_hunian">Tambah Hunian</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
    
  </div>
</div>

    <!-- Modal -->
<div class="modal fade" id="tambah_hunian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Hunian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_hunian/tambah_aksi' ?>" method="post" enctype="multipart/form-data"> 

          <div class="form-group">
            <input type="hidden" name="id_hunian" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Hunian</label>
            <input type="text" name="nama_hunian" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan Lokasi</label>
            <input type="text" name="ket_lokasi" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control">
          </div>

          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control">
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div>

          <div class="form-group">
            <label>No HP Pemilik</label>
            <input type="text" name="no_hp" class="form-control">
          </div>

          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
          </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
