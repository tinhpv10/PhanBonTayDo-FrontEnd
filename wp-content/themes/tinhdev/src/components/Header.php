<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class Header extends Base implements BaseInterface{

    /**
     * @return void
     */
    public static function render(){
        $header = get_field('header', 'option');

        ?>
		<header class="d-none d-md-block">
			<div class="container-fluid header-center p-3">
				<div class="container">
					<div class="row">
						<div class="col-6 d-lg-none">
							<a href="#nav" class="d-block text-white d-lg-none btn btn-primary">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</a>
						</div>
						<div class="col-6 col-lg-2">
							<a href="/">
								<img src="<?= $header['logo'] ?>" alt="" class="img-fluid">
							</a>
						</div>

					</div>
				</div>
			</div>
			<div class="menu-header bg-primary">
				<div class="container">
                    <?php
                    if (has_nav_menu('primary_menu')){
                        wp_nav_menu([
                            'theme_location'  => 'primary_menu',
                            'container'       => 'nav',
                            'container_class' => 'primary-menu-nav w-100 d-none d-lg-block',
                            'menu_class'      => 'primary-menu d-flex w-100 justify-content-start text-uppercase',
                        ]);
                    }
                    ?>
				</div>

			</div>
		</header>
		<div class="d-none">
            <?php
            if (has_nav_menu('primary_menu')){
                wp_nav_menu([
                    'theme_location'  => 'primary_menu',
                    'container'       => 'nav',
                    'container_class' => 'menu-mobile',
                    'container_id'    => 'nav',
                    'menu_class'      => 'menu-header-mobile',
                ]);
            }
            ?>
		</div>
    <?php }
}