<header>
  <div class="row">
    <div class="col-sm-6 mt-3 ly-1">
      <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
            <img style="width:100%; max-height: 300px;" src="<?= base_url().'asets/img/depan/dpn1.jpeg' ?>">
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <img style="width:100%; max-height: 300px;" src="<?= base_url().'asets/img/depan/depan2.jpeg' ?>">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mt-3 ly-2">
      <div id="carouselExampleIndicators1" class="carousel slide shadow" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img style="width:100%; max-height: 300px;" src="<?= base_url().'asets/img/depan/depan.jpeg' ?>">
          </div>
          <div class="carousel-item">
            <img style="width:100%; max-height: 300px;" src="<?= base_url().'asets/img/depan/depan2.jpeg' ?>">
          </div>
          <div class="carousel-item">
            <img style="width:100%; max-height: 300px;" src="<?= base_url().'asets/img/depan/depan3.jpeg' ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<footer class="py-3 bg-darks"></footer><br>
<h4 id="ly1">Rekomendasi Mobil Bekas Berkualitas Di Makassar</h4>
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <div id="slider-rekomendasi"class="row mb-5 mt-2">
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
    <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev"><i class="fas fa-arrow-left"></i></a>
    <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next"><i class="fas fa-arrow-right"></i></a>
  </div>
</div>
<!--/.Carousel Wrapper-->
<footer class="py-3 bg-darks"></footer><br>
<!-- Page Content Merk Mobil -->
<section class="section-content padding-y-sm bg">
  <div class="container mb-3">
    <div class="card shadow">
      <div class="row no-gutters">
        <div class="col-sm-5">
          <img src="<?=base_url().'asets/img/depan/dpn2.jpeg'?>" width="100%" height="100%">
        </div> <!-- col.// -->
        <div class="col-sm-7">
          <ul class="row no-gutters border-cols">
            <li class="col-sm-3">
              <div class="card-body">
                <form action="<?php echo base_url('pencarian')?>" action="GET">
                  <center>
                    <input type="hidden" name="data" value="cari">
                    <input type="hidden" name="nilai" value="Toyota">
                    <p class="word-limit">TOYOTA</p>
                    <input class="img-sm" type="image" src="<?=base_url('')  ?>asets/img/icon/toyota3.jpeg" width="100" height="100" alt="Submit button" >
                  </center>
                </form>
              </div>
            </li>
            <li class="col-sm-3">
              <div class="card-body">
                <form action="<?php echo base_url('pencarian')?>" action="GET">
                  <center>
                    <input type="hidden" name="data" value="cari">
                    <input type="hidden" name="nilai" value="Honda">
                    <p class="word-limit">HONDA</p>
                    <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/honda.jpeg')  ?>" width="100" height="100" alt="Submit button">
                  </center>
                </form>
              </div>
            </li>
            <li class="col-sm-3">
              <div class="card-body">
                <form action="<?php echo base_url('pencarian')?>" action="GET">
                  <center>
                    <input type="hidden" name="data" value="cari">
                    <input type="hidden" name="nilai" value="Suzuki">
                    <p class="word-limit">SUZUKI</p>
                    <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/suzuki.gif')  ?>" width="100" height="100"alt="Submit button">
                  </center>
                </form>
              </div>
            </li>
            <li class="col-sm-3">
              <div class="card-body">
                <form action="<?php echo base_url('pencarian')?>" action="GET">
                  <center>
                    <input type="hidden" name="data" value="cari">
                    <input type="hidden" name="nilai" value="Nissan">
                    <p class="word-limit">NISSAN</p>
                    <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/nissan.png')  ?>" width="100" height="100"alt="Submit button">
                  </center>
                </form>
              </div>
            </li>
          </ul>
          <ul class="row no-gutters border-cols">
            <li class="col-sm-3">
              <div class="card-body">
                <form action="<?php echo base_url('pencarian')?>" action="GET">
                  <center>
                    <input type="hidden" name="data" value="cari">
                    <input type="hidden" name="nilai" value="Mitsubishi">
                    <p class="word-limit">MITSUBISHI</p>
                    <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/mitsubishi.png')  ?>" width="100" height="100"alt="Submit button">
                  </center>
                </form>
              </div>
            </li>
            <li class="col-sm-3">
              <div class="card-body">
                <form action="<?php echo base_url('pencarian')?>" action="GET">
                  <center>
                    <input type="hidden" name="data" value="cari">
                    <input type="hidden" name="nilai" value="Daihatsu">
                    <p class="word-limit">DAIHATSU</p>
                    <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/daihatsu.jpg')  ?>" width="100" height="100"alt="Submit button">
                  </center>
                </form>
              </div>
            </li>
            <li class="col-sm-3">
              <div class="card-body">
                <form action="<?php echo base_url('pencarian')?>" action="GET">
                  <center>
                    <input type="hidden" name="data" value="cari">
                    <input type="hidden" name="nilai" value="Isuzu">
                    <p class="word-limit">ISUZU</p>
                    <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/isuzu.jpg')  ?>" width="100" height="100"alt="Submit button">
                  </center>
                </form>
              </div>
            </li>
            <li class="col-sm-3">
              <div class="card-body">
                <center>
                  <p class="word-limit">HINO</p>
                  <input class="img-sm" type="image" src="<?=base_url('asets/img/icon/hino.jpg')  ?>" width="100" height="100" data-toggle="modal" data-target="#hino">
                </center>
              </form>
            </div>
          </li>
        </ul>
      </div> <!-- col.// -->
    </div> <!-- row.// -->
  </div> <!-- card.// -->
</div> <!-- container .//  -->
</section>
<footer class="py-3 bg-darks"></footer><br>
<div class="container">
  <h3 class="my-4">Stock Ready</h3>
  <div class="row">
    <div class="col-sm-8">
      <?php foreach ($data as $f ) : ?>
        <article class="shadow card card-products">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <div class="img-wrap"><img src="<?php echo $f['gambar1'];  ?>" width="100%" height="165"></div>
              </div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-8">
                    <a href="<?= base_url().'detail/'. $f['link']; ?>"><h4 class="title"><?= $f['nama']; ?></h4></a>
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
      <article class="card card-product">
        <center>
          <a href="<?= base_url().'keunggulan' ?>">
            <img src="<?= base_url().'asets/img/info/keunggulan.jpg' ?>" width="100%" height="130px;" alt="">
          </a>
          <h5 class="mt-2">Keunggulan Meranti Motor</h5>
        </center>
      </article>
      <article class="card card-product">
        <center>
          <a href="<?= base_url().'keunggulan' ?>">
            <img src="<?= base_url().'asets/img/info/159329_620.jpg' ?>" width="100%" height="130px;" alt="">
          </a>
          <h5 class="mt-2">Cara Beli Mobil</h5>
        </center>
      </article>
    </div>
  </div>
</div>
<footer class="py-3 bg-darks"></footer><br>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="my-4">Meranti Motor Makassar</h1>
      <h3 class="my-4">Situs pencarian mobil bekas berkualitas dan terpercaya di area Makassar</h3>
      <br>
    </div>
    <div class="col-lg-6 mb-3">
      <h3>Lokasi Showroom Kami</h3>
      <body>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.661402727205!2d119.45243571396017!3d-5.1580671535537705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2dd67a6492b%3A0xe2d338315a424058!2sJl.+Meranti+2%2C+Paropo%2C+Panakkukang%2C+Kota+Makassar%2C+Sulawesi+Selatan+90231!5e0!3m2!1sid!2sid!4v1554345014646!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </body>
    </div>
  </div>
</div>
