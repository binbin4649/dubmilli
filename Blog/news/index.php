<?php
/**
 * ブログトップ
 * 呼出箇所：ブログトップ
 */
$this->BcBaser->setDescription($this->Blog->getDescription());
?>
<div class="container">
<section class="mt-5 mx-3">
	<h5 class="mb-4"><?php $this->Dub->firstTitle($this->Blog->getTitle()) ?></h5>
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

	<?php $this->BcBaser->pagination('dub'); ?>

</section>
</div>
