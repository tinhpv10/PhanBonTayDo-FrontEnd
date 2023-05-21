<section>
    <div class="container-fluid p-4" style="background: url('<?= ASSETS ?>/images/rau2.jpg')">
	    <div class="blogs text-center">
			<h4 class="text-light fs-2 fw-semibold">Tin Tức</h4>
		    <nav aria-label="breadcrumb" class="d-flex justify-content-center">
			    <ol class="breadcrumb mt-3 mt-sm-0 text-center">
				    <li class="breadcrumb-item"><a href="#" class="text-light">TRANG CHỦ</a></li>
				    <li class="breadcrumb-item active text-light" aria-current="page">TIN TỨC</li>
			    </ol>
		    </nav>
	    </div>
    </div>
	<div class="content mt-5">
		<div class="container">
			<div class="title text-left">
				<h4 class="fs-title  fw-bold">Tin tức</h4>
			</div>
			<div class="blogs-box row">
				<?php
				for ($i = 0 ; $i < 11 ; $i++) {
					?>
					<div class="item-slider col-lg-3 col-md-4 col-sm-6 col-10">
						<div class="item position-relative">
							<div class="item-images">
								<a href="#"><img src="<?= ASSETS ?>/images/anh 2.jpg" alt="hoa-sinh-nhat-gia-re-quan-tan-binh" class="img-fluid"></a>
							</div>
							<h2 class="item-name">
								<a href="">
									Tập đoàn nông nghiệp Con Cò Vàng Hi-Tech được vinh danh Top 10 Thương hiệu xuất sắc châu Á.
								</a>
							</h2>
							<p class="item-description p-2 pl-md-0">
								Chào mừng Ngày Giải phóng miền Nam 30/4 và ngày Quốc tế lao động 1/5, Tập đoàn nông nghiệp Con Cò Vàng Hi-Tech xin trân trọng thông báo lịch nghỉ...
							</p>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<nav aria-label="Page navigation example" class="navigation">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link active" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</section>
