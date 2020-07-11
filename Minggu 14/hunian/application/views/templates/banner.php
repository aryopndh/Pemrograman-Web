    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-3">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="<?php echo base_url('dashboard  ') ?>" class="mb-0">Info Sewa hunian</a></h1>
          </div>

          <div class="col-9 col-md-15 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?php echo base_url('dashboard') ?>" class="nav-link">Beranda</a></li>
                <li><a href="#properties-section" class="nav-link">Hunian</a></li>
                <li><a href="#howitworks-section" class="nav-link">Panduan</a></li>
                <li><a href="#contact-section" class="nav-link">Kontak</a></li>
                <?php if($this->session->userdata('username')) { ?>
                  <li><?php echo anchor('auth/logout','<div class="">Logout</div>') ?></li>
                <?php } else { ?>
                  <li><?php echo anchor('auth/login','<div class="">Login</div>') ?></li>
                <?php } ?>
                </li>
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
              <h1 class="text-shadow">Sewakan &amp; Iklankan Hunian Anda Disini</h1>
              <p class="mb-5 text-shadow">Anda dapat menyewakan hunian dengan memberikan info yang lengkap </p>
              <p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
  
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets/images/hero_2.jpg);" data-aos="fade" id="home-section">
  
  
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Temukan sewa hunian yang anda inginkan disini</h1>
              <p class="mb-5 text-shadow">Anda dapat melihat informasi lengkap mengenai sewa hunian yang sesuai dengan keinginan anda?</p>
              <p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
    </div>   
    
  </div>