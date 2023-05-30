<?php

namespace TinhDev\components;

use TinhDev\base\Base;
use TinhDev\base\BaseInterface;

class Policies extends Base implements BaseInterface{

    /**
     * @return mixed|void
     */
    public static function render(){
        $policies = get_field('policies', 'option');
        ?>
		<div class="policies mb-3">
			<div class="container bg-white">
				<div class="py-3">
					<div class="row">
                        <?php foreach ($policies as $policy): ?>
							<div class="col-6 col-lg-3">
								<div class="policy mb-3 mb-lg-0 d-flex align-items-center">
									<div class="box-icon">
										<img src="<?= $policy['icon']??'' ?>" alt="<?= $policy['icon']??'' ?>">
									</div>
									<div class="content">
										<?= $policy['content']??'' ?>
									</div>
								</div>
							</div>
                        <?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

        <?php
    }
}