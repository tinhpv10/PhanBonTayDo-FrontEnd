<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class Slider extends Base implements BaseInterface{

    /**
     * @return mixed|void
     */
    public static function render(){
        $slider = get_field('slider', 'option');
        ?>
		<div class="slider">
            <?= do_shortcode('[rev_slider alias="slider-1"][/rev_slider]') ?>
		</div>
    <?php }
}