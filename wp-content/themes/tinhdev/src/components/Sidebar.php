<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use TinhDev\base\bootstrap_5_wp_nav_menu_walker;
use WP_Query;

class Sidebar extends Base implements BaseInterface{

    public static function render(){
        $post = get_field('post', 'option');

        $argsPost   = [
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'offset'         => 0,
            'orderby'        => 'ID',
            'order'          => 'DESC',
            'posts_per_page' => 3,
            'tax_query'      => [
                [
                    'taxonomy' => 'category',
                    'field'    => 'term_id', //This is optional, as it defaults to 'term_id'
                    'terms'    => $post->term_id,
                    'operator' => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                ]
            ]
        ];
        $list_posts = new WP_Query($argsPost);
        ?>
		<div class="mb-5">
			<div class="d-none d-lg-block">
				<h3 class="title-section title-sidebar p-2 mb-0">
					<i class="fa-solid fa-bars" aria-hidden="true"></i> DANH MỤC SẢN PHẨM </h3>
                <?php
                if (has_nav_menu('primary_menu')){
                    wp_nav_menu([
                        'theme_location'  => 'primary_menu',
                        'container'       => 'nav',
                        'container_class' => '',
                        'menu_class'      => 'categories-menu',
                    ]);
                }
                ?>
			</div>
			<div class="d-block d-lg-none">
				<button class="navbar-toggler title-section title-sidebar bg-primary text-white p-2 mb-0 w-100 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa-solid fa-bars" aria-hidden="true"></i> DANH MỤC SẢN PHẨM
				</button>
                <?php
                if (has_nav_menu('primary_menu')){
                    wp_nav_menu([
                        'theme_location'  => 'primary_menu',
                        'container'       => 'nav',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'menu_class'      => '',
                        'fallback_cb'     => '__return_false',
                        'items_wrap'      => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth'           => 2,
                        'walker'          => new bootstrap_5_wp_nav_menu_walker()
                    ]);
                }
                ?>
			</div>
            <?php if ($list_posts->have_posts()): ?>
				<h3 class="title-section title-sidebar p-2 mt-5">
					BÀI VIẾT NỔI BẬT </h3>
                <?php while ($list_posts->have_posts()) :
                    global $post;
                    $list_posts->the_post();
                    setup_postdata($post);
                    $ID      = get_the_ID();
                    $post    = setup_postdata($ID);
                    $img     = get_the_post_thumbnail_url($ID, 'large');
                    $title   = get_the_title($ID);
                    $link    = get_permalink($ID);
                    $excerpt = get_the_excerpt($ID);
                    ?>
					<div class="post-item-sidebar mb-3">
						<div class="position-relative d-flex" title="<?= $title ?>">
                            <?php if (!empty($img)): ?>
								<div class="box-img">
									<img class="img-fluid" width="320" height="190" src="<?= $img ?>" alt="<?= $title ?>">
								</div>
                            <?php endif; ?>
							<div class="info">
								<a href="<?= $link ?>" title="<?= $title ?>"><?= $title ?></a>
							</div>
						</div>
					</div>
                <?php
                endwhile;
                ?><?php endif; ?>

			<div class="banner mt-5 w-100">
				<img class="w-100" src="<?= get_field('banner_post',
                    'option') ?>" alt="<?php get_the_title(); ?>">
			</div>
		</div>
        <?php
    }
}