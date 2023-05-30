<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class ArchiveProduct extends Base implements BaseInterface{

    /**
     * @return mixed|void
     */
    public static function render(){
		$product_page = get_field('product_page', 'option');
        ?>
		<div class="section-product archive-product">
			<div class="container">
				<div class="box-title-breadcrumb">
					<h1 class="title-dancing text-center text-primary py-5">
                        <?php the_archive_title(); ?>
					</h1>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<div class="list-product-archive d-flex flex-wrap">
                            <?php
                            $i = 1;
                            if (have_posts()): while (have_posts()) : the_post();
                                $ID      = get_the_ID();
                                $img     = get_the_post_thumbnail_url($ID, 'full');
                                $title   = get_the_title($ID);
                                $link    = get_permalink($ID);
                                $excerpt = get_the_excerpt($ID);
                                $terms   = get_the_terms($ID, 'product_cat');
                                ?>
								<div class="product-item w-100 border mb-5 d-flex flex-column  <?= $i % 2 == 0 ? 'flex-lg-row-reverse' : 'flex-lg-row' ?> ">
									<div class="box-img p-1">
										<a href="<?= $link ?>" title="<?= $title ?>">
											<img src="<?= $img ?>" alt="<?= $title ?>">
										</a>
									</div>

									<div class="info p-4 position-relative py-3">
										<span class="badge bg-secondary"><?= $terms[0]->name ?? "" ?></span>
										<h3 class="title mb-1">
											<a href="<?= $link ?>" title="<?= $title ?>">
                                                <?= $title ?>
											</a>
											<br>

										</h3>
										<div class="excerpt">
                                            <?= $excerpt ?>
										</div>
										<!-- Button trigger modal -->
										<button type="button" class="mt-3 btn btn-primary text-white rounded-0" data-bs-toggle="modal" data-bs-target="#nhan-bao-gia">
											Đăng ký nhận báo giá
										</button>
									</div>
								</div>
                                <?php
                                $i ++;
                            endwhile; ?>
								<div class="col-12 mt-5">
                                    <?php
                                    wp_pagenavi();
                                    ?>
								</div>
                            <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal rounded-0 fade" id="nhan-bao-gia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content rounded-0">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="exampleModalLabel">Đăng ký nhận tư vấn</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<?= do_shortcode(get_field('form_tu_van','option')) ?>
					</div>
				</div>
			</div>
		</div>
    <?php }
}