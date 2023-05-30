<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use TinhDev\components\Sidebar;

class Archive extends Base implements BaseInterface{

    /**
     * @return mixed
     */
    public static function render(){ ?>
		<div class="title-breadcrumb py-2 bg-light">
			<div class="container">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if (function_exists('bcn_display')){
                        bcn_display();
                    } ?>
				</div>
			</div>
		</div>
		<div class="archive bg-white py-5">
			<div class="box-title-breadcrumb">
				<h1 class="title-dancing text-center">
                    <?php the_archive_title(); ?>
				</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
                            <?php if (have_posts()): while (have_posts()) :
                                the_post();
                                $ID      = get_the_ID();
                                $img     = get_the_post_thumbnail_url($ID, 'large');
                                $title   = get_the_title($ID);
                                $link    = get_permalink($ID);
                                $excerpt = get_the_excerpt($ID);
                                $date    = get_the_date('d M', $ID);
                                ?>
								<div class="post-item-archive d-flex flex-column flex-lg-row align-items-center mb-5">
                                    <?php if (!empty($img)): ?>
										<div class="box-img position-relative">
											<div class="date">
                                                <?= $date ?>
											</div>
											<a href="<?= $link ?>" title="<?= $title ?>">
												<img class="img-fluid" width="320" height="190" src="<?= $img ?>" alt="<?= $title ?>">
											</a>
										</div>
                                    <?php endif; ?>
									<div class="info mb-3 p-3">
										<h3 class="title">
											<a class="viewmore" href="<?= $link ?>" title="<?= $title ?>"><?= $title ?></a>
										</h3>
										<p class="expert"><?= $excerpt ?></p>
										<a class="viewmore" href="<?= $link ?>" title="<?= $title ?>">Xem thêm
											<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
									</div>
								</div>
                            <?php endwhile;
                                wp_pagenavi();
                            else: ?>
								<div class="alert alert-warning alert-dismissible show margin-top-10">
									Danh mục
									<strong><?= get_the_archive_title() ?></strong> đang được cập nhật. Vui lòng quay lại sau.
								</div>
                            <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php
    }
}