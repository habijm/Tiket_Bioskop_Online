<main class="main-content">
	<div class="container">
		<div class="page">



		<div class="content">
					<?php
						//cek apakah ada data atau tidak dari database
							if (count($hasil) > 0) 
							{
								// jika terdapat data
								?>
<img class="img1 borderedbox inspace-5" src="<?php echo base_url();?>uploaded_files/<?php echo $hasil['KURSI_IMAGE'];?>" alt="<?php echo $hasil['KURSI_IMAGE'];?>">


								<?php								
									
							}
							else
							{
								//jika tidak ada maka tampilkan notifikasi
								?>
									<h1>Data Not Avaible...</h1>
								<?php
							}
					?>