<div class="wrapper row3">
	<main class="hoc container clear">
		<div class="content">
					<?php
						//cek apakah ada data atau tidak dari database
							if (count($hasil) > 0) 
							{
								// jika terdapat data
									foreach ($hasil as $key => $list)
									{
										?>
											<h1><?php echo $list['NEWS_TITLE'];?></h1>
												<img width="150" height="220" class="img1 borderedbox inspace-5" src="<?php echo base_url();?>uploaded_files/<?php echo $list['NEWS_IMAGE'];?>" alt="<?php echo $list['NEWS_IMAGE'];?>">
																						<p><?php echo $list['NEWS_DESCRIPTION'];?></p>
											<p><?php echo anchor('news/detail/'.$list['NEWS_ID'],'read more...',);?></p>
											<div class="clear" style="margin-bottom:50px;"></div>

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
	</main>
</div>