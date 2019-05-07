<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<img src="<?=base_url('asets/icon/judul3.gif') ?>" alt="" width="300" height="50">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url().'profil' ?>">Profil Perusahaan</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="pencarianmenu">

<div id="search"class="col-lg-11-24 col-sm-8">
	<form action="pencarian" class="py-1">
		<div class="input-group w-100">
				<input type="text" class="form-control" style="width:50%;" placeholder="Search">
				<div class="input-group-append">
					<a class="btn btn-warning" href="<?= base_url();  ?>pencarian" role="button"><i class="fa fa-search"></i></a>
				</div>
			</div>
	</form> <!-- search-wrap .end// -->
</div> <!-- col.// -->
</div>
