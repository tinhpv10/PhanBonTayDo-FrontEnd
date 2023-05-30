<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class Customers extends Base implements BaseInterface{

    public static function render(){
        $customers = get_field('customers', 'option');
        if (!empty($customers['feeling'])):
            ?>
			<div class="customer" style="background-image: url(<?= $customers['background'] ?>)">
				<div class="container">
					<h3 class="title-dancing text-center"><?= $customers['title'] ?></h3>
					<div class="customer-feeling">
                        <?php foreach ($customers['feeling'] as $feel): ?>
                        <div class="box-slick py-5">
	                        <div class="box-feeling position-relative">
		                        <div class="circle-animate">
			                        <div class="circle"></div>
			                        <div class="circle"></div>
			                        <div class="circle"></div>
			                        <div class="circle"></div>
		                        </div>
		                        <div class="content">
			                        <h3 class="title"><?= $feel['name'] ?></h3>
			                        <div class="detail"><?= $feel['detail'] ?></div>
		                        </div>
	                        </div>
                        </div>

                        <?php endforeach; ?>
					</div>
				</div>
			</div>
        <?php
        endif;
    }
}