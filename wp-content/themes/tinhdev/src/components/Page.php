<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class Page extends Base implements BaseInterface{

    /**
     * @return mixed
     */
    public static function render(){
        ?>
		<div class="section-page bg-white">
			<div class="title-breadcrumb py-2 bg-light">
				<div class="container">
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if (function_exists('bcn_display')){
                            bcn_display();
                        } ?>
					</div>
				</div>
			</div>

			<div class="container">
				<h1 class="h1 text-center py-2">
                    <?php the_title(); ?>
				</h1>
				<div class="py-2">
                    <?php the_content(); ?>
				</div>
			</div>
		</div>
    <?php }
}