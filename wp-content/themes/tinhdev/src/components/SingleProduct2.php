<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class SingleProduct2 extends Base implements BaseInterface{

    /**
     * @return mixed
     */
    public static function render(){
        global $product;
      $header       = get_field('header', 'option');
        $args         = [
            'category__in'   => wp_get_post_categories(get_the_ID()),
            'posts_per_page' => 6,
            'post_type'      => 'product', // Ensures the post type is a product
            'post_status'    => 'publish', // Ensures the product is published
        ];
        $terms        = get_the_terms(get_the_ID(), 'product_cat');
        $list_product = new WP_Query($args);
        $terms_all    = get_terms([
            'taxonomy'   => 'product_cat',
            'hide_empty' => TRUE,
        ]);
        ?>
		<section class="products-details bg-white p-md-5 p-1">
			<div class="container bg-light">
				<div class="breadcrumbs d-block d-lg-none" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if (function_exists('bcn_display')){
                        bcn_display();
                    } ?>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-7">
								<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="main-img img-fluid">
							</div>
							<div class="col-md-5">
								<div class="breadcrumbs d-none d-lg-block" typeof="BreadcrumbList" vocab="https://schema.org/">
                                    <?php if (function_exists('bcn_display')){
                                        bcn_display();
                                    } ?>
								</div>
								<h1 class="products-name text-primary"><?php the_title() ?></h1>
								<p>Nhận báo giá cạnh tranh nhất: <?= $header['phones'] ?></p>
								<a href="tel:<?= $header['phone'] ?>" class="btn btn-primary p-2 ">Liên Hệ Tư Vấn</a>
								<hr class="text-black-50">
								<p>Danh mục:
                                    <?php foreach ($terms as $term): ?>
										<a href="<?= get_category_link($term->term_id) ?>"><?= $term->name ?></a>
                                    <?php endforeach; ?>
								</p>
								<div class="social-network">
									<a href="#" class="text-light social-network-icon"><i class='bx bxl-facebook '></i></a>
									<a href="#" class="text-light social-network-icon"><i class='bx bxl-twitter'></i></a>
									<a href="#" class="text-light social-network-icon"><i class='bx bxl-gmail'></i></a>
									<a href="#" class="text-light social-network-icon"><i class='bx bxl-pinterest'></i></a>
									<a href="#" class="text-light social-network-icon"><i class='bx bxl-linkedin-square'></i></a>
								</div>
							</div>
						</div>
						<ul class="nav nav-pills pt-5 pb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">MÔ TẢ</button>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show text-justify active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <?php the_content(); ?>
							</div>
						</div>
						<div class="card border bg-light mt-5">
							<div class="card-header p-2 bg-primary text-light">
								<i class='bx bx-abacus' aria-hidden="true"></i>
								<span>SẢN PHẨM TƯƠNG TỰ</span>
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
										<div class="item bg-white text-center">
											<a class="box-img" href="<?= $link ?>" title="<?= $title ?>">
												<img src="<?= $img ?>" alt="<?= $title ?>">
											</a>
											<div class="name p-2">
												<a class="text-decoration-none text-black" href="<?= $link ?>" title="<?= $title ?>">
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
					<div class="col-md-3 ps-3 aside">
						<div class="list-group">
							<div class="list-group-item list-group-item-action text-center active" aria-current="true">
								DANH MỤC SẢN PHẨM
							</div>
                            <?php foreach ($terms_all as $term): ?>
								<a href="<?= get_category_link($term->term_id) ?>" class="list-group-item list-group-item-action"><?= $term->name ?></a>
                            <?php endforeach; ?>
						</div>

					</div>
				</div>
			</div>
		</section>

        <?php
    }
}