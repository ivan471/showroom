<section class="section-content bg padding-y-sm">
<div class="container">
<nav class="mb-3">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
    <li class="breadcrumb-item">
    <a href="#" onclick="document.getElementById('merk').submit();"><?= $mobil['merk']; ?></a></li>
    <li class="breadcrumb-item">
    <a href="#"onclick="document.getElementById('model').submit();"><?= $mobil['model'];  ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $mobil['nama'];  ?></li>
</ol>
</nav>

<div class="row">
<div class="col-xl-10 col-md-9 col-sm-12">
<main class="card shadow">
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">
			<article class="gallery-wrap">
				<div class="img-big-wrap">
          <div class="mySlides">
            <img src="<?= $mobil['gambar1'];  ?>" style="width:100%">
          </div>
          <div class="mySlides">
            <img src="<?= $mobil['gambar2'];  ?>" style="width:100%">
          </div>
          <div class="mySlides">
            <img src="<?= $mobil['gambar3'];  ?>" style="width:100%">
          </div>
          <div class="mySlides">
            <img src="<?= $mobil['gambar4'];  ?>" style="width:100%">
          </div>
          <div class="mySlides">
            <img src="<?= $mobil['gambar5'];  ?>" style="width:100%">
          </div>
          <div class="mySlides">
            <img src="<?= $mobil['gambar6'];  ?>" style="width:100%">
          </div>
          <div class="row galery">
            <div class="column">
              <img class="demo cursor" src="<?= $mobil['gambar1'];  ?>" style="width:100%" onclick="currentSlide(1)">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?= $mobil['gambar2'];  ?>" style="width:100%" onclick="currentSlide(2)">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?= $mobil['gambar3'];  ?>" style="width:100%" onclick="currentSlide(3)">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?= $mobil['gambar4'];  ?>" style="width:100%" onclick="currentSlide(4)">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?= $mobil['gambar5'];  ?>" style="width:100%" onclick="currentSlide(5)">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?= $mobil['gambar6'];  ?>" style="width:100%" onclick="currentSlide(6)">
            </div>
          </div>
					</div> <!-- slider-product.// -->
          <script>
          var slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
          }
          </script>

				</article> <!-- gallery-wrap .end// -->
			</aside>
		<aside class="col-sm-6">
			<article class="card-body">
				<!-- short-info-wrap -->
				<h3 class="title mb-3"><?= $mobil['nama']; ?></h3>

				<div class="mb-3">
					<var class="price h3 text-warning">
						<span class="currency">Rp.</span><?php echo number_format($mobil['harga'], 0, ".", ".") ?>
					</var>
				</div> <!-- price-detail-wrap .// -->
        <dl class="row">
        	<dt class="col-sm-5 garis">Merk</dt>
        	<dd class="col-sm-7 garis"><?= $mobil['merk'];  ?></dd>
          <dt class="col-sm-5 garis">Model</dt>
        	<dd class="col-sm-7 garis"><?= $mobil['model'];  ?></dd>
          <dt class="col-sm-5 garis">Varian</dt>
          <dd class="col-sm-7 garis"><?= $mobil['varian'];  ?> </dd>
        	<dt class="col-sm-5 garis">Warna</dt>
          <dd class="col-sm-7 garis"><?= $mobil['warna'];  ?> </dd>

          <dt class="col-sm-5 garis">Type</dt>
          <dd class="col-sm-7 garis"><?= $mobil['type'];  ?> </dd>

        	<dt class="col-sm-5 garis">Transmisi</dt>
        	<dd class="col-sm-7 garis"><?= $mobil['transmisi'];  ?> </dd>

        	<dt class="col-sm-5 garis">Kapasitas Mesin</dt>
        	<dd class="col-sm-7 garis"><?= $mobil['kapasitas'];  ?>CC </dd>

        	<dt class="col-sm-5 garis">No Polisi</dt>
        	<dd class="col-sm-7 garis"><?= $mobil['no_polisi'];  ?> </dd>

        	<dt class="col-sm-5 garis">Bahan Bakar</dt>
        	<dd class="col-sm-7 garis"><?= $mobil['bahan_bakar'];  ?> </dd>

        	<dt class="col-sm-5 garis">Masa Berlaku STNK</dt>
        	<dd class="col-sm-7 garis"><?= $mobil['masa_berlaku_stnk'];  ?> </dd>
        </dl>
<hr>
	<a href="#" class="btn  btn-warning"> <i class="fa fa-envelope"></i> Kontact Supplier </a>
<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</main> <!-- card.// -->

<!-- PRODUCT DETAIL -->
<article id="detail-mobil" class="card mt-3">
	<div class="card-body shadow">
		<h4>Detail Mobil</h4>
	<p>	<?= $mobil['deskripsi'];  ?></p>
	</div> <!-- card-body.// -->
</article> <!-- card.// -->

<!-- PRODUCT DETAIL .// -->

</div> <!-- col // -->
<aside class="col-xl-2 col-md-3 col-sm-12">
<div class="card mt-3 shadow">
	<div class="card-header">Model yang Sama</div>
	<div class="card-body row">
  <?php foreach ($model as $m ) : ?>
    <div class="col-md-12 col-sm-3">
	<figure class="item border-bottom mb-3">
			<a href="#" class="img-wrap"> <img id="gmbrsama" src="<?= $m['gambar1'] ?>" width='100%' height='75%' class="img-md"></a>
			<figcaption class="info-wrap">
				<a href="<?= base_url().'detail/'.$m['link'] ?>" class="title"><?= $m['nama'] ?></a>
				<div class="price-wrap mb-3">
					<span class="price-new">Rp.</span><?php echo number_format($m['harga'], 0, ".", ".") ?>
				</div> <!-- price-wrap.// -->
			</figcaption>
	</figure> <!-- card-product // -->
</div> <!-- col.// -->
<?php endforeach; ?>
	</div> <!-- card-body.// -->
</div> <!-- card.// -->
</aside> <!-- col // -->
</div> <!-- row.// -->
</div><!-- container // -->
</section>
<form id="model" action="<?= base_url().'pencarian' ?>" method="get">
  <input type="hidden" name="cari" value="<?= $mobil['model'];  ?>">
</form>
<form id="merk" action="<?= base_url().'pencarian' ?>" method="get">
  <input type="hidden" name="cari" value="<?= $mobil['merk'];  ?>">
</form>
