<?php
/**
 * ContestSampleHelper
 *
 * テーマで利用したヘルパー（表示用関数）を記載したい場合にはここに記載します。
 * クラス名は任意です。Helperフォルダに配置したヘルパーが利用できます。
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

	public function getEyeCatchProperty($post){
		if(!empty($post['BlogPost']['eye_catch'])){
			$uri = $this->getUri('/files/blog/');
			$uri = $uri.$post['BlogPost']['blog_content_id'].'/blog_posts/'.$post['BlogPost']['eye_catch'];
			$image_info = getimagesize($uri);
			return array('uri'=>$uri, 'width'=>$image_info[0], 'height'=>$image_info[1]);
		}else{
			return false;
		}
	}


}
