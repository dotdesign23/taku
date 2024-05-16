<?= $this->extend('template') ?>

<?= $this->section('page_title') ?>
	My Plants - Taku
<?= $this->endsection() ?>

<?= $this->section('content') ?>
	<main class="content content-wrap">
		<h2 class="heading heading-lg">MY PLANT</h2>
		<div class="plant3">
			<?php foreach($plants as $plant): ?>
				<a href="/article?id=<?= $plant['id'] ?>" class="plant3-item">
					<img src="<?= $plant['image1'] ?>" alt="<?= $plant['title'] ?>">
					<div class="plant3-wrap">
						<h4 class="plant3-title"><?= $plant['title'] ?></h4>
						<i class="fa fa-heart"></i>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</main>
<?= $this->endsection() ?>
