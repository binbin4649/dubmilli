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
	<?php $this->BcBaser->element('card_image_3colunm') ?>
	<?php $this->BcBaser->pagination('dub'); ?>
</section>
</div>
