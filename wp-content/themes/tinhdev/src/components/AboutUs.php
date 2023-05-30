<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class AboutUs extends Base implements BaseInterface{

    /**
     * @return mixed|void
     */
    public static function render(){
        $about_us = get_field('about_us', 'option');
        ?>
	    <section class="introduce">
		    <div class="container p-md-5 p-2">
			    <div class="row">
				    <div class="col-12 col-md-6">
					    <div class="title text-center">
						    <span class="fs-2 fw-semibold"><?= $about_us['title'] ?></span>
					    </div>
					    <div class="content text-justify">
                            <?= $about_us['about_content'] ?>
					    </div>
				    </div>
				    <div class="col-12 col-md-6">
					    <video src="<?=  $about_us['videos'] ?>" height="400" width="100%" controls="true" autoplay="false"></video>
				    </div>
			    </div>
		    </div>
	    </section>
        <?php
    }
}