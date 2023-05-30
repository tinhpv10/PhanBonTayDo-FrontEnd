<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class Galleries extends Base implements BaseInterface{

    public static function render(){
        $galleries = get_field('galleries', 'option');
        ?>
		<div class="galleries py-5">
			<div class="container">
				<h4 class="title-dancing mb-5 text-primary text-center"><?= $galleries['title'] ?></h4>
				<div class="gallery-list">
                    <?php foreach ($galleries['image'] as $gallery):
	                    ?>
						<div class="gallery border p-2">
							<a data-fancybox="gallery" href="<?= $gallery ?>" >
								<img src="<?= $gallery ?>" alt="">
							</a>
						</div>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
    <?php }
}