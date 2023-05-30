<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class Services extends Base implements BaseInterface{

    public static function render(){
        $services = get_field('services', 'option');
        if (!empty($services)):
            ?>
			<section class="services">
				<div class="list-services d-flex flex-wrap">
                    <?php foreach ($services as $service){ ?>
						<div class="service-item">
							<img src="<?= $service['bg'] ?? '' ?>" alt="<?= $service['link']['title'] ?? '' ?>">
							<div class="box-information text-center">
								<h3 class="title text-white text-upppercase"><?= $service['link']['title'] ?? '' ?></h3>
								<a class=" text-white" href="<?= $service['link']['url'] ?? '' ?>">Xem chi tiết</a>
							</div>
						</div>
                    <?php } ?>
				</div>
			</section>
        <?php
        endif;
    }
}