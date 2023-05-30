<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;
class ProductTerm extends Base implements BaseInterface{
    public static function render(){
        $products             = get_field('home_terms', 'option');
        if (!empty($products)):
            foreach ($products as $product):
                $args = [
                    'posts_per_page' => 8, // Grabs all of the featured products. Limit if needed
                    'post_type'      => 'product', // Ensures the post type is a product
                    'post_status'    => 'publish', // Ensures the product is published
                    'tax_query'      => [
                        [
                            'taxonomy' => 'product_cat', // Does a meta query on product visibility
                            'field'    => 'term_id', //This is optional, as it defaults to 'term_id'
                            'terms'    => $product->term_id,
                            'operator' => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                        ],
                    ]
                ];
                $list_product = new WP_Query($args);
                if ($list_product->have_posts()):
                    ?>
					<section class="products">
						<div class="container p-md-5 p-1">
							<div class="card border bg-light">
								<div class="card-header bg-light p-0">
									<div class="row m-0">
										<div class="col-md-3 col-12 bg-primary p-2 ps-4  text-light rounded-top">
											<i class='bx bx-abacus' aria-hidden="true"></i>
											<span><?= $product->name ?? '' ?></span>
										</div>
										<div class="col-md-9 d-md-block d-none text-end p-2 border-bottom border-danger">
											<a href="<?= get_category_link($product->term_id) ?>" class="text-decoration-none me-2"><i>+ Xem Tất Cả</i></a>
										</div>
									</div>
								</div>
								<div class="row p-md-4 p-2">
                                    <?php
                                    while ($list_product->have_posts()) : $list_product->the_post();
                                        $ID    = get_the_ID();
                                        $img   = get_the_post_thumbnail_url($ID,
                                            'full');
                                        $title = get_the_title($ID);
                                        $link  = get_permalink($ID);
                                        ?>
										<div class="col-md-3 col-6 p-2">
											<div class="item text-center">
												<a class="box-img" href="<?= $link ?>" title="<?= $title ?>">
													<img src="<?= $img ?>" alt="<?= $title ?>">
												</a>
												<div class="name p-2">
													<a  class="text-decoration-none text-black" href="<?= $link ?>" title="<?= $title ?>">
                                                        <?= $title ?>
													</a>
												</div>
											</div>
										</div>
                                    <?php endwhile;
                                    wp_reset_query();
                                    wp_reset_postdata();
                                    ?>
								</div>
							</div>
						</div>
					</section>
                <?php
                endif;
            endforeach;
        endif;
    }
}