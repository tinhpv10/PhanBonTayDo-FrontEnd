<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use TinhDev\components\Sidebar;
use WP_Query;

class Single extends Base implements BaseInterface{

    /**
     * @return mixed
     */
    public static function render(){
        $args         = [
            'category__in'   => wp_get_post_categories(get_the_ID()),
            'posts_per_page' => 6,
            'post_type'      => 'post', // Ensures the post type is a product
            'post_status'    => 'publish', // Ensures the product is published
            'post__not_in'   => [get_the_ID()]
        ];
        $list_product = new WP_Query($args);
        ?>
		<div class="section-single bg-white">
			<div class="title-breadcrumb py-2 bg-light">
				<div class="container">
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if (function_exists('bcn_display')){
                            bcn_display();
                        } ?>
					</div>
				</div>
			</div>

			<div class="py-4">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<h1 class="py-2">
                                <?php the_title(); ?>
							</h1>
                            <?php the_content(); ?><?php comment_form(); ?>
						</div>
						<div class="col-lg-3">

						</div>
						<div class="col-lg-12">
							<h6 class="title-dancing text-center text-primary">Bài viết liên quan</h6>
                            <?php $i = 1;
                            while ($list_product->have_posts()) : $list_product->the_post();
                                $ID      = get_the_ID();
                                $img     = get_the_post_thumbnail_url($ID, 'full');
                                $title   = get_the_title($ID);
                                $link    = get_permalink($ID);
                                $excerpt = get_the_excerpt($ID);
                                ?>
								<div class="product-item mb-5 d-flex flex-column  <?= $i % 2 == 0 ? 'flex-lg-row-reverse' : 'flex-lg-row' ?> ">
									<div class="box-img p-1">
										<a href="<?= $link ?>" title="<?= $title ?>">
											<img src="<?= $img ?>" alt="<?= $title ?>">
										</a>
									</div>

									<div class="info p-4 position-relative py-3">
										<h3 class="title mb-1">
											<a href="<?= $link ?>" title="<?= $title ?>">
                                                <?= $title ?>
											</a>
										</h3>
										<hr>
										<div class="excerpt">
                                            <?= $excerpt ?>
										</div>
									</div>
								</div>
                                <?php $i ++; endwhile;
                            wp_reset_query();
                            wp_reset_postdata();
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php }
}