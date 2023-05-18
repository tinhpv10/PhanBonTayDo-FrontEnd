<?php
$images = [
    'https://nhuathongminh.com/uploads/images/tam-nhua-thong-minh-3mm-shopping.jpg',
    'https://nhuathongminh.com/uploads/images/san-pham/nhua-thong-minh-poly-dac/nhuathongminh-solide-3ly6-vinlite.jpg',
    'https://nhuathongminh.com/uploads/images/nhuathongminh-4ly8-mau-shopping.jpg',
    'https://nhuathongminh.com/uploads/images/nhua-thong-minh-5mm-poly-vinlite-shopping.jpg',
    'https://nhuathongminh.com/uploads/images/nhua-thong-minh-6ly-vinlite-shopping.jpg',
    'https://nhuathongminh.com/uploads/images/san-pham/nhua-thong-minh/nhua-thong-minh-12mm.jpg',
    'https://nhuathongminh.com/uploads/images/tam-nhua-thong-minh-3mm-shopping.jpg',
    'https://nhuathongminh.com/uploads/images/san-pham/nhua-thong-minh-poly-dac/nhuathongminh-solide-3ly6-vinlite.jpg',
    'https://nhuathongminh.com/uploads/images/nhuathongminh-4ly8-mau-shopping.jpg',
    'https://nhuathongminh.com/uploads/images/nhua-thong-minh-5mm-poly-vinlite-shopping.jpg'
]
?>
<section class="section-products">
	<div class="container">
		<h2 class="title-section d-flex justify-content-between align-items-center">
			<span>NHỰA THÔNG MINH POLYCARBONATE ĐẶC</span><a href="">Xem tất cả</a>
		</h2>
		<div class="d-flex flex-wrap justify-content-between product-list">
            <?php for ($i = 0; $i < 10; $i ++): ?>
				<div class="product-item">
					<div class="box-img">
						<a href="">
							<img src="<?= $images[$i] ?>" alt="">
						</a>
					</div>
					<div class="box-info text-center p-3">
						<h3 class="title-product">
							<a class="text-decoration-none" href="">Nhựa thông minh đặc 1.6 ly</a>
						</h3>
						<a href="" class="btn text-white btn-sm btn-primary">Mua hàng</a>
					</div>
				</div>
            <?php endfor; ?>
		</div>
	</div>
</section>