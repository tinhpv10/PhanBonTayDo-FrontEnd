<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;
use WP_Query;

class SingleProduct extends Base implements BaseInterface
{

    /**
     * @return mixed
     */
    public static function render()
    {
        global $product;
        $header = get_field('single_product', 'option');
        $data_name = get_field('data_name');
        $args = [
            'category__in' => wp_get_post_categories(get_the_ID()),
            'posts_per_page' => 6,
            'post_type' => 'product', // Ensures the post type is a product
            'post_status' => 'publish', // Ensures the product is published
        ];
        $terms = get_the_terms(get_the_ID(), 'product_cat');
        $list_product = new WP_Query($args);
        $terms_all = get_terms([
            'taxonomy' => 'product_cat',
            'hide_empty' => TRUE,
        ]);
        ?>
        <section class="products-details bg-white p-md-5 p-1">
            <div class="container bg-light">
                <div class="breadcrumbs d-block" typeof="BreadcrumbList" vocab="https://schema.org/">

                    <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="img-single">
                            <div class="item-single"><img src="<?= get_the_post_thumbnail_url() ?>"
                                                          alt="<?php the_title() ?>" class="main-img img-fluid"></div>
                            <div class="item-single"><img src="<?= get_the_post_thumbnail_url() ?>"
                                                          alt="<?php the_title() ?>" class="main-img img-fluid"></div>
                            <div class="item-single"><img src="<?= get_the_post_thumbnail_url() ?>"
                                                          alt="<?php the_title() ?>" class="main-img img-fluid"></div>
                            <div class="item-single"><img src="<?= get_the_post_thumbnail_url() ?>"
                                                          alt="<?php the_title() ?>" class="main-img img-fluid"></div>
                            <div class="item-single"><img src="<?= get_the_post_thumbnail_url() ?>"
                                                          alt="<?php the_title() ?>" class="main-img img-fluid"></div>
                        </div>

                        <div class="slider-images">
                            <div class="box-slider">
                                <div class="item"><img src="<?= get_the_post_thumbnail_url() ?>"></div>
                                <div class="item"><img src="<?= get_the_post_thumbnail_url() ?>"></div>
                                <div class="item"><img src="<?= get_the_post_thumbnail_url() ?>"></div>
                                <div class="item"><img src="<?= get_the_post_thumbnail_url() ?>"></div>
                                <div class="item"><img src="<?= get_the_post_thumbnail_url() ?>"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="breadcrumbs d-none d-lg-block" typeof="BreadcrumbList" vocab="https://schema.org/">
                        </div>
                        <h1 class="products-name"><?php the_title() ?></h1>
                        <div class="row product-brand">
                            <div class="col-lg-6">
                                <p class="name-brand">Thương hiệu:</p>
                                <p class="content-brand"><?= $data_name['name_brand'] ?? '' ?></p>
                            </div>
                            <div class="col-lg-6">
                                <p class="name-brand">Mã sản phẩm:</p>
                                <p class="content-brand">
                                    <?php echo get_post_meta(get_the_ID(), '_sku', true) ?>
                                </p>
                            </div>
                        </div>

                        <div class="top-product">
                            <p class="name-top">Đứng thứ 1 trong:</p>
                            <p class="content-top">
                                <?= $data_name['top_product'] ?? '' ?>
                            </p>
                        </div>
                        <div class="review-star">
                            <div class="star">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <p class="number-star">(405)</p>
                            <div class="compare">
                                <i class='bx bx-plus-circle'></i>
                                <p class="content">So sánh</p>
                            </div>
                        </div>

                        <div class="price-product">
                            <b class="original-price"><?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?>
                                đ</b>
                            <del
                                class="reduced-price"><?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?>
                                đ
                            </del>
                            <div class="percent">10%</div>
                        </div>
                        <div class="mass-product">
                            <h3>Khối lượng:</h3>
                            <div class="mass"><?php echo get_post_meta(get_the_ID(), '_weight', true) ?? '0' ?>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" method="post" class="cart">
                            <div class="quantity"><label>Số lượng: </label>

                                <input type="number" size="4"
                                       class="input-text qty text" title="SL"
                                       value="1" name="quantity" min="1"
                                       step="1">
                                <button type="button" class="plus">+</button>
                                <button type="button" class="minus">-</button>

                            </div>
                            <input type="hidden" value="<?php echo $vnid = the_ID(); ?>" name="add-to-cart">
                            <input type="hidden" value="<?php echo $vnid = the_ID(); ?>" name="buy-now">
                            <div class="button-add">
                                <?php do_action('woocommerce_after_add_to_cart_button') ?>
                                <button class="add-cart single_add_to_cart_button alt" type="submit">THÊM VÀO GIỎ HÀNG
                                </button>
                            </div>
                        </form>
                        <!--                       --><?php //wc_get_gallery_image_html();
                        ?>
                        <div class="add-phone">
                            <p>Gọi đặt mua: <a
                                    href="tel:<?= $header['phone'] ?>"><?= $header['phone'] ?? '' ?></a>(<?= $header['time_start'] ?? '' ?>
                                - <?= $header['time_end'] ?? '' ?>)</p>
                        </div>
                    </div>
                </div>

                <div class="describe-product">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <div class="button-category" id="boxId">
                                <button class="btn box-click active" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"><img src="<?= $header['img_icon_1']['url'] ?>" alt="">
                                </button>
                                <button class="box-click" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="<?= $header['img_icon_2']['url'] ?>" alt="">
                                </button>
                                <button class="box-click" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"><img src="<?= $header['img_icon_3']['url'] ?>" alt="">
                                </button>
                                <button class="box-click" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4"><img src="<?= $header['img_icon_4']['url'] ?>" alt="">
                                </button>
                            </div>
                            <div class="button-category">
                                <div class="box-content"><p>Điểm nổi bật</p></div>
                                <div class="box-content"><p>Hình ảnh sản phẩm</p></div>
                                <div class="box-content"><p>Thành phần </p></div>
                                <div class="box-content"><p>Thông tin sản phẩm</p></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6"></div>
                    </div>
                </div>


                <div class="row show-content" id="info-product">
                    <!--                    Modal Nổi bật sản phẩm-->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <h1>Tab Nổi bật</h1>
                            </div>
                        </div>
                    </div>
                    <!--                    Modal hình ảnh sản phẩm-->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                               <h1>Tab hình ảnh</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <ul class="nav nav-pills pt-5 pb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Thông tin sản phẩm
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show text-justify active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
<!--                    Modal thông tin sản phẩm-->
                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <ul class="nav nav-pills pb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                                aria-selected="true">Thông tin sản phẩm
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show text-justify active p-2" id="pills-home" role="tabpanel"
                                         aria-labelledby="pills-home-tab">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <ul class="nav nav-pills pt-5 pb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Thành phần
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show text-justify active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <table class="table table-striped">
                                    <tbody>
                                    <?php if (!empty($data_name['add_ingre'])): ?>
                                        <?php foreach ($data_name['add_ingre'] as $ingre): ?>
                                            <tr>
                                                <td><?= $ingre['name_ingre'] ?></td>
                                                <td colspan="2"><?= $ingre['capacity_ingre'] ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--                    Modal thanh phan sản phẩm-->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <ul class="nav nav-pills pb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                                aria-selected="true">Thành phần
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show text-justify active" id="pills-home" role="tabpanel"
                                         aria-labelledby="pills-home-tab">
                                        <table class="table table-striped">
                                            <tbody>
                                            <?php if (!empty($data_name['add_ingre'])): ?>
                                                <?php foreach ($data_name['add_ingre'] as $ingre): ?>
                                                    <tr>
                                                        <td><?= $ingre['name_ingre'] ?></td>
                                                        <td colspan="2"><?= $ingre['capacity_ingre'] ?></td>
                                                        <td></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-manual mt-3">
                    <h3 class="title">Hướng dẫn sử dụng <?php the_title() ?></h3>
                <table class="table table-bordered text-center box-manual center-block ">
                    <thead>
                    <tr>
                        <th scope="col">CÂY TRỐNG</th>
                        <th scope="col">GIAI ĐOẠN</th>
                        <th scope="col">LIỀU LƯỢNG</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($data_name['product_manual'])): ?>
                        <?php foreach ($data_name['product_manual'] as $manual): ?>
                            <tr>
                                <td class="name d-table-cell align-middle"><?= $manual['type_crops'] ?><i>(<?= $manual['name_crops'] ?>)</i></td>
                                <td class="d-table-cell align-middle"><?= $manual['stage_crops'] ?></td>
                                <td class="d-table-cell align-middle"><?= $manual['amount_crops'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
                </div>
                <div class="card border bg-light mt-5">
                    <div class="card-header p-2 text-light">
                        <i class='bx bx-abacus' aria-hidden="true"></i>
                        <span>SẢN PHẨM TƯƠNG TỰ</span>
                    </div>
                    <div class="row p-md-4 p-2">
                        <?php
                        while ($list_product->have_posts()) : $list_product->the_post();
                            $ID = get_the_ID();
                            $img = get_the_post_thumbnail_url($ID,'full');
                            $title = get_the_title($ID);
                            $link = get_permalink($ID);
                            $price_sale = get_post_meta(get_the_ID(), '_sale_price', true);
                            $price = get_post_meta(get_the_ID(), '_regular_price', true);
                            ?>
                            <div class="col-md-3 col-6 p-2">
                                <div class="item bg-white text-center">
                                    <a class="box-img" href="<?= $link ?>" title="<?= $title ?>">
                                        <img src="<?= $img ?>" alt="<?= $title ?>">
                                    </a>
                                    <div class="name p-2">
                                        <a class="text-decoration-none text-black" href="<?= $link ?>"
                                           title="<?= $title ?>">
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
    }

}

