<main class="main-content">
			<div class="container">
				<div class="page">
					<div class="row">
						<div class="col-lg">
							<div class="slider">
								<ul class="slides">
									<li><a href="#"><img src=" <?php echo base_url()?>asset/dummy/Slide1.png" alt="Slide 1"></a></li>
									<li><a href="#"><img src=" <?php echo base_url()?>asset/dummy/Slide2.png" alt="Slide 2"></a></li>
									<li><a href="#"><img src=" <?php echo base_url()?>asset/dummy/Slide3.png" alt="Slide 3"></a></li>
								</ul>
							</div>
						</div>
					</div> <!-- .row -->



					<div class="row  mt-5">

							<h2 class="section-title" style="color:black;">NOW PLAYING</h2>
							<div class="movie-list">
									<?php
						//cek apakah ada data atau tidak dari database
							if (count($hasil1) > 0) 
							{
								// jika terdapat data
									foreach ($hasil1 as $key => $list)
									{
										?>
							<div class="movie">
								<img class="movie-poster" src="<?php echo base_url();?>uploaded_files/<?php echo $list['NEWS_IMAGE'];?>" alt="<?php echo $list['NEWS_IMAGE'];?>">
								<div class="movie-title"><a href="<?php echo base_url()?>single.html">Fast X</a></div>
								<p>6,3⭐</p>
							</div>
							

										<?php
									
									}
							}
							else
							{
								//jika tidak ada maka tampilkan notifikasi
								?>
									<h1>Data Not Avaible...</h1>
								<?php
							}
					?>
							<div class="text-center">
						  <button type="button" class="btn btn-warning">Lainnya</button>
						</div>	
						</div>
					</div>

					<div class="row mt-5">
						
							<h2 class="section-title" style="color:black;">UP COMING</h2>
							<div class="movie-list">
							<div class="movie">
								<figure class="movie-poster"><img src="<?php echo base_url()?>asset/dummy/transformer.png" alt="#"></figure>
								<div class="movie-title"><a href="<?php echo base_url()?>single.html">Transformer: Rise Of The Beasts</a></div>
								
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="<?php echo base_url()?>asset/dummy/detektif.png" alt="#"></figure>
								<div class="movie-title"><a href="<?php echo base_url()?>single.html">Detektif Jaga Jarak</a></div>
							
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="<?php echo base_url()?>asset/dummy/mermaid.png" alt="#"></figure>
								<div class="movie-title"><a href="<?php echo base_url()?>single.html">The Little Mermaid</a></div>
							
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="<?php echo base_url()?>asset/dummy/starsyn.png" alt="#"></figure>
								<div class="movie-title"><a href="<?php echo base_url()?>single.html">Star Syndrome</a></div>
							</div>
					</div>

					<div class="text-center">
  <button type="button" class="btn btn-warning">Lainnya</button>
</div>
				</div>
			
				<div class="komentar layout_padding mt-5" >
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Tanggapan Customer</h1>
                  <div class="bulit_icon"><img src="<?php echo base_url()?>asset/dummy/bulit-icon.png"></div>
               </div>
            </div>
            <?php
						//cek apakah ada data atau tidak dari database
							if (count($hasil2) > 0) 
							{
								// jika terdapat data
									foreach ($hasil2 as $key => $list)
									{
										?>
         
            <div class="client_section_2">
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><img src="<?php echo base_url();?>uploaded_files/<?php echo $list['FOTO_PROFILE'];?>"></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text"><?php echo $list['KOMENTAR_NAME'];?></h3>
                     <p class="client_text">"<?php echo $list['PESAN'];?>"</p>
                  </div>
               </div>
              
										<?php
									
									}
							}
							else
							{
								//jika tidak ada maka tampilkan notifikasi
								?>
									<h1>Data Not Avaible...</h1>
								<?php
							}
					?>
		
               
            </div>
      
      </div>
				
				
			</div> 
			<!-- .container -->
			 
		</main>