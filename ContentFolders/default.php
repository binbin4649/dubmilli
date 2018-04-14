<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 4.0.0
 * @license			http://basercms.net/license/index.html
 */
?>
<div class="cover text-white text-center py-5">
	<h1 class="display-4 md-4"><?php $this->BcBaser->contentsTitle() ?></h1>
	<p class="lead">helper</p>
</div>
<div class="container">
<section class="mt-5 mx-3">
	<?php if($children): ?>
	<dl class="row">
		<?php foreach($children as $child): ?>
		<dt class="col-sm-2 text-md-right text-muted"><i class="fas fa-arrow-right"></i></dt>
		<dd class="col-sm-10">
		<?php $this->BcBaser->link($child['Content']['title'], $child['Content']['url'], array('class'=>'a-dub')) ?>
		<?php endforeach ?>
		</dd>
	</dl>
	<?php endif ?>
</section>
</div>
