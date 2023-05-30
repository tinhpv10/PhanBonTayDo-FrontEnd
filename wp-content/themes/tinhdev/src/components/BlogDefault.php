<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class BlogDefault extends Base implements BaseInterface{

    public static function render(){
        $posts = get_field('posts', 'option');
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
                    'terms'    => $posts->term_id,
                    'operator' => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                ]
            ]
        ];
        $list_posts = new WP_Query($argsPost);
        if ($list_posts->have_posts()):
            ?>
			<section class="section-blog bg-light py-5">
				<div class="container">
					<h5 class="title-extra-large text-center mb-0">
                        <?= $posts->name ?? 'TIN TỨC' ?>
					</h5>
					<div class="list-post row">
                        <?php
                        while ($list_posts->have_posts()) :
                            global $post;
                            $list_posts->the_post();
                            setup_postdata($post);
                            $ID    = get_the_ID();
                            $post  = setup_postdata($ID);
                            $img   = get_the_post_thumbnail_url($ID, 'large');
                            $title = get_the_title($ID);
                            $link  = get_permalink($ID);
                            ?>
							<div class="col-sm-6 col-lg-4">
								<div class="post-item mb-3">
									<div class="box-img"><a href="<?= $link ?>" title="<?= $title ?>">
										<img class="w-100" src="<?= $img ?>" alt="<?= $title ?>"> </a>
									</div>
									<div class="information p-3 shadow">
										<h3 class="title">
											<a href="<?= $link ?>" title="<?= $title ?>"><?= $title ?> </a>
										</h3>
										<a href="<?= $link ?>" title="<?= $title ?>" class="text-danger view-more">Xem thêm
											<i aria-hidden="true" class="fa-solid fa-angles-right"></i></a>
									</div>
								</div>
							</div>
                        <?php
                        endwhile;
                        ?>

						<div class="view-all text-center ">
							<a href="<?= get_category_link($posts->term_id) ?>" class="btn btn-danger text-white rounded-0">XEM TẤT CẢ</a>
						</div>
					</div>
				</div>
			</section>
        <?php
        endif;
    }
}