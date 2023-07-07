<main class="main-content">
    <div class="container">
        <div class="page">
            <div class="breadcrumbs">
                <?php echo anchor('home', 'Home'); ?>
                <span>Profil</span>
            </div>


            <?php
            //cek apakah ada data atau tidak dari database
            if (count($hasil) > 0) {
                // jika terdapat data

            ?>
                <div class="row align-items-center flex-row-reverse">

                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color" style="font">Habi Jiyan Mustaqim</h3>

                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>1 Juli 2002</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Country</label>
                                        <p>Indonesia</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>Sleman, Daerah Istimewa Yogyakarta</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>habi@gmail.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>0822123123213</p>
                                    </div>
                                    <div class="media">
                                        <label>Instagram</label>
                                        <p>@habijiyanm</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <center>
                                <img src="<?php echo base_url() ?>asset/dummy/Fotoo.png" title="" alt="" style="vertical-align: middle;
  width: 300px;
  height: 300px;
  border-radius: 50%;">
                            </center>
                        </div>
                    </div>
                </div>
        </div>
    <?php

            } else {
                //jika tidak ada maka tampilkan notifikasi
    ?>
        <h1>Data Not Avaible...</h1>
    <?php
            }
    ?>

    </div>
    </div>
    </div> <!-- .container -->
</main>