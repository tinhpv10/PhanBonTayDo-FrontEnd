<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class TopCategories extends Base implements BaseInterface{

    public static function render(){
        $taxonomies   = get_field('taxonomy', 'option');
        if (!empty($taxonomies)):

            ?>
			<section class="top-categories py-5 bg-white">
				<div class="container">
					<h5 class="title-extra-large text-center mb-0">
						SẢN PHẨM </h5>
					<div class="list-categories d-flex flex-wrap">
                        <?php foreach ($taxonomies as $taxonomy):
                            if ($taxonomy->name != 'Chưa phân loại'):
                                $thumbnail_id = get_term_meta($taxonomy->term_id, 'thumbnail_id',
                                    TRUE);
                                $image = wp_get_attachment_url($thumbnail_id);
                                ?>
								<div class="category my-3 text-center">
									<a href="<?= get_category_link($taxonomy->term_id) ?? '#' ?>" title="<?= $taxonomy->name ?? '' ?>">
										<img src="<?= $image ?? '' ?>" alt="<?= $taxonomy->name ?? '' ?>">
									</a>

									<div class="title text-center fs-1">
										<a href="<?= get_category_link($taxonomy->term_id) ?? '#' ?>" title="<?= $taxonomy->name ?? '' ?>">
                                            <?= $taxonomy->name ?? '' ?>
										</a>
									</div>
								</div>
                            <?php
                            endif;
                        endforeach; ?>
					</div>

					<div class="text-center mt-3">
						<a class="btn btn-primary rounded-0 text-white" href="<?= get_permalink(wc_get_page_id('shop')) ?>">Xem toàn bộ sản phẩm</a>
					</div>
				</div>
			</section>
        <?php
        endif;
    }
}