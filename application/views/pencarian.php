<div class="halaman">
		<div class="daftar-perncarian">
<!-- ========================= SECTION CONTENT ========================= -->
	<section class="section-content bg padding-y">
		<div class="container">
			<nav class="mb-3">
			<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
					<li class="breadcrumb-item">Pencarian</li>
			</ol>
			</nav>
			<div class="row">
				<aside class="col-sm-3">
					<div class="card card-filter">
						<article class="card-group-item">
							<header class="card-header">
								<a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
									<i class="icon-action fa fa-chevron-down"></i>
									<h6 class="title">Berdasarkan Kategory</h6>
								</a>
							</header>
							<div style="" class="filter-content collapse show" id="collapse22">
								<div class="card-body">
									<ul class="list-unstyled list-lg">
										<li><a href="#">Tahun Terlama<span class="float-right badge badge-light round">142</span> </a></li>
										<li><a href="#">Tahun Terbaru<span class="float-right badge badge-light round">3</span>  </a></li>
										<li><a href="#">Post Terbaru<span class="float-right badge badge-light round">32</span>  </a></li>
										<li><a href="#">Another item <span class="float-right badge badge-light round">12</span>  </a></li>
									</ul>
								</div> <!-- card-body.// -->
							</div> <!-- collapse .// -->
						</article> <!-- card-group-item.// -->
						<article class="card-group-item">
							<header class="card-header">
								<a href="#" data-toggle="collapse" data-target="#collapse33">
									<i class="icon-action fa fa-chevron-down"></i>
									<h6 class="title">Berdasarkan Harga</h6>
								</a>
							</header>
							<div class="filter-content collapse show" id="collapse33">
								<div class="card-body">
									<div class="form-group col-md-6">
				  					<label>Min</label>
				  					<input class="form-control" placeholder="Rp.0" type="number">
									</div>
									<div class="form-group col-md-6">
				  					<label>Max</label>
				  					<input class="form-control" placeholder="Rp.800.000.000" type="number">
									</div>
									<button class="btn btn-block btn-outline-primary">Apply</button>
									<ul id="list1"class="list-unstyled list-lg">
										<li><a href="#">Termahal<span class="float-right badge badge-light round">20</span></a></li>
										<li><a href="#">Termurah<span class="float-right badge badge-light round">11</span></a></li>
									</ul>
								</div> <!-- card-body.// -->
							</div> <!-- collapse .// -->
						</article> <!-- card-group-item.// -->
				<article class="card-group-item">
					<header class="card-header">
						<a href="#" data-toggle="collapse" data-target="#collapse44">
							<i class="icon-action fa fa-chevron-down"></i>
							<h6 class="title">Berdasarkan Merk </h6>
						</a>
					</header>
					<div class="filter-content collapse show" id="collapse44">
						<div class="card-body">
							<form>
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Toyota</span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Honda</span>
								</label> <!-- form-check.// -->
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Nissan</span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Suzuki</span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Mitsubishi</span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Daihatsu</span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Mazda</span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
				  				<input class="form-check-input" value="" type="checkbox">
				  				<span class="form-check-label">
				  				<span class="float-right badge badge-light round">0</span>Hino</span>
								</label>  <!-- form-check.// -->
							</form>
						</div> <!-- card-body.// -->
					</div> <!-- collapse .// -->
				</article> <!-- card-group-item.// -->
			</div> <!-- card.// -->
		</aside> <!-- col.// -->

		<main class="col-sm-9">
			<?php foreach ($data as $s ) : ?>
			<article class="card card-product">
				<div class="card-body">
					<div class="row">
						<aside class="col-sm-4">
							<div class="img-wrap"><img src="<?php echo $s['gambar1'];  ?>" width="265" height="210"></div>
						</aside> <!-- col.// -->
						<article class="col-sm-5">
							<h4 class="title"><?php echo $s['nama']; ?></h4>
							<div class="rating-wrap  mb-2">
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
							<dl class="dlist-align">
								<dt><i class="fas fa-palette"></i>Warna</dt>
					  	<dd><?php echo $s['warna']; ?></dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
							  <dt><i class="far fa-calendar-alt"></i>Tahun</dt>
							  <dd><?php echo $s['tahun']; ?></dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
							  <dt><img src="<?= base_url().'asets/icon/transmisi.gif' ?>" width="15" height="15">Transmisi</dt>
							  <dd><?php echo $s['transmisi']; ?></dd>
							</dl>  <!-- item-property-hor .// -->
						</article> <!-- col.// -->
						<aside class="col-sm-3 border-left">
							<div class="action-wrap">
								<div class="price-wrap h4">
									<span class="price">Rp.<?php echo number_format($s['harga'], 0, ".", ".") ?> </span>
								</div> <!-- info-price-detail // -->
								<br><br><br><br><br>
								<p><a href="<?= base_url().'detail/'.$s['link']; ?>" class="btn btn-secondary"> Details  </a></p>
							</div> <!-- action-wrap.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
					</div> <!-- card-body .// -->
				</article> <!-- card product .// -->
			<?php endforeach; ?>

	</main> <!-- col.// -->
	<div class="col-sm">
		<?php echo $pagination; ?>

	</div>
	</div>
	</div> <!-- container .//  -->
	</section>
	</div>
</div>
