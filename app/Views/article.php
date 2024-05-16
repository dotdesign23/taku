<?= $this->extend('template') ?>

<?= $this->section('page_title') ?>
	<?= $plant['title'] ?> - Taku
<?= $this->endsection() ?>

<?= $this->section('content') ?>
	<main class="content content-wrap">
		<h2 class="heading heading-lg"><?= $plant['title'] ?></h2>
		<article>
			<div class="article-wrapper">
				<img src="<?= $plant['image1'] ?>" alt="<?= $plant['title'] ?>">
				<div class="article-wrap">
					<h3 class="article-title">Deskripsi</h3>
					<p class="article-description"><?= $plant['description'] ?></p>
				</div>
			</div>
			<div class="article-wrapper">
				<div class="article-wrap">
					<h3 class="article-title article-center">Cara Menanam</h3>
					<p class="article-description"><?= $plant['guide'] ?></p>
				</div>
				<img src="<?= $plant['image2'] ?>" alt="<?= $plant['title'] ?>">
			</div>
			<p class="article-description article-center"><?= $plant['additional_text'] ?></p>
			</p>
			<div class="article-footer">
				<div class="article-category">
					<h4 class="article-category-title">Category : </h4>
					<a class="article-category-link" href="#"><?= $plant['category_name'] ?></a>
				</div>
				<i class="far fa-heart"></i>
			</div>
		</article>
	</main>
<?= $this->endsection() ?>
