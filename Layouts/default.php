<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->BcBaser->metaDescription() ?>
    <?php $this->BcBaser->metaKeywords() ?>
    <?php $this->BcBaser->scripts() ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <?php $this->BcBaser->css(array('jpn.min.css', 'dub')) ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php $this->BcBaser->js(array('dub')) ?>
    <?php $this->BcBaser->title() ?>
    <?php $this->BcBaser->googleAnalytics() ?>
  </head>
  <body>

      <?php $this->BcBaser->globalMenu() ?>
      <?php $this->BcBaser->flash() ?>
  	<main>
      <?php if ($this->BcBaser->isHome()): ?>
    		<div class="carousel slide" data-ride="carousel">
    			<div class="carousel-inner">
    				<?php $this->Dub->topImage(); ?>
    			</div>
    		</div>
        <div class="container bg-light py-5">
          <section class="mx-3">
            <h5 class="h2_dub mb-4">NEWS</h5>
            <?php $this->BcBaser->blogPosts('news'); ?>
            </section>
          <section class="mx-3">
            <h5 class="h2_dub mb-4">WORKS</h5>
            <?php $this->BcBaser->blogPosts('works', 3); ?>
          </section>
        </div>
      <?php else: ?>

    	<?php endif ?>
      <?php $this->BcBaser->content() ?>
  	</main>

		<?php $this->BcBaser->footer() ?>
    <p id="pageTop" style="display:none;"><a href="#"><i class="fa fa-angle-double-up"></i></a></p>
  </body>
</html>
