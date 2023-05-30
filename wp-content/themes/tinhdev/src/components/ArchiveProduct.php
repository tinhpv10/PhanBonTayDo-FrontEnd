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
        ?>
		<div class="section-product archive-product products">
			<div class="container bg-light">
				<div class="box-title-breadcrumb">
					<h1 class="title-dancing text-center text-primary py-5">
                        <?php the_archive_title(); ?>
					</h1>
				</div>

				<div class="row p-md-4 p-2">
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
						<div class="col-md-3 col-6 p-2">
							<div class="item text-center">
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
        <?php

    }
}