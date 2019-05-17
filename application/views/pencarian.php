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
									<h6 class="title">Berdasarkan Kategori</h6>
								</a>
							</header>
							<div style="" class="filter-content collapse show" id="collapse22">
								<div class="card-body">
									<ul class="list-unstyled list-lg">
										<li>
											<form id="1" action="<?= base_url().'pencarian' ?>" method="get">
												<input type="hidden" name="data" value="thn_lama">
												<a href="#"onclick="document.getElementById('1').submit();">Tahun Terlama</a>
										</form>
										</li>
										<li>
											<form id="2" action="<?= base_url().'pencarian' ?>" method="get">
												<input type="hidden" name="data" value="thn_baru">
												<a href="#"onclick="document.getElementById('2').submit();">Tahun Terbaru</a>
											</form>
										</li>
										<li><form id="3" action="<?= base_url().'pencarian' ?>" method="get">
											<input type="hidden" name="data" value="baru">
											<a href="#"onclick="document.getElementById('3').submit();">Post Terbaru</a>
										</form>
									</li>
										</ul>
								</div> <!-- card-body.// -->
							</div> <!-- collapse .// -->
						</article> <!-- card-group-item.// -->
						<article class="card-group-item">
							<header class="card-header">
								<a href="" data-toggle="collapse" data-target="#collapse33">
									<i class="icon-action fa fa-chevron-down"></i>
									<h6 class="title">Berdasarkan Harga</h6>
								</a>
							</header>
							<div class="filter-content collapse show" id="collapse33">
								<div class="card-body">
									<form class="" action="<?php base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="harga">
										<div class="form-group col-md-6">
				  					<label>Min</label>
				  					<input class="form-control" placeholder="Rp.0" type="number" name="min" required>
									</div>
									<div class="form-group col-md-6">
				  					<label>Max</label>
				  					<input class="form-control" placeholder="Rp.800.000.000" type="number" name="max" required>
									</div>
									<button type="submit" class="btn btn-block btn-outline-primary">Apply</button>
								</form>
									<ul id="list1"class="list-unstyled list-lg">
										<li>
											<form id="4" action="<?= base_url().'pencarian' ?>" method="get">
												<input type="hidden" name="data" value="mahal">
												<a href="#"onclick="document.getElementById('4').submit();">Termahal</a>
											</form>
										</li>
										<li>
											<form id="5" action="<?= base_url().'pencarian' ?>" method="get">
												<input type="hidden" name="data" value="murah">
												<a href="#"onclick="document.getElementById('5').submit();">Termurah</a>
											</form>
										</li>
									</ul>
								</div> <!-- card-body.// -->
							</div> <!-- collapse .// -->
						</article> <!-- card-group-item.// -->

				<article class="card-group-item">
					<header class="card-header">
						<a href="" data-toggle="collapse" data-target="#collapse44">
							<i class="icon-action fa fa-chevron-down"></i>
							<h6 class="title">Berdasarkan Merk </h6>
						</a>
					</header>
					<div class="filter-content collapse show" id="collapse44">
						<div class="card-body">
							<ul id="list1"class="list-unstyled list-lg">
								<li>
									<form id="6" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Toyota">
										<a href="#"onclick="document.getElementById('6').submit();">Toyota<span class="float-right badge badge-light round"><?= $jmlhlist1['jmlh']; ?></span></a>
									</form>
								</li>
								<li>
									<form id="7" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Honda">
										<a href="#"onclick="document.getElementById('7').submit();">Honda<span class="float-right badge badge-light round"><?= $jmlhlist2['jmlh']; ?></span></a>
									</form>
								</li>
								<li>
									<form id="8" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Suzuki">
										<a href="#"onclick="document.getElementById('8').submit();">Suzuki<span class="float-right badge badge-light round"><?= $jmlhlist3['jmlh']; ?></span></a>
									</form>
								</li>
								<li>
									<form id="9" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Nissan">
										<a href="#"onclick="document.getElementById('9').submit();">Nissan<span class="float-right badge badge-light round"><?= $jmlhlist4['jmlh']; ?></span></a>
									</form>
								</li>
								<li>
									<form id="10" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Honda">
										<a href="#"onclick="document.getElementById('10').submit();">Mitsubishi<span class="float-right badge badge-light round"><?= $jmlhlist5['jmlh']; ?></span></a>
									</form>
								</li>
								<li>
									<form id="11" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Honda">
										<a href="#"onclick="document.getElementById('11').submit();">Daihatsu<span class="float-right badge badge-light round"><?= $jmlhlist6['jmlh']; ?></span></a>
									</form>
								</li>
								<li>
									<form id="12" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Mazda">
										<a href="#"onclick="document.getElementById('12').submit();">Mazda<span class="float-right badge badge-light round"><?= $jmlhlist7['jmlh']; ?></span></a>
									</form>
								</li>
								<li>
									<form id="13" action="<?= base_url().'pencarian' ?>" method="get">
										<input type="hidden" name="data" value="cari">
										<input type="hidden" name="nilai" value="Hino">
										<a href="#"onclick="document.getElementById('13').submit();">Hino<span class="float-right badge badge-light round"><?= $jmlhlist8['jmlh']; ?></span></a>
									</form>
								</li>
							</ul>
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
							<div class="img-wrap"><img id="t-gmbr" src="<?php echo $s['gambar1'];  ?>" width="265" height="210"></div>
						</aside> <!-- col.// -->
						<article class="col-sm-5">
							<h4 class="title"><?php echo $s['nama']; ?></h4>
							<dl class="dlist-align">
								<dt><i class="fas fa-palette"></i>Warna</dt>
					  	<dd><?php echo $s['warna']; ?></dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
							  <dt><i  class="far fa-calendar-alt " style="color:#31d6ba"></i>Tahun</dt>
							  <dd><?php echo $s['tahun']; ?></dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
							  <dt><img src="<?= base_url().'asets/icon/transmisi.gif' ?>" width="15" height="15">Transmisi</dt>
							  <dd> <?php echo $s['transmisi']; ?></dd>
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
