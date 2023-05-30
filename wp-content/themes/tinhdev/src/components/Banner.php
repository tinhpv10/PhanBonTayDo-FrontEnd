<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class Banner extends Base implements BaseInterface{

    public static function render(){
        $banner = get_field('banner', 'option');
        if (!empty($banner)):
            ?>
			<div class="banner" style="background-image: url('<?= $banner ?>')"></div>
        <?php endif;
    }
}