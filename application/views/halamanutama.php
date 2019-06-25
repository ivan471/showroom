  <header>
    <div class="card">
    <div class="row">
      <div class="col-sm-6 ly-1">
        <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('asets/img/depan/depan.jpeg'); background-position: center;">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('asets/img/depan/depan2.jpeg')">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('asets/img/depan/depan3.jpeg')">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ly-2">
        <div id="carouselExampleIndicators1" class="carousel slide shadow" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('asets/img/depan/depan.jpeg'); background-position: center;">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('asets/img/depan/depan2.jpeg')">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('asets/img/depan/depan3.jpeg')">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<footer class="py-3 bg-dark"></footer><br>
<h4 id="ly1">Rekomendasi</h4>
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <div id="slider-rekomendasi"class="row">
        <?php $i = 0; foreach ($terbaru as $baru) :?>
        <div class="col-sm-2">
          <div class="card mb-2">
            <center>
            <img class="card-img-top" src="<?= $baru['gambar1']; ?>" alt="Card image cap">
          </center>
            <div class="card-body">
              <h5 class="card-title"><a href="<?= base_url().'detail/'.$baru['link']; ?>"><?= $baru['nama']; ?></a></h5>
              <p class="card-text">Rp.<?php echo number_format($baru['harga'], 0, ".", ".") ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
    <!--/.First slide-->
    <div class="carousel-item">
      <div id="slider-rekomendasi"class="row">
        <?php $i = 0; foreach ($terbaru2 as $baru2) :?>
        <div class="col-sm-2">
          <div class="card mb-2">
            <center>
            <img class="card-img-top" src="<?= $baru2['gambar1']; ?>" alt="Card image cap">
          </center>
            <div class="card-body">
              <h4 class="card-title"><a href="<?= base_url().'detail/'.$baru2['link']; ?>"><?= $baru2['nama']; ?></a></h4>
              <p class="card-text">Rp.<?php echo number_format($baru2['harga'], 0, ".", ".") ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
</div>
  <div class="controls pull-right hidden-xs">
    <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
    <i class="fas fa-arrow-left"></i></a>
    <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
    <i class="fas fa-arrow-right"></i></a>
  </div>
</div>
<!--/.Carousel Wrapper-->
<footer class="py-3 bg-dark"></footer><br>
      <!-- Page Content -->
<section class="section-content padding-y-sm bg">
  <div class="container mb-3">
    <header class="section-heading heading-line">
	     <h4 class="title-section bg text-uppercase">Merk Populer</h4>
     </header>
     <div class="card shadow">
       <div class="row no-gutters">
	        <div class="col-sm-3">
	             <div class="card-body zoom-wrap">
		               <h5 class="title">MERK-MERK Mobil POPULER</h5>
		                 <p>Deskripsi belum ada </p>
	                  </div>
	       </div> <!-- col.// -->
	          <div class="col-sm-9">
              <ul class="row no-gutters border-cols">
	               <li class="col-sm-3">
	                  <div class="card-body">
                      <center>
                        <p class="word-limit">TOYOTA</p>
                        <input class="img-sm" type="image" src="<?=base_url('')  ?>asets/img/icon/toyota3.jpeg" width="100" height="100" data-toggle="modal" data-target="#toyota">
                      </center>
	                   </div>
	                  </li>
	                   <li class="col-sm-3">
	                      <div class="card-body"><center>
		                        <p class="word-limit">HONDA</p>
                            <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/honda.jpeg')  ?>" width="100" height="100" data-toggle="modal" data-target="#honda">
                          </center>
                          </div>
	                       </li>
	                        <li class="col-sm-3">
	                           <div class="card-body"><center>
		                           <p class="word-limit">SUZUKI</p>
                               <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/suzuki.gif')  ?>" width="100" height="100" data-toggle="modal" data-target="#suzuki">
	                           </div>
                        	</li>
                        	<li class="col-sm-3">
                        	<div class="card-body"><center>
                        		<p class="word-limit">NISSAN</p>
                        		<input class="img-sm" type="image" src="<?=base_url('asets/img/icon/nissan.png')  ?>" width="100" height="100" data-toggle="modal" data-target="#nissan">
                          </center>
                        	</div>
                        	</li>
                        </ul>
                        <ul class="row no-gutters border-cols">
                      	   <li class="col-sm-3">
                      	      <div class="card-body">
                                <center>
                      		      <p class="word-limit">MITSUBISHI</p>
                      		      <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/mitsubishi.png')  ?>" width="100" height="100" data-toggle="modal" data-target="#mitsubishi">
                                </center>
                      	      </div>
                      	    </li>
                          	<li class="col-sm-3">
                          	<div class="card-body"><center>
                          		<p class="word-limit">DAIHATSU</p>
                          		<input class="img-sm" type="image" src="<?=base_url('asets/img/icon/daihatsu.jpg')  ?>" width="100" height="100" data-toggle="modal" data-target="#daihatsu">
                            </center>
                            </div>
                          	</li>
                            <li class="col-sm-3">
                          	<div class="card-body"><center>
                          		<p class="word-limit">ISUZU</p>
                          		<input class="img-sm" type="image" src="<?=base_url('asets/img/icon/isuzu.jpg')  ?>" width="100" height="100" data-toggle="modal" data-target="#isuzu">
                            </center>
                            </div>
                          	</li>
                          	<li class="col-sm-3">
                          	   <div class="card-body">
                                 <center>
                          		     <p class="word-limit">HINO</p>
                          		     <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/hino.jpg')  ?>" width="100" height="100" data-toggle="modal" data-target="#hino">
                                 </center>
                                </div>
                          	</li>
                          </ul>
                    </div> <!-- col.// -->
                  </div> <!-- row.// -->
                </div> <!-- card.// -->
              </div> <!-- container .//  -->
            </section>
<footer class="py-3 bg-dark"></footer><br>
  <div class="container">
    <h3 class="my-4">Stock Ready</h3>
    <div class="row">
    <div class="col-sm-8">
      <?php foreach ($data as $f ) : ?>
      <article class="shadow card card-products">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <div class="img-wrap"><img src="<?php echo $f['gambar1'];  ?>" width="100%" height="210"></div>
            </div>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-8">
                  <h4 class="title"><?= $f['nama']; ?></h4>
                  <div class="row ml-1">
                    <i class="far fa-calendar-alt mr-2 mt-1" style="color:#31d6ba"></i>
                    <h6><?= $f['tahun']; ?></h6>
                  </div>
                  <div class="row ml-1">
                    <img class="mt-1 mr-2"src="<?= base_url().'asets/icon/transmisi.gif' ?>" width="15" height="15">
                    <h6><?= $f['transmisi']; ?></h6>
                  </div>
                </div>
                <div class="col-sm-4">
                  <h5 class="prices">Rp.<?php echo number_format($f['harga'], 0, ".", ".") ?> </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
    <?php echo $pagination; ?>
    </div>
    <div class="col-sm-4">
        <article class="shadow card card-product">
          <div class="card-body">
            <img src="" alt="">
          </div>
          <h5>Deskripsi info</h5>
        </article>
    </div>
      </div>
  </div>
<footer class="py-3 bg-dark"></footer><br>
  <div class="container">
      <h1 class="my-4">Meranti Motor Makassar</h1>
      <h3 class="my-4">Jual Beli Mobil Bekas</h3>
      <div class="row">
      <div class="col-lg-6">
        <h2>Meranti Motor Makassar</h2>
        <h6>Situs Pencarian mobil bekas terpercaya dimakassar</h6>
        <br>
          <p>Siap Melayani dengan sepenuh hati:</p>
          <li>Konsultasi 24 jam</li>
          <li>Hitungan Kredit Lengkap</li>
          <li>Cash atau Kredit</li>
          <li>Syarat Berkas yang Mudah</li>
      </div>
      <div class="col-lg-6">
        <body class="shadow">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.661402727205!2d119.45243571396017!3d-5.1580671535537705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2dd67a6492b%3A0xe2d338315a424058!2sJl.+Meranti+2%2C+Paropo%2C+Panakkukang%2C+Kota+Makassar%2C+Sulawesi+Selatan+90231!5e0!3m2!1sid!2sid!4v1554345014646!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </body>
      </div>
    </div>
  </div>
  <!-- /.container -->
  <div class="modal fade" id="toyota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <center>
            <h4 class="modal-title" id="myModalLabel">Mobil Toyota</h4>
            </center>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="row">
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Agya">
                <input type="image" src="<?= base_url() .'asets/img/list/agya.jpg'?>" alt="Submit button">
                <h3>Toyota Agya</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Calya">
                <input type="image" src="<?= base_url() .'asets/img/list/calya.jpg'?>" alt="Submit button">
                <h3>Toyota Calya</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?= base_url().'pencarian'?>" action="get">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Avanza">
                <input type="image" src="<?= base_url() .'asets/img/list/avanza2.jpg'?>" alt="Submit">
                <h3>Toyota Avanza</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Innova">
                <input type="image" src="<?= base_url() .'asets/img/list/innova.jpg'?>" alt="Submit button">
                <h3>Toyota Innova</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Yaris">
                <input type="image" src="<?= base_url() .'asets/img/list/yaris.jpg'?>" alt="Submit button">
                <h3>Toyota Yaris</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Sienta">
                <input type="image" src="<?= base_url() .'asets/img/list/sienta.jpg'?>" alt="Submit button">
                <h3>Toyota Sienta</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Alphard">
                <input type="image" src="<?= base_url() .'asets/img/list/alphard.jpg'?>" alt="Submit button">
                <h3>Toyota Alphard</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Fortuner">
                <input type="image" src="<?= base_url() .'asets/img/list/fortuner.jpg'?>" alt="Submit button">
                <h3>Toyota Fortuner</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Rush">
                <input type="image" src="<?= base_url() .'asets/img/list/Rush.jpg'?>" alt="Submit button">
                <h3>Toyota Rush</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Camry">
                <input type="image" src="<?= base_url() .'asets/img/list/camry.jpg'?>" alt="Submit button">
                <h3>Toyota Camry</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Etios Valco">
                <input type="image" src="<?= base_url() .'asets/img/list/etios.jpg'?>" alt="Submit button">
                <h3>Toyota Etios Valco</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Hilux">
                <input type="image" src="<?= base_url() .'asets/img/list/hilux2.jpg'?>" alt="Submit button">
                <h3>Toyota Hilux</h3>
              </center>
              </form>
            </div>
            <div id="gmbr" class="col-md-3">
              <form action="<?php echo base_url('pencarian')?>" action="GET">
              <center>
                <input type="hidden" name="data" value="cari">
                <input type="hidden" name="nilai" value="Toyota Vios">
                <input type="image" src="<?= base_url() .'asets/img/list/vios.jpg'?>" alt="Submit button">
                <h3>Toyota Vios</h3>
              </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="honda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Mobil Honda</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="row">
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda Brio">
                      <input type="image" src="<?= base_url() .'asets/img/list/brio.jpg'?>" alt="Submit button">
                      <h3>Honda Brio</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda Mobilio">
                      <input type="image" src="<?= base_url() .'asets/img/list/mobilio.jpg'?>" alt="Submit button">
                      <h3>Honda Mobilio</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda Jazz">
                      <input type="image" src="<?= base_url() .'asets/img/list/jazz.jpg'?>" alt="Submit button">
                      <h3>Honda Jazz</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda CR-V">
                      <input type="image" src="<?= base_url() .'asets/img/list/crv.jpg'?>" alt="Submit button">
                      <h3>Honda CR-V</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda HR-V">
                      <input type="image" src="<?= base_url() .'asets/img/list/Hrv.jpg'?>" alt="Submit button">
                      <h3>Honda HR-V</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda Civic">
                      <input type="image" src="<?= base_url() .'asets/img/list/civic.jpg'?>" alt="Submit button">
                      <h3>Honda Civic</h3>
                    </center>
                    </form>
                    </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda City">
                      <input type="image" src="<?= base_url() .'asets/img/list/city.jpg'?>" alt="Submit button">
                      <h3>Honda City</h3>
                    </center>
                    </form>
                    </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda Accord">
                      <input type="image" src="<?= base_url() .'asets/img/list/accord2.jpg'?>" alt="Submit button">
                      <h3>Honda Accord</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda BR-V">
                      <input type="image" src="<?= base_url() .'asets/img/list/brv.jpg'?>" alt="Submit button">
                      <h3>Honda BR-V</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda Odyssey">
                      <input type="image" src="<?= base_url() .'asets/img/list/odyseey.jpg'?>" alt="Submit button">
                      <h3>Honda Odyssey</h3>
                    </center>
                    </form>
                    </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda CR-Z">
                      <input type="image" src="<?= base_url() .'asets/img/list/crz.jpg'?>" alt="Submit button">
                      <h3>Honda CR-Z</h3>
                    </center>
                    </form>
                  </div>
                  <div id="gmbr" class="col-md-3">
                    <form action="<?php echo base_url('pencarian')?>" action="GET">
                    <center>
                      <input type="hidden" name="data" value="cari">
                      <input type="hidden" name="nilai" value="Honda Freed">
                      <input type="image" src="<?= base_url() .'asets/img/list/freed.jpg'?>" alt="Submit button">
                      <h3>Honda Freed</h3>
                    </center>
                    </form>
                  </div>
              </div>
            </div>
          </div>
            </div>
            <div class="modal fade" id="suzuki" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Mobil Suzuki</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="row">
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Suzuki APV">
                        <input type="image" src="<?= base_url() .'asets/img/list/apv.jpg'?>" alt="Submit button">
                        <h3>Suzuki APV</h3>
                      </center>
                      </form>
                      </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Suzuki Ertiga">
                        <input type="image" src="<?= base_url() .'asets/img/list/ertiga.jpg'?>" alt="Submit button">
                        <h3>Suzuki Ertiga</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Suzuki Karimun Wagon R">
                        <input type="image" src="<?= base_url() .'asets/img/list/karimun.jpg'?>" alt="Submit button">
                        <h3>Suzuki Karimun Wagon R</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Suzuki Grand Vitara">
                        <input type="image" src="<?= base_url() .'asets/img/list/vitara.jpg'?>" alt="Submit button">
                        <h3>Suzuki Grand Vitara</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Suzuki Carry">
                        <input type="image" src="<?= base_url() .'asets/img/list/carry.jpg'?>" alt="Submit button">
                        <h3>Suzuki Carry</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Suzuki Swift">
                        <input type="image" src="<?= base_url() .'asets/img/list/swift.jpg'?>" alt="Submit button">
                        <h3>Suzuki Swift</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Suzuki SX-4">
                        <input type="image" src="<?= base_url() .'asets/img/list/sx4.jpg'?>" alt="Submit button">
                        <h3>Suzuki SX-4</h3>
                      </center>
                      </form>
                    </div>
                </div>
              </div>
            </div>
            </div>
            <div class="modal fade" id="nissan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Mobil Nissan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="row">
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Nissan Grand Livina">
                        <input type="image" src="<?= base_url() .'asets/img/list/grandlivina.jpg'?>" alt="Submit button">
                        <h3>Nissan Grand Livina</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Nissan March">
                        <input type="image" src="<?= base_url() .'asets/img/list/march.jpg'?>" alt="Submit button">
                        <h3>Nissan March</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Nissan X-TRAIL">
                        <input type="image" src="<?= base_url() .'asets/img/list/xtrail.jpg'?>" alt="Submit button">
                        <h3>Nissan X-TRAIL</h3>
                      </center>
                      </form>
                        </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Nissan Serena">
                        <input type="image" src="<?= base_url() .'asets/img/list/serena.jpg'?>" alt="Submit button">
                        <h3>Nissan Serena</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Nissan Evalia">
                        <input type="image" src="<?= base_url() .'asets/img/list/evalia.jpg'?>" alt="Submit button">
                        <h3>Nissan Evalia</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Nissan Navara">
                        <input type="image" src="<?= base_url() .'asets/img/list/navara.jpg'?>" alt="Submit button">
                        <h3>Nissan Navara</h3>
                      </center>
                      </form>
                    </div>
                </div>
              </div>
            </div>
            </div>
            <div class="modal fade" id="mitsubishi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Mobil Mitsubishi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="row">
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Mitsubishi Pajero Sport">
                        <input type="image" src="<?= base_url() .'asets/img/list/pajero.jpg'?>" alt="Submit button">
                        <h3>Mitsubishi Pajero Sport</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Mitsubishi Outlander">
                        <input type="image" src="<?= base_url() .'asets/img/list/outlander.jpg'?>" alt="Submit button">
                        <h3>Mitsubishi Outlander</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Mitsubishi Mirage">
                        <input type="image" src="<?= base_url() .'asets/img/list/mirage.jpg'?>" alt="Submit button">
                        <h3>Mitsubishi Mirage</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Mitsubishi Triton">
                        <input type="image" src="<?= base_url() .'asets/img/list/triton.jpg'?>" alt="Submit button">
                        <h3>Mitsubishi Triton</h3>
                      </center>
                      </form>
                    </div>
                    <div id="gmbr" class="col-md-3">
                      <form action="<?php echo base_url('pencarian')?>" action="GET">
                      <center>
                        <input type="hidden" name="data" value="cari">
                        <input type="hidden" name="nilai" value="Mitsubishi Xpander">
                        <input type="image" src="<?= base_url() .'asets/img/list/xpander.jpg'?>" alt="Submit button">
                        <h3>Mitsubishi Xpander</h3>
                      </center>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="modal fade" id="daihatsu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Mobil Daihatsu</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="row">
                      <div id="gmbr" class="col-md-3">
                        <form action="<?php echo base_url('pencarian')?>" action="GET">
                        <center>
                          <input type="hidden" name="data" value="cari">
                          <input type="hidden" name="nilai" value="Daihatsu Ayla">
                          <input type="image" src="<?= base_url() .'asets/img/list/ayla.jpg'?>" alt="Submit button">
                          <h3>Daihatsu Ayla</h3>
                        </center>
                        </form>
                      </div>
                      <div id="gmbr" class="col-md-3">
                        <form action="<?php echo base_url('pencarian')?>" action="GET">
                        <center>
                          <input type="hidden" name="data" value="cari">
                          <input type="hidden" name="nilai" value="Daihatsu Sigra">
                          <input type="image" src="<?= base_url() .'asets/img/list/sigra.jpg'?>" alt="Submit button">
                          <h3>Daihatsu Sigra</h3>
                        </center>
                        </form>
                      </div>
                      <div id="gmbr" class="col-md-3">
                        <form action="<?php echo base_url('pencarian')?>" action="GET">
                        <center>
                          <input type="hidden" name="data" value="cari">
                          <input type="hidden" name="nilai" value="Daihatsu Xenia">
                          <input type="image" src="<?= base_url() .'asets/img/list/xenia.jpg'?>" alt="Submit button">
                          <h3>Daihatsu Xenia</h3>
                        </center>
                        </form>
                          </div>
                      <div id="gmbr" class="col-md-3">
                        <form action="<?php echo base_url('pencarian')?>" action="GET">
                        <center>
                          <input type="hidden" name="data" value="cari">
                          <input type="hidden" name="nilai" value="Daihatsu Terios">
                          <input type="image" src="<?= base_url() .'asets/img/list/terios.jpg'?>" alt="Submit button">
                          <h3>Daihatsu Terios</h3>
                        </center>
                        </form>
                      </div>
                      <div id="gmbr" class="col-md-3">
                        <form action="<?php echo base_url('pencarian')?>" action="GET">
                        <center>
                          <input type="hidden" name="data" value="cari">
                          <input type="hidden" name="nilai" value="Daihatsu Granmax">
                          <input type="image" src="<?= base_url() .'asets/img/list/granmax.jpg'?>" alt="Submit button">
                          <h3>Daihatsu Granmax</h3>
                        </center>
                        </form>
                      </div>
                      <div id="gmbr" class="col-md-3">
                        <form action="<?php echo base_url('pencarian')?>" action="GET">
                        <center>
                          <input type="hidden" name="data" value="cari">
                          <input type="hidden" name="nilai" value="Daihatsu Luxio">
                          <input type="image" src="<?= base_url() .'asets/img/list/luxio.jpg'?>" alt="Submit button">
                          <h3>Daihatsu Luxio</h3>
                        </center>
                        </form>
                      </div>
                      <div id="gmbr" class="col-md-3">
                        <form action="<?php echo base_url('pencarian')?>" action="GET">
                        <center>
                          <input type="hidden" name="data" value="cari">
                          <input type="hidden" name="nilai" value="Daihatsu Sirion">
                          <input type="image" src="<?= base_url() .'asets/img/list/sirion.jpg'?>" alt="Submit button">
                          <h3>Daihatsu Sirion</h3>
                        </center>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="modal fade" id="isuzu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Mobil Isuzu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="row">
                        <div id="gmbr" class="col-md-3">
                          <form action="<?php echo base_url('pencarian')?>" action="GET">
                          <center>
                            <input type="hidden" name="data" value="cari">
                            <input type="hidden" name="nilai" value="Isuzu Microbus">
                            <input type="image" src="<?= base_url() .'asets/img/list/microbus.jpg'?>" alt="Submit button">
                            <h3>Isuzu Microbus</h3>
                          </center>
                          </form>
                        </div>
                        <div id="gmbr" class="col-md-3">
                          <form action="<?php echo base_url('pencarian')?>" action="GET">
                            <center>
                              <input type="hidden" name="data" value="cari">
                              <input type="hidden" name="nilai" value="Isuzu Panther">
                              <input type="image" src="<?= base_url() .'asets/img/list/panther.jpg'?>" alt="Submit button">
                              <h3>Isuzu Panther</h3>
                            </center>
                          </form>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
