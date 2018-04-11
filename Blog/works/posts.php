<?php
/**
 * パーツ用ブログ記事一覧
 *
 * BcBaserHelper::blogPosts( コンテンツ名, 件数 ) で呼び出す
 * （例）<?php $this->BcBaser->blogPosts('news', 3) ?>
 */
?>
<?php $this->BcBaser->element('card_image_3colunm', array('posts' => $posts)) ?>
