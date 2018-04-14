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
	<?php $this->BcBaser->element('card_image_3colunm') ?>
	<?php $this->BcBaser->pagination('dub'); ?>
</section>
</div>
