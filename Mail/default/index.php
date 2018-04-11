<?php
/**
 * メールフォーム
 * 呼出箇所：メールフォーム
 */
?>
<div class="cover text-white text-center py-5">
	<h1 class="display-4 md-4"><?php $this->BcBaser->contentsTitle() ?></h1>
	<?php if ($this->Mail->descriptionExists()): ?>
		<p class="lead"><?php $this->Mail->description() ?></p>
	<?php endif ?>
</div>

<div class="container">
<section class="my-5 mx-md-5">
	<p class="mx-lg-5 text-muted">サイト構築、baserCMSのカスタマイズ等々、お気軽にお問合せください。</p>
	<?php $this->BcBaser->flash() ?>
	<!-- /Elements/mail_form.php -->
	<?php $this->BcBaser->element('mail_form') ?>
</section>
</div>
