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
		<h2 class="title-section title-section-normal d-flex justify-content-between align-items-center">
			<span>SẢN PHẨM BÁN CHẠY</span><a href="">Xem tất cả >></a>
		</h2>
        <div class="row">
            <?php for($i = 0; $i < 8; $i++): ?>
            <div class="col-3 justify-content-between product-list card-prod">
                <div class="card" style="width: 18rem;">
                    <img src="https://nongnghiepdep.com/wp-content/uploads/2023/04/green-forever.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">Mã SP: KOBE</p>
                        <h6 class="card-title">
                            <a class="text-decoration-none name-prod" href="#">Green Forever - Stronger Thrive 2 Trong 1</a>
                        </h6>
                        <p class="card-text">Chỉ từ: <span>115.000đ</span></p>
                        <a href="#" class="btn btn-primary">Đặt Mua</a>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
	</div>
</section>