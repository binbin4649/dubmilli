<?php
/**
 * メールフォーム確認ページ
 * 呼出箇所：メールフォーム
 */
if ($freezed) {
	$this->Mailform->freeze();
}
?>
<div class="cover text-white text-center py-5">
	<h1 class="display-4 md-4"><?php $this->BcBaser->contentsTitle() ?></h1>
	<?php if ($this->Mail->descriptionExists()): ?>
		<p class="lead"><?php $this->Mail->description() ?></p>
	<?php endif ?>
</div>

<div class="container">
<section class="my-5 mx-md-5">
<?php if ($freezed): ?>
	<h5>入力内容の確認</h5>
	<p>入力した内容に間違いがなければ「送信」ボタンをクリックしてください。</p>
	<hr class="mb-5">
	<?php else: ?>
<?php endif ?>

	<?php $this->BcBaser->flash() ?>
	<!-- /Elements/mail_form.php -->
	<?php $this->BcBaser->element('mail_form') ?>
</section>
</div>
