<?php
/**
 * ブログトップ
 * 呼出箇所：ブログトップ
 */
$this->BcBaser->setDescription($this->Blog->getDescription());
?>
<div class="cover text-white text-center py-5">
	<h1 class="display-4 md-4"><?php $this->Blog->title() ?></h1>
	<?php if ($this->Blog->descriptionExists()): ?>
	<p class="lead"><?php $this->Blog->description(); ?></p>
	<?php endif ?>
</div>
<div class="container">
<section class="mt-5 mx-3">
	<h5 class="mb-4"><?php $this->Blog->title() ?></h5>
	<?php if (!empty($posts)): ?>
		<dl class="row">
		<?php foreach ($posts as $post): ?>
			<dt class="col-sm-2 text-md-right text-muted"><small><?php $this->Blog->postDate($post) ?></small></dt>
			<dd class="col-sm-10"><?php $this->Blog->postLink($post, $post['BlogPost']['name'], array('class'=>'a-dub')) ?>
			</dd>
		<?php endforeach; ?>
		</dl>
	<?php else: ?>
	<p class="text-center my-5">no data.</p>
	<?php endif; ?>

	<!-- <nav aria-label="Page navigation">
		<ul class="pagination justify-content-center mb-5">
			<li class="page-item disabled">
				<a class="page-link a-dub" href="#">Previous</a>
			</li>
			<li class="page-item"><a class="page-link a-dub" href="#">1</a></li>
			<li class="page-item"><a class="page-link a-dub" href="#">2</a></li>
			<li class="page-item"><a class="page-link a-dub" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link a-dub" href="#">Next</a>
			</li>
		</ul>
	</nav> -->

	<!-- <nav aria-label="Page navigation">
	  <ul class="pagination justify-content-center mb-5">
			<li class="page-item disabled"><span class="page-link">Previous</span></li>
			<li class="page-item"><span class="page-link"><a href="/news/index/page:2" rel="next">Next</a></span></li>
		</ul>
	</nav> -->

	<?php $this->BcBaser->pagination('dub'); ?>

</section>
</div>
