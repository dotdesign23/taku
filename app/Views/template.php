<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<title><?= $this->renderSection('page_title') ?></title>
</head>
<body>
	<header>
		<div class="logo">
			<img src="/img/logo.png" alt="Taku">
		</div>
		<nav>
			<a <?php if ($page_name == 'home'): ?> class="active" <?php endif; ?>  href="/">HOME</a>
			<a <?php if ($page_name == 'list'): ?> class="active" <?php endif; ?>  href="/plants">MY PLAINT</a>
		</nav>
		<div class="user">
			<img src="/img/user.png" alt="User">
		</div>
	</header>
	<?= $this->renderSection('content') ?>
	<footer>
		<h4 class="contact-heading">CONTACT</h4>
		<div class="contact">
			<a href="#" class="contact-link">
				<i class="fa fa-envelope"></i> Dagmar.Walter@Boyer - Haley
			</a>
			<a href="#" class="contact-link">
				<i class="fab fa-instagram"></i> BeahanInc64
			</a>
			<a href="#" class="contact-link">
				<i class="fa fa-phone"></i> 971-894-1216
			</a>
		</div>
	</footer>
</body>
</html>