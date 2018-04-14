<?php
/**
 * メールフォーム送信完了ページ
 * 呼出箇所：メールフォーム
 */
if (Configure::read('debug') == 0 && $mailContent['MailContent']['redirect_url']) {
	$this->Html->meta(array('http-equiv' => 'Refresh'), null, array('content' => '5;url=' . $mailContent['MailContent']['redirect_url'], 'inline' => false));
}
?>
<div class="container">
<section class="my-5 mx-5">
<h5>メール送信完了</h5>
	<p>お問い合わせ頂きありがとうございました。<br>
	確認次第、ご連絡させて頂きます。</p>
<?php if (Configure::read('debug') == 0 && $mailContent['MailContent']['redirect_url']): ?>
	<p>※<?php echo __('%s 秒後にトップページへ自動的に移動します。', 5) ?></p>
	<p><a href="<?php echo $mailContent['MailContent']['redirect_url']; ?>"><?php echo __('移動しない場合はコチラをクリックしてください。') ?>≫</a></p>
<?php endif; ?>
</section>
</div>
