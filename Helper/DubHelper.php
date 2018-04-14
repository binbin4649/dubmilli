<?php
/**
 *
 * 利用例：<?php $this->ContestSample->show() ?>
 * <?php $this->Dub->topImage() ?>
 */
//class DubHelper extends AppHelper {
class DubHelper extends BcBaserHelper {

	public function topImage() {
		$theme = $this->siteConfig['theme'];
		$pathDir = getViewPath() . 'img' . DS;
		$uri = $this->getUri('/');
		$active = 1;
		for ($i = 1; $i < 6; $i++) {
			$pathImage = $pathDir.'top_image_'.$i.'.jpg';
			if (file_exists($pathImage)){
				$urlImage = $uri.'theme/'.$theme.'/img/top_image_'.$i.'.jpg';
				if($active == 1){
					echo '<div class="carousel-item active"><img class="d-block w-100" src="';
				}else{
					echo '<div class="carousel-item"><img class="d-block w-100" src="';
				}
				echo $urlImage;
				echo '"></div>';
				$active++;
			}
		}
	}
	
	public function getFirstTitle($before_title){
		$exp_title = explode(',', $before_title);
		return $exp_title[0];
	}
	
	public function firstTitle($before_title){
		echo $this->getFirstTitle($before_title);
	}
	
	public function secondTitle($before_title){
		$exp_title = explode(',', $before_title);
		if(!empty($exp_title[1])){
			echo $exp_title[1];
		}else{
			echo '';
		}
	}


}