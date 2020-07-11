<div class="site-section" id="property-details">
      <div class="container-fluid">
        
        <div class="card">
          <h5 class="card-header">Detail Hunian</h5>
          <div class="card-body">

            <?php foreach ($hunian as $huni) : ?>
            <div class="row">
              <div class="col-md-4">
                <img src="<?php echo base_url().'/uploads/'.$huni->gambar ?>" class="card-img-top">
              </div>
              <div class="col-md-8">
                <table class="table">
                  <tr>
                    <td>Nama Hunian </td>
                    <td><strong><?php echo $huni->nama_hunian ?></strong></td>
                  </tr>

                  <tr>
                    <td>Lokasi</td>
                    <td><strong><?php echo $huni->ket_lokasi?></strong></td>
                  </tr>

                  <tr>
                    <td>Alamat </td>
                    <td><strong><?php echo $huni->alamat ?></strong></td>
                  </tr>

                  <tr>
                    <td>Kategori </td>
                    <td><strong><?php echo $huni->kategori ?></strong></td>
                  </tr>

                  <tr>
                    <td>Deskripsi </td>
                    <td><strong><?php echo $huni->deskripsi ?></strong></td>
                  </tr>

                  <tr>
                    <td>Harga </td>
                    <td><strong>Rp.<?php echo $huni->harga ?>/bulan</strong></td>
                  </tr>

                  <tr>
                    <td>No HP Pemilik </td>
                    <td><strong><?php echo $huni->no_hp ?></strong></td>
                  </tr

                </table>
              </div>
            </div>
          <?php endforeach ?>
          </div>
        </div>
          
      </div>
    </div>