<section class="section-content bg padding-y-sm">
<div class="container">
<nav class="mb-3">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
    <li class="breadcrumb-item"><a href="#">Merk</a></li>
    <li class="breadcrumb-item"><a href="#">Jenis</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $mobil['nama'];  ?></li>
</ol>
</nav>

<div class="row">
<div class="col-xl-10 col-md-9 col-sm-12">

<main class="card">
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">
			<article class="gallery-wrap">
				<div class="img-big-wrap">
  			<div>
					<a href="" data-fancybox="">
						<img src="<?= $mobil['gambar1'];  ?>"></a></div>
					</div> <!-- slider-product.// -->
					<div class="img-small-wrap">
  					<div class="item-gallery"> <img src="asets/img/detail/bagian-samping.jpeg"></div>
  					<div class="item-gallery"> <img src="asets/img/detail/bagian-belakang.jpeg"></div>
  					<div class="item-gallery"> <img src="asets/img/detail/bagian-dalam-depan.jpeg"></div>
  					<div class="item-gallery"> <img src="asets/img/detail/bagian-dalam-belakang.jpeg"></div>
					</div> <!-- slider-nav.// -->
				</article> <!-- gallery-wrap .end// -->
			</aside>
		<aside class="col-sm-6">
			<article class="card-body">
				<!-- short-info-wrap -->
				<h3 class="title mb-3"><?= $mobil['nama']; ?></h3>

				<div class="mb-3">
					<var class="price h3 text-warning">
						<span class="currency">Rp.</span><span class="num"><?= $mobil['harga'];  ?></span>
					</var>
				</div> <!-- price-detail-wrap .// -->
<dl class="row">
	<dt class="col-sm-5 garis">Merk</dt>
	<dd class="col-sm-7 garis"><?= $mobil['merk'];  ?></dd>
  <dt class="col-sm-5 garis">Model</dt>
	<dd class="col-sm-7 garis"><?= $mobil['model'];  ?></dd>

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
<div class="rating-wrap">

	<ul class="rating-stars">
		<li style="width:80%" class="stars-active">
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
		</li>
		<li>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
		</li>
	</ul>
	<div class="label-rating">0 reviews</div>
</div> <!-- rating-wrap.// -->
	<hr>
	<a href="#" class="btn  btn-warning"> <i class="fa fa-envelope"></i> Kontact Supplier </a>
<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</main> <!-- card.// -->

<!-- PRODUCT DETAIL -->
<article id="detail-mobil" class="card mt-3">
	<div class="card-body">
		<h4>Detail Mobil</h4>
	<p>	<?= $mobil['deskripsi'];  ?></p>
	</div> <!-- card-body.// -->
</article> <!-- card.// -->

<!-- PRODUCT DETAIL .// -->

</div> <!-- col // -->
<aside class="col-xl-2 col-md-3 col-sm-12">
<div class="card mt-3">
	<div class="card-header">
	    Jenis yang Sama
	</div>
	<div class="card-body row">
<div class="col-md-12 col-sm-3">
	<figure class="item border-bottom mb-3">
			<a href="#" class="img-wrap"> <img src="images/items/2.jpg" class="img-md"></a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Produk 1</a>
				<div class="price-wrap mb-3">
					<span class="price-new">Rp.100.000.000</span>
				</div> <!-- price-wrap.// -->
			</figcaption>
	</figure> <!-- card-product // -->
</div> <!-- col.// -->
<div class="col-md-12 col-sm-3">
<figure class="item border-bottom mb-3">
		<a class="img-wrap"> <img src="images/items/3.jpg" class="img-md"></a>
		<figcaption class="info-wrap">
			<a href="#" href="#" class="title">Produk 2</a>
			<div class="price-wrap mb-3">
				<span class="price-new">Rp.125.000.000</span>
			</div> <!-- price-wrap.// -->
		</figcaption>
</figure> <!-- card-product // -->
</div> <!-- col.// -->
<div class="col-md-12 col-sm-3">
<figure class="item border-bottom mb-3">
		<a href="#" class="img-wrap"> <img src="images/items/4.jpg" class="img-md"></a>
		<figcaption class="info-wrap">
			<a href="#" class="title">Produk 3</a>
			<div class="price-wrap mb-3">
				<span class="price-new">Rp.80.000.000</span>
			</div> <!-- price-wrap.// -->
		</figcaption>
</figure> <!-- card-product // -->
</div> <!-- col.// -->
<div class="col-md-12 col-sm-3">
<figure class="item border-bottom mb-3">
		<a href="#" class="img-wrap"> <img src="images/items/4.jpg" class="img-md"></a>
		<figcaption class="info-wrap">
			<a href="#" class="title">Produk 4</a>
			<div class="price-wrap mb-3">
				<span class="price-new">Rp.90.000.000</span>
			</div> <!-- price-wrap.// -->
		</figcaption>
</figure> <!-- card-product // -->
</div> <!-- col.// -->
	</div> <!-- card-body.// -->
</div> <!-- card.// -->
</aside> <!-- col // -->
</div> <!-- row.// -->
</div><!-- container // -->
</section>
