<?= $this->extend('template') ?>

<?= $this->section('page_title') ?>
	Article - Taku
<?= $this->endsection() ?>

<?= $this->section('content') ?>
	<main>
		<div class="hero">
			<img src="./img/hero.png" alt="Hero">
			<div class="hero-wrap">
				<h3 class="hero-title">Monstera Deliciosa</h3>
				<p class="hero-description">Lorem ipsum dolor sit amet consectetur. Phasellus cras amet tristique suspendisse. Aliquam quis mi et at sit vitae aenean elit sed.</p>
				<a href="#" class="hero-link">Detail</a>
			</div>
		</div>
		<div class="content content-wrap">
			<h2 class="heading">TANAMAN POPULER</h2>
			<div class="plant1">
		
				<div class="plant1-col">
					<a href="/article?id=<?= $plants_top[0]['id'] ?>" class="plant1-item">
						<img src="<?= $plants_top[0]['image_vertical'] ?>" alt="<?= $plants_top[0]['title'] ?>">
						<h4 class="plant1-title"><?= $plants_top[0]['title'] ?></h4>
					</a>
				</div>
				<div class="plant1-col">
					<?php foreach([$plants_top[1], $plants_top[2]] as $plant): ?>
						<a href="/article?id=<?= $plant['id'] ?>" class="plant1-item">
							<img src="<?= $plant['image1'] ?>" alt="<?= $plant['title'] ?>">
							<h4 class="plant1-title"><?= $plant['title'] ?></h4>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
			<h2 class="heading">TANAMAN BARU</h2>
			<div class="plant2">
				<?php foreach($plants_newest as $plant): ?>
					<a href="/article?id=<?= $plant['id'] ?>" class="plant2-item">
						<img src="<?= $plant['image_vertical'] ?>" alt="<?= $plant['title'] ?>">
						<h4 class="plant2-title"><?= $plant['title'] ?></h4>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</main>
<?= $this->endsection() ?>
