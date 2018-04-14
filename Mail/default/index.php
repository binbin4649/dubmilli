<?php
/**
 * メールフォーム
 * 呼出箇所：メールフォーム
 */
?>
<div class="container">
<section class="my-5 mx-md-5">
	<p class="mx-lg-5 text-muted">サイト構築、baserCMSのカスタマイズ等々、お気軽にお問合せください。</p>
	<?php $this->BcBaser->flash() ?>
	<!-- /Elements/mail_form.php -->
	<?php $this->BcBaser->element('mail_form') ?>
</section>
</div>
