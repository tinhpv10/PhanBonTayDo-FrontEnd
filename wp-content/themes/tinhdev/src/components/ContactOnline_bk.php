<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class ContactOnline extends Base implements BaseInterface{

    public static function render(){
        $header = get_field('header_footer', 'option');

        ?>
		<section class="contact-online">
			<div class="button-contact">
				<a href="javascript:;" id="contact-button">
					<img src="<?= parent::$template_directory_uri ?>/images/contact-icon.png" alt="Liên hệ">
				</a>
			</div>
			<div class="box-contact" id="form-contact">
				<div class="title bg-danger text-white text-center py-3">
					LIÊN HỆ
					<br>
                    <?= $header['hotline'] ?>
					<a href="javascript:;" class="close-contact-button" id="close-contact-button">
						<i class="fa-solid fa-xmark" aria-hidden="true"></i>
					</a>

				</div>
				<div class="p-3">
					<p class="text-center">Vui lòng nhập thông tin!</p>
                    <?= do_shortcode('[gravityform id="1" title="false" description="false"]') ?>
				</div>
			</div>

		</section>

    <?php }
}