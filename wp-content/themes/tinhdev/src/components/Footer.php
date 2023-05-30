<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class Footer extends Base implements BaseInterface{

    /**
     * @return mixed|void
     */
    public static function render(){
        $footer = get_field('footer', 'option');
        ?>
		<footer>
			<div class="container-fluid">
				<div class="container p-3 p-lg-5">
					<div class="row ">
						<div class="col-md-4">
							<span class="d-block text-center pb-4 fs-3 text-warning fw-semibold"><?= $footer['company_name'] ?></span>
							<p>
                                <?= $footer['description'] ?>
							</p>
						</div>
						<div class="col-md-4">
							<span class="d-block text-center pb-4 fs-3 text-warning fw-semibold">DANH MỤC SẢN PHẨM</span>
							<div class="row ps-3">
								<div class="col">
									<ul class="list-unstyled">
                                        <?php foreach ($footer['term'] as $term): ?>
											<li class="mb-3">
												<i class='bx bxs-right-arrow-alt' aria-hidden="true"></i>
												<a class="text-light text-decoration-none fs-6" href="<?= get_category_link($term->term_id) ?>"><?= $term->name ?></a>
											</li>
                                        <?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<span class="d-block text-center pb-4 fs-3 text-warning fw-semibold">LIÊN HỆ VỚI CHÚNG TÔI</span>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d984.2834377973364!2d105.966559!3d9.321415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a1a5ec92505a1b%3A0x553586623bd45c84!2zVkxYRCBUw5ROIE5I4buwQSBLSOG7nkkgVEjDgE5I!5e0!3m2!1sen!2sus!4v1677921955530!5m2!1sen!2sus" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="container p-2 p-md-5">
				<div class="footer-contact p-2 p-md-3">
					<?= $footer['address']??'' ?>
				</div>
			</div>
			<div class="container-fluid p-4 text-center">
				<div class="pay-icon">
					<i aria-hidden="true" class='bx bxl-visa fs-1 ps-1 pe-1 rounded-2'></i>
					<i aria-hidden="true" class='bx bxl-paypal fs-1 ps-1 pe-1 rounded-2'></i>
					<i aria-hidden="true" class='bx bxl-stripe fs-1 ps-1 pe-1 rounded-2'></i>
					<i aria-hidden="true" class='bx bxl-mastercard fs-1 ps-1 pe-1 rounded-2'></i>
					<i aria-hidden="true" class='bx bx-money fs-1 ps-1 pe-1 rounded-2'></i>
				</div>
				<div class="link p-3">
					<a href="#" class="text-decoration-none p-2">TRANG CHỦ</a>
					<a href="#" class="text-decoration-none p-2">GIỚI THIỆU</a>
					<a href="#" class="text-decoration-none p-2">CHÍNH SÁCH BẢO MẬT</a>
					<a href="#" class="text-decoration-none p-2">LIÊN HỆ</a>
				</div>
				<div class="contact text-center">
					<span class="d-block">Copyright 2023 &copy; <a href="#" class="text-decoration-none">Tôn Nhựa Khởi Thành</a></span>
					<br>
					<?= $footer['address_2'] ?>
				</div>
				<div class="bg-dark text-white d-flex flex-wrap justify-content-center">
					<span>Ngày: <?= do_shortcode('[wpstatistics stat=visitors time=today]') ?></span> &nbsp; | &nbsp;
					<span>Tuần: <?= do_shortcode('[wpstatistics stat=visitors time=week]') ?></span> &nbsp; | &nbsp;
					<span>Tổng: <?= do_shortcode('[wpstatistics stat=visitors time=total]') ?></span>
				</div>
			</div>
			<div class="fixed-bottom d-block d-md-none">
				<div class="row bg-opacity-75 bg-secondary">
					<?= $footer['phones']?>
				</div>
			</div>
		</footer>
    <?php }
}