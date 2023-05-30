<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use TinhDev\base\bootstrap_5_wp_nav_menu_walker;
use WP_Query;
use TinhDev\components\Sidebar;

class ProductFeatured extends Base implements BaseInterface{

    public static function render(){
        $args         = [
            'posts_per_page' => 50, // Grabs all of the featured products. Limit if needed
            'post_type'      => 'product', // Ensures the post type is a product
            'post_status'    => 'publish', // Ensures the product is published
            'tax_query'      => [
                [
                    'taxonomy' => 'product_visibility', // Does a meta query on product visibility
                    'field'    => 'name',
                    'terms'    => 'featured', // Makes sure we grab all products flagged as featured
                    'operator' => 'IN',
                ],
            ]
        ];
        $list_product = new WP_Query($args);
        if ($list_product->have_posts()): ?>
			<section class="section-product bg-white about-us py-5">
				<div class="container bg-light border rounded py-3">
					<div class="row">
						<div class="col-lg-3">
                            <?php Sidebar::render() ?>
						</div>
						<div class="col-lg-9">
							<div class=" text-center">
								<h2 class="title">Sản phẩm nổi bật</h2>
							</div>

							<div class="list-product d-flex flex-wrap">
                                <?php while ($list_product->have_posts()) : $list_product->the_post();
                                    $ID             = get_the_ID();
                                    $img            = get_the_post_thumbnail_url($ID, 'full');
                                    $title          = get_the_title($ID);
                                    $link           = get_permalink($ID);
                                    $product        = wc_get_product($ID);
                                    $max_percentage = parent::getProductPercentage($product)
                                    ?>
									<div class="product-item bg-white">
										<div class="box-img">
											<a href="<?= $link ?>" title="<?= $title ?>">
												<img src="<?= $img ?>" alt="<?= $title ?>">
											</a>
										</div>

										<div class="info bg-white">
											<h3 class="title">
												<a href="<?= $link ?>" title="<?= $title ?>">
                                                    <?= $title ?>
												</a>
											</h3>

                                            <?php if ($max_percentage > 0): ?>
												<div class="price">
													<del><?= number_format($product->get_regular_price()) . get_woocommerce_currency_symbol(); ?></del>
													<ins class="text-decoration-none">
														<strong><?= number_format($product->get_sale_price()) . get_woocommerce_currency_symbol(); ?></strong>
													</ins>
												</div>

												<div class="sale-off">
                                                    <?= round($max_percentage) ?>%
												</div>
                                            <?php elseif ($product->get_regular_price() != 0): ?>
												<div class="price">
													<ins class="text-decoration-none">
														<strong><?= number_format($product->get_regular_price()) . get_woocommerce_currency_symbol(); ?></strong>
													</ins>
												</div>
                                            <?php else: ?>
												<div class="price">
													<ins class="text-decoration-none">
														<strong><?= __('Liên hệ',
                                                                'tinhdev') ?></strong>
													</ins>
												</div>
                                            <?php endif; ?>
											<div class="rating text-secondary">
												<i class="fa-solid fa-star" aria-hidden="true"></i>
												<i class="fa-solid fa-star" aria-hidden="true"></i>
												<i class="fa-solid fa-star" aria-hidden="true"></i>
												<i class="fa-solid fa-star" aria-hidden="true"></i>
												<i class="fa-solid fa-star" aria-hidden="true"></i>
											</div>

										</div>
									</div>
                                <?php endwhile; ?>
							</div>
						</div>
					</div>
			</section>
        <?php endif;
    }
}