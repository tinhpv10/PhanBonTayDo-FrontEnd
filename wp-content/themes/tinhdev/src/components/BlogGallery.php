<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class BlogGallery extends Base implements BaseInterface{

    public static function render(){
        $news_videos = get_field('news_videos', 'option');

        $args_post_vertical = [
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
                    'terms'    => $news_videos['post']->term_id,
                    'operator' => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                ]
            ]
        ];

        $list_posts_vertical = new WP_Query($args_post_vertical);

        ?>
		<div class="post-gallery py-5">
			<div class="container">
				<div class="row">
                    <?php if ($list_posts_vertical->have_posts()): ?>
						<div class="col-lg-6">
							<h2 class="title-dancing  text-primary my-3">
                                <?= $news_videos['post']->name ?>
							</h2>
							<div class="list-post list-post-vertical">
                                <?php
                                while ($list_posts_vertical->have_posts()):
                                    global $post;
                                    $list_posts_vertical->the_post();
                                    setup_postdata($post);
                                    $ID      = get_the_ID();
                                    $post    = setup_postdata($ID);
                                    $img     = get_the_post_thumbnail_url($ID, 'large');
                                    $title   = get_the_title($ID);
                                    $link    = get_permalink($ID);
                                    $excerpt = get_the_excerpt($ID);
                                    $date    = get_the_date('d-m-Y', $ID)
                                    ?>
									<div class="post-item d-flex flex-column flex-lg-row shadow bg-white mb-3 mb-lg-2">
										<div class="box-img">
											<a href="<?= $link ?>" title="<?= $title ?>"><img class="img-fluid" width="320" height="190" src="<?= $img ?>" alt="<?= $title ?>"></a>
										</div>
										<div class="info p-3">
											<h3 class="title mb-0">
												<a href="<?= $link ?>" title="<?= $title ?>"><?= $title ?></a>
											</h3>
											<p class="date"><?= $date ?></p>
											<p class="expert"><?= $excerpt ?></p>
										</div>
									</div>
                                <?php
                                endwhile;
                                wp_reset_query();
                                wp_reset_postdata();
                                ?>
							</div>
						</div>
                    <?php endif; ?>
                    <?php if (!empty($news_videos['videos'])):
                        $list_video = $news_videos['videos'];
                        ?>
						<div class="col-lg-6">
							<h2 class="title-dancing text-primary my-3">
								Videos </h2>

							<div class="list-videos list-videos-slider-for ">
                                <?php foreach ($list_video as $video): ?>
									<div class="slick-video-item">
										<a data-fancybox data-type="iframe" href="<?= $video['video'] ?>">
											<div class="video-item">
												<img src="<?= $video['image'] ?>" alt="">
											</div>
										</a>
									</div>
                                <?php endforeach; ?>
							</div>

							<div class="list-videos list-videos-slider-nav">
                                <?php foreach ($list_video as $video): ?>
									<div class="slick-video-item">
										<div class="video-item">
											<img src="<?= $video['image'] ?>" alt="">
										</div>
									</div>
                                <?php endforeach; ?>
							</div>
						</div>
                    <?php endif; ?>
				</div>
			</div>
		</div>
        <?php
    }
}