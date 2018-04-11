<?php
/**
 * フッター
 *
 * BcBaserHelper::footer() で呼び出す
 * （例）<?php $this->BcBaser->footer() ?>
 */
?>
<footer class="footer bg-dark py-5">
<div class="container">
<div class="row">
<div class="col-sm-4 text-center text-gray"><i class="fas fa-info fa-4x"></i></div>
<div class="col-sm-4">
<ul>
<li><a href="http://dubmilli.com/" class="a-footer-dub">HOME:ホーム</a></li>
<li><a href="/about" class="a-footer-dub">ABOUT:会社概要</a></li>
<li><a href="/works/" class="a-footer-dub">WORKS:実績</a></li>
<li><a href="/service" class="a-footer-dub">SERVICE:ホームページ作成</a></li>
<li><a href="/news/" class="a-footer-dub">NEWS:お知らせ</a></li>
<li><a href="/contact/" class="a-footer-dub">CONTACT:お問合せ</a></li>
</ul>
</div>
<div class="col-sm-4">
<h6>links</h6>
<ul>
<li><a href="#" class="a-footer-dub">Link.</a></li>
<li><a href="#" class="a-footer-dub">Link.</a></li>
<li><a href="#" class="a-footer-dub">Link.</a></li>
</ul>
</div>
</div>
<div class="text-center">
<span class="text-muted"><small><a href="http://dubmilli.com" class="a-dub">(c)2018 dubmilli.com</a></small></span><br>
<a href="http://basercms.net/" target="_blank"><?php $this->BcBaser->img('baser.power.gif'); ?></a>
<a href="http://cakephp.jp/" target="_blank"><?php $this->BcBaser->img('cake.power.gif'); ?></a>
<a href="http://dubmilli.com/" target="_blank"><?php $this->BcBaser->img('dubmilli.power.gif'); ?></a>
</div>
</div>
</footer>
