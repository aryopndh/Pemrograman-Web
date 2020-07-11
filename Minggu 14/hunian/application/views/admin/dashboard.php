    <section class="site-section" id="agents-section">
      <div class="container-fluid">
        <div class="col-md-4 text-left">
            <h2 class="section-title mb-3">Tabel Data Hunian</h2>
          </div>

        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Nama Hunian</th>
            <th>Keterangan Lokasi</th>
            <th>Alamat</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kontak</th>
            <th colspan="3">Aksi</th>
          </tr>

          <?php
          $no=1;
          foreach($hunian as $huni) : ?>

          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $huni->nama_hunian ?></td>
            <td><?php echo $huni->ket_lokasi ?></td>
            <td><?php echo $huni->alamat ?></td>
            <td><?php echo $huni->kategori ?></td>
            <td><?php echo $huni->deskripsi ?></td>
            <td>Rp. <?php echo $huni->harga ?>/bulan</td>
            <td><?php echo $huni->no_hp ?></td>
            <td><div class="btn btn-success btn-sm "><i class="fas fa-search-plus">cari</i></div></td>
            <td><?php echo anchor('admin/data_hunian/edit/' .$huni->id_hunian, '<div class="btn btn-primary btn-sm "><i class="fa fa-edit"></i>edit</div>') ?></td>
            <td><?php echo anchor('admin/data_hunian/hapus/' .$huni->id_hunian, '<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i>hapus</div>') ?></td>
          </tr>

          <?php endforeach ?>
        </table>
      </div>
    </section>




 <div class="site-section" id="properties-section">
      <div class="container">
        <h2 class="section-title mb-3">Hunian</h2>  
        <div class="row large-gutters">
        <?php foreach ($hunian as $huni) : ?>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a class="d-inline-block mb-4"><?php echo anchor('dashboard/detailadmin/'.$huni->id_hunian,'<div type="hidden"></div') ?><img src="<?php echo base_url().'/uploads/'.$huni->gambar ?>" class="img-fluid"></a>
                    <div></div></div>
                    <div class="ftco-media-details">
                      <h3><?php echo $huni->nama_hunian ?></h3>
                      <p><?php echo $huni->ket_lokasi ?></p>
                      <strong>Rp. <?php echo $huni->harga ?>/bulan</strong>
                    </div>
                  </div> 

                </div>
          </div>

        <?php endforeach; ?>
        </div>
      </div>

    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Kontak Kami</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Get In Touch</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Sriwibowo VIII Street, SRG</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+62 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">112201806087@mhs.dinus.ac.id</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Tentang Kami</h2>
                <p>Info Sewa Hunian merupakan sebuah web yang berisikan tentang info hunian seperti kost, ruko atau apartemen yang disewakan. </p>
              </div>
              <div class="col-md-3 mx-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Created <i class="icon-heart text-danger" aria-hidden="true"></i> by <a>Aryopndh</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>


