<?php
	$this->load->view('header_awal');
?>
	<!-- === Arrows === -->
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div><!-- /.arrows -->
	
	
	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">CURRICULUM VITAE <span class="font-thin">FOSS</span></h1>
					<h4 class="font-semibold">SISTEM INFORMASI CURRICULUM VITAE</h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="4"><img src="images/s02.png"></div><span>DATABASE</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="3"><img src="images/s01.png"></div><span>CAMPUS</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="5"><img src="images/s03.png"></div><span>TEAM</span></div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row line-row">
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">ABOUT
                        <strong>CURRICULUM VITAE FOSS</strong>
                    </h2>
                    <hr>
					<p>Website ini dibuat untuk memenuhi tugas Matakuliah FOSS yang kami sebut CURRICULUM VITAE FOSS.
					 Web ini berfungsi untuk menampung data CV kedalam database, dan dapat melakukan berbagai perintah seperti edit, delete, input dan read data.</p>
                </div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->
	
	<!-- === SLide 3 - Portfolio -->
	<div class="slide story" id="slide-3" data-slide="3">
		<div class="row subtitle-row">
				<div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">CAMPUS
                        <strong>Universitas Sebelas Maret</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url('assets/img/uns.jpg') ?>" width="100%" height=30%" title="Universitas Sebelas Maret">
                    <hr class="visible-xs">
                    <p align="center">Kampus Pusat Universitas Sebelas Maret berada di Kentingan, Surakarta, Jawa Tengah, sedangkan kampus kami berada dikampus wilayah yang terletak di Pabelan Kartasura, Kampus V Universitas Sebelas Maret. </p>
					<p>Alamat Website : <a href="http://uns.ac.id/id/"> uns.ac.id </a> </p>
                </div><!-- /row -->
	</div><!-- /slide3 -->
	
	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="box span12">
					<div class="box-header" data-original-title>
						<hr>
                    <h2 class="intro-text text-center">DATABASE
                        <strong>CURRICULUM VITAE</strong>
                    </h2>
                    <hr><div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered bootstrap-datatable datatable">
							<thead>
								<tr>
									<th><center>NO</center></th>
									<th><center>NIM</center></th>
									<th><center>Nama</center></th>
									<th><center>Jenis Kelamin</center></th>
									<th><center>Tempat</center></th>
									<th><center>Tanggal Lahir</center></th>
									<th><center>Hoby</center></th>
									<th><center>Agama</center></th>
									<th><center>Alamat</center></th>
								</tr>
							</thead>   
							<tbody>
								<?php 
								$i=1;
								foreach ($hasil as $data) {
								?>
								<tr>
									<td><?php echo $i++;?></td>
									<td><?php echo $data->nim;?></td>
									<td><?php echo $data->nama;?></td>
									<td><?php echo $data->jk;?></td>
									<td><?php echo $data->tempat;?></td>
									<td><?php echo $data->tanggal;?></td>
									<td><?php echo $data->hoby;?></td>
									<td><?php echo $data->agama;?></td>
									<td><?php echo $data->alamat;?></td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /slide4 -->
	
	<!-- === Slide 6 / Contact === -->
	<div class="slide story" id="slide-5" data-slide="5">
		<div class="container">
		<hr>
			<h2 class="intro-text text-center"><strong>TEAM</strong>
                    </h2>
                    <hr>
                   <div class="box-content">
						<table class="table table-bordered bootstrap-datatable datatable">
							<thead>
								<tr>
									<th><center>NO</center></th>
									<th><center>Nama</center></th>
									<th><center>NIM</center></th>
									<th><center>Peran</center></th>
									</tr>
							</thead>   
							<tbody>
								<tr>
									<td>1</td>
									<td>Fadila Aini Atista</td>
									<td>K3513019</td>
									<td>CODING TAMPIL</td>
									</tr>
								<tr>
									<td>2</td>
									<td>Ibrahim Wahyu Saputra</td>
									<td>K3513021</td>
									<td>CODING EDIT, DELETE</td>
									</tr>
								<tr>
									<td>3</td>
									<td>Muhammad Basyir</td>
									<td>K3513045</td>
									<td>CODING HALAMAN AWAL</td>
									</tr>
								<tr>
									<td>4</td>
									<td>Nurul Lailani Alifah</td>
									<td>K3513049</td>
									<td>CODING LOGIN, INPUT</td>
									</tr>
								<tr>
									<td>5</td>
									<td>Rofifah Nur Mufidah</td>
									<td>K3513061</td>
									<td>CODING DETAIL</td>
									</tr>
							</tbody>
						</table>
					</div>
			
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Pendidikan Teknik Informatika dan Komputer
Kampus V JPTK FKIP UNS Pabelan
Jl. Jend. Ahmad Yani 200A Pabelan, Kartasura, Sukoharjo 57100 
Website : http://ptik.fkip.uns.ac.id</div>
				
			</div><!-- /row -->
			<div id="contact-row-3" class="row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-phone"></i></a></p>
					<span class="hover-text font-light ">(0271)648939</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-envelope"></i></a></p>
					<span class="hover-text font-light ">ptik@fkip.uns.ac.id</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-home"></i></a></p>
					<span class="hover-text font-light ">Surakarta, Jawa Tengah</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-facebook"></i></a></p>
					<span class="hover-text font-light ">https://www.facebook/groups/PTIK.UNS2012/</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-twitter"></i></a></p>
					<span class="hover-text font-light ">@PTIK_UNS</span></a>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Slide 6 -->
</body>
<?php
	$this->load->view('footer_awal');
?>