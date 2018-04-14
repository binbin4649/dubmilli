<?php
/**
 * ブログ記事詳細ページ
 * 呼出箇所：ブログ記事詳細ページ
 */
$description = $this->Blog->getTitle() . '｜' . $this->Blog->getPostContent($post, false, false, 50);
$this->BcBaser->setTitle($this->Blog->getPostTitle($post, false), false);
$this->BcBaser->setDescription($description);
$uri = $this->BcBaser->getUri($this->BcBaser->getHere());
$sharer_url = urlencode($uri);
?>
<div class="container">
<section class="my-5 mx-md-3">
	<h4><?php $this->Blog->postTitle($post, false) ?></h4>
	<p><small><span class="text-muted mr-2">pub:<?php $this->Blog->postDate($post) ?></span></small>

		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-facebook fa-lg mx-1 facebook-dub"></i></a>
		<a href="https://twitter.com/share?url=<?php echo $sharer_url ?>&text=<?php $this->Blog->postTitle($post, false) ?>" target="_blank"><i class="fab fa-twitter fa-lg mx-1 twitter-dub"></i></a>
		<a href="http://b.hatena.ne.jp/entry/<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-hatena fa-lg mx-1 hatena-dub"></i></a>
		<a href="http://getpocket.com/edit?url=<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-get-pocket fa-lg mx-1 pocket-dub"></i></a>
		<a href="http://line.me/R/msg/text/?<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-line fa-lg mx-1 line-dub"></i></a>
	</p>
	<div class="text-center mb-3">
		<?php $this->Blog->eyeCatch($post, array('link' => false, 'class' => 'rounded img-thumbnail', 'imgsize'=>'large')); ?>
		<!-- <img src="img/rawpixel-com-268378-unsplash.jpg" class="rounded img-thumbnail" alt="..."> -->
	</div>
	<p>
		<?php echo $post['BlogPost']['detail']; ?>
	</p>
	<div class="row mt-5">
		<div class="col-md-6 text-center mb-3">
			<?php $this->Blog->prevLink($post, '', array('class'=>'a-dub')) ?>
		</div>
		<div class="col-md-6 text-center mb-3">
			<?php $this->Blog->nextLink($post, '', array('class'=>'a-dub')) ?>
		</div>
	</div>
</section>
</div>
