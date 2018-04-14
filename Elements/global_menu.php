<?php
/**
 * [PUBLISH] サイトマップ
 * @var BcAppView $this
 */

/**
 * カテゴリの階層構造を表現する為、再帰呼び出しを行う
 * $this->BcBaser->contentsMenu() で呼び出す
 */

if (!isset($level)) {
	$level = 1;
}
if(!isset($currentId)) {
	$currentId = null;
}
?>
<header>
	<div class="container">
	<nav class="navbar navbar-expand-sm navbar-light">
	<a href="<?php $this->BcBaser->siteUrl() ?>" class="navbar-brand navbar-brand-dub">
		<?php $this->BcBaser->siteName() ?>
	</a>
	<button class="navbar-toggler">
		<span class="navbar-toggler-icon" data-toggle="collapse" data-target="#menu"></span>
	</button>
<div id="menu" class="collapse navbar-collapse justify-content-end">
<?php if (isset($tree)): ?>
	<ul class="navbar-nav">
		<?php if (isset($tree)): ?>
			<?php foreach ($tree as $content): ?>
				<?php if ($content['Content']['title']): ?>
					<?php
					if(!empty($content['Content']['exclude_menu'])) {
						continue;
					}
					$liClass = '';
					if($content['Content']['id'] == $currentId || $this->BcBaser->isContentsParentId($currentId, $content['Content']['id'])) {
						$liClass .= ' active';
					}
					$options = [];
					if(!empty($content['Content']['blank_link'])) {
						$options = ['target' => '_blank'];
					}
					$options = ['class' => 'nav-link'];
					$title = $this->Dub->getFirstTitle($content['Content']['title']);
					?>
					<li class="nav-item <?php echo $liClass ?>">
						<?php $this->BcBaser->link($title, $this->BcBaser->getContentsUrl($content['Content']['url'], false, null, false), $options) ?>
					</li>
				<?php endif ?>
			<?php endforeach; ?>
		<?php endif ?>
	</ul>
<?php endif ?>
	</div>
	</nav>
</div>
</header>
