<section class="section-product">
	<div class="container-xl">
		<div class="banner-product">
			<img class="w-100" src="../assets/images/ban-chay_586_1200_1.svg" alt="Responsive image">
		</div>
	</div>
	<div class="container-xl">
		<div class="bg-secondary rounded-3 p-3">
			<div class="py-3 d-flex flex-column flex-lg-row align-items-center justify-content-between">
				<h3 class="text-dark mb-0 title">SẢN PHẨM NỔI BẬT</h3>
				<ul class="list-categories d-none d-lg-flex justify-content-lg-end align-content-lg-center">
					<li>
						<a class="btn-category btn btn-light rounded-pill mx-1" href="">Sản phẩm HOT</a>
					</li>
					<li>
						<a class="btn-category btn btn-light rounded-pill mx-1" href="">Sản phẩm mua nhiều</a>
					</li>
					<li>
						<a class="btn-category btn btn-light rounded-pill mx-1" href="">Sản phẩm mới</a>
					</li>
				</ul>
			</div>
			<ul class="list-categories-mobile mb-3">
				<li>
					<a class="btn-category btn btn-light rounded-pill mx-1" href="">Sản phẩm HOT</a>
				</li>
				<li>
					<a class="btn-category btn btn-light rounded-pill mx-1" href="">Sản phẩm mua nhiều</a>
				</li>
				<li>
					<a class="btn-category btn btn-light rounded-pill mx-1" href="">Sản phẩm mới</a>
				</li>
			</ul>
			<div class="list-product">
                <?php
                for ($i = 0; $i < 10; $i ++){
                    ?>
					<div class="card mt-1 product-item">
						<div class="box-img p-1">
							<img src="/assets/images/bo-hong-do.jpg" class="card-img-top" alt="...">
						</div>
						<div class="card-body">
							<h5 class="card-title">
								<a href="">
									Phân bón lá SITTO FOPRO 20-20-20
								</a>
							</h5>
							<div class="reviews">
								<ul class="stars">
									<li><i class='bx bxs-star'></i></li>
									<li><i class='bx bxs-star'></i></li>
									<li><i class='bx bxs-star'></i></li>
									<li><i class='bx bxs-star'></i></li>
									<li><i class='bx bx-star'></i></li>
								</ul>
								<span>(99)</span>
							</div>
							<div class="d-flex justify-content-between price-custom">
								<del>100.000đ</del>
								<span class="bg-secondary text-center text-dark sale rounded-pill">-20%</span>
							</div>
							<div class="price-product">
								<ins>800.000đ</ins>
							</div>
							<div class="product-footer ">
								<div class="d-flex justify-content-between align-items-center">
									<a class="text-decoration-none text-primary" href=""><i class='bx bx-plus-circle'></i> So sánh</a>
									<a class="text-primary btn-cart" href=""><i class='bx bxs-cart-alt'></i></a>
								</div>
							</div>
						</div>
					</div>
                    <?php
                }
                ?>
			</div>
		</div>
	</div>
</section>
