<?php
/**
 * パーツ用ブログ記事一覧
 *
 * BcBaserHelper::blogPosts( コンテンツ名, 件数 ) で呼び出す
 * （例）<?php $this->BcBaser->blogPosts('news', 3) ?>
 */
?>


<dl class="row">
<?php if ($posts): ?>
	<?php foreach ($posts as $key => $post): ?>
    <dt class="col-sm-2 text-md-right text-muted"><small><?php $this->Blog->postDate($post) ?></small></dt>
    <dd class="col-sm-10 dd-dub"><?php $this->Blog->postTitle($post) ?></dd>
	<?php endforeach; ?>
<?php else: ?>
  <dt class="col-sm-2 text-md-right text-muted"><small>0000.0.0</small></dt>
  <dd class="col-sm-10">no data.</dd>
<?php endif ?>
</dl>
