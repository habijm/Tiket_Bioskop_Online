<main class="main-content">
  <div class="container">
    <div class="page">
      <div class="breadcrumbs">
        <?php echo anchor('home', 'Home'); ?>
        <span>Riwayat Transaksi</span>
      </div>
      <h2>Riwayat Transaksi</h2>
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <h3 class="nav-link active" href="#">Tiket Sukses Dibeli</h3>
            </li>

          </ul>
        </div>
        <?php
        //cek apakah ada data atau tidak dari database
        if (count($hasil) > 0) {
          // jika terdapat data
          foreach ($hasil as $key => $list) {
        ?>
            <div class="card-body">
              <div class="card w-100 m-2">
                <div class="card-body">
                  <div class="d-flex">
                    <div class="p-2" style="width:92%;">
                      <h5 class="card-title"><?php echo $list['NEWS_TITLE']; ?> </h5>
                      <p class="card-text">Nama Theater: <?php echo $list['NAMA_THEATER']; ?></p>
                      <p class="card-text">Kursi: <?php echo $list['KURSI_ROW']; ?></p>
                      <p class="card-text">Tanggal: <?php echo $list['TANGGAL']; ?> </p>
                      <p class="card-text">Waktu: <?php echo $list['WAKTU']; ?></p>
                      <p class="card-text">Harga: <?php echo $list['HARGA']; ?> </p>
                    </div>
                    <div class="ml-auto p-2" style="width:8%;">
                      <a href="#" class="btn btn-success">Selesai</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          <?php

          }
        } else {
          //jika tidak ada maka tampilkan notifikasi
          ?>
          <h1>Data Not Avaible...</h1>
        <?php
        }
        ?>


      </div>
    </div>






  </div>
</main>