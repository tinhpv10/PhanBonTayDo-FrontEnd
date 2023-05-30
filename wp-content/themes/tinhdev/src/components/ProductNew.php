<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class ProductNew extends Base implements BaseInterface{

    public static function render(){
        $args_product_new = [
            'posts_per_page' => 6, // Grabs all of the featured products. Limit if needed
            'post_type'      => 'product', // Ensures the post type is a product
            'post_status'    => 'publish', // Ensures the product is published
            'orderby'        => 'ID',
            'order'          => 'DESC',
        ];


        $list_product_new = new WP_Query($args_product_new);
        $i                = 1;
        ?>
		<section class="section-product bg-light py-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-9">
                        <?php while ($list_product_new->have_posts()) : $list_product_new->the_post();
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
									<div class="price">
										<p>Giá: <strong class="text-danger">Liên hệ</strong></p>
									</div>
									<hr>
									<div class="excerpt">
                                        <?= $excerpt ?>
									</div>
								</div>
							</div>
                        <?php $i++; endwhile;
                        wp_reset_query();
                        wp_reset_postdata();
                        ?>
					</div>
					<div class="col-lg-12 text-center">
						<a href="<?=  get_permalink( wc_get_page_id( 'shop' ) ) ?>" class="btn text-white rounded-0 btn-primary">
							XEM THÊM
						</a>
					</div>
				</div>
			</div>
		</section>
        <?php
    }
}