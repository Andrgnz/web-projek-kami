<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/forum.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<title>Forum</title>
</head>

<body>
	<div class="header">
		<div class="brand">
		<img class="img-brand" src="./assets/img/sips.png"></a>
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><a href="home">Beranda</a></li>
					<li><a href="lapor">Lapor</a></li>
					<li><a href="forum">Forum</a></li>
					<?php
                    if (!$this->session->has_userdata('username')) { ?>
                    <li><a href="register">Daftar</a></li>
                    <li><a href="login">Masuk</a></li>
                    <?php
                    } else{ ?>
						<li><a href="#"> <?=$this->session->userdata('username'); ?></a></li>
						<li><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
                        <?php }
                    ?>
				</ul>
			</nav>
			<div class="menu-toggle">
				<input type="checkbox">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<div class="judul wow fadeIn"> <br><br><br><br>
		<h1>Sistem Informasi Pengaduan Siswa</h1>
	</div><br>
	<div class="forum">
		<div class="row">
			<?php foreach ($data as $item) { ?>
			<div class="column">
				<div class="card wow slideInLeft">
					<div class="username"><?= $item['username'] ?></div>
					<div class="time-min"><?= $item['tanggal']; ?></div><br>
					<a href="<?= base_url('forum/index/'. $item['id_keluhan']) ?>" class="title-com"><?= $item['judul'] ?></a>
					<div class="status"><?= $item['status'] ?></div>
					<div class="tag">
						<ul>
							<li><?= $item['nama_kategori'] ?></li>
						</ul>
					</div>
				</div>
			</div>
			</a>
			<?php } ?>
		</div>

		
	</div>
	<br>
	<div class="footer">
		<p> SIPS 2023 <br> SMKN 1 Jenangan </p>
	</div>
	<script type="text/javascript" src="<?= base_url();?>assets/js/script.js"></script>
	<script src="<?= base_url();?>assets/js/wow.min.js"></script>
	<script>
		new WOW().init();

	</script>
</body>

</html>
