<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class ProductTab extends Base implements BaseInterface{

    public static function render(){
        $args_product_new = [
            'posts_per_page' => 6, // Grabs all of the featured products. Limit if needed
            'post_type'      => 'product', // Ensures the post type is a product
            'post_status'    => 'publish', // Ensures the product is published
            'orderby'        => 'ID',
            'order'          => 'DESC',
        ];

        $args_sale = [
            'post_type'      => 'product',
            'posts_per_page' => 6,
            'meta_query'     => [
                'relation' => 'OR',
                [ // Simple products type
                    'key'     => '_sale_price',
                    'value'   => 0,
                    'compare' => '>',
                    'type'    => 'numeric'
                ],
                [ // Variable products type
                    'key'     => '_min_variation_sale_price',
                    'value'   => 0,
                    'compare' => '>',
                    'type'    => 'numeric'
                ]
            ]
        ];

        $args_featured         = [
            'posts_per_page' => 6, // Grabs all of the featured products. Limit if needed
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
        $list_product_new      = new WP_Query($args_product_new);
        $list_product_sale     = new WP_Query($args_sale);
        $list_product_featured = new WP_Query($args_featured);

        ?>
		<section class="section-product bg-light py-5">
			<div class="container">
				<ul class="nav nav-pills mb-3" id="pills-products" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="rounded-0 nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">MỚI VỀ</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="rounded-0 nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">KHUYẾN MÃI</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="rounded-0 nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">NỔI BẬT</button>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="list-product-carousel owl-carousel product-owl-carousel">
                            <?php while ($list_product_new->have_posts()) : $list_product_new->the_post();
                                $ID             = get_the_ID();
                                $img            = get_the_post_thumbnail_url($ID, 'full');
                                $title          = get_the_title($ID);
                                $link           = get_permalink($ID);
                                $product        = wc_get_product($ID);
                                $max_percentage = parent::getProductPercentage($product);

                                ?>
								<div class="product-item bg-white">
									<div class="box-img">
										<a href="<?= $link ?>" title="<?= $title ?>">
											<img src="<?= $img ?>" alt="<?= $title ?>">
										</a>
									</div>

									<div class="info position-relative bg-white">
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
                                                <?= $max_percentage ?>%
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
													<strong><?= __('Liên hệ', 'tinhdev') ?></strong>
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
                            <?php endwhile;
                            wp_reset_query();
                            wp_reset_postdata();
                            ?>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="list-product-carousel owl-carousel product-owl-carousel">
                            <?php while ($list_product_sale->have_posts()) : $list_product_sale->the_post();
                                $ID             = get_the_ID();
                                $img            = get_the_post_thumbnail_url($ID, 'full');
                                $title          = get_the_title($ID);
                                $link           = get_permalink($ID);
                                $product        = wc_get_product($ID);
                                $max_percentage = parent::getProductPercentage($product);

                                ?>
								<div class="product-item bg-white">
									<div class="box-img">
										<a href="<?= $link ?>" title="<?= $title ?>">
											<img src="<?= $img ?>" alt="<?= $title ?>">
										</a>
									</div>

									<div class="info position-relative bg-white">
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
                                                <?= $max_percentage ?>%
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
													<strong><?= __('Liên hệ', 'tinhdev') ?></strong>
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
                            <?php endwhile;
                            wp_reset_query();
                            wp_reset_postdata();
                            ?>
						</div>
					</div>

					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="list-product-carousel owl-carousel product-owl-carousel">
                            <?php while ($list_product_featured->have_posts()) : $list_product_featured->the_post();
                                $ID             = get_the_ID();
                                $img            = get_the_post_thumbnail_url($ID, 'full');
                                $title          = get_the_title($ID);
                                $link           = get_permalink($ID);
                                $product        = wc_get_product($ID);
                                $max_percentage = parent::getProductPercentage($product);

                                ?>
								<div class="product-item bg-white">
									<div class="box-img">
										<a href="<?= $link ?>" title="<?= $title ?>">
											<img src="<?= $img ?>" alt="<?= $title ?>">
										</a>
									</div>

									<div class="info position-relative bg-white">
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
                                                <?= $max_percentage ?>%
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
                            <?php endwhile;
                            wp_reset_query();
                            wp_reset_postdata();
                            ?>
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php
    }
}