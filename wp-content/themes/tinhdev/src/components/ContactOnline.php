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
				<a href="tel:<?= $header['hotline'] ?>">
                    <?= $header['hotline'] ?? '' ?>
				</a>
			</div>
		</section>

    <?php }
}