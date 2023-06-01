<div class="container home-news py-5">
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand title-section" href="#">
				<span>TIN TỨC</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="title-news collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">Khuyến mãi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Giới thiệu sản phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Kinh nghiệm & Mẹo vặt</a>
					</li>
				</ul>
				<span class="navbar-text">
                    <a class="nav-link" href="#">
                        <b>Xem tất cả </b>
                        <i class='bx bx-chevron-left bx-rotate-180 pb-2'></i>
                    </a>
                </span>
			</div>
		</div>
	</nav>
	<div class="container-fluid mt-4">
		<div class="box-news">
			<div class="row">
				<div class="content-left col-lg-5 col-md-auto">
					<figure class="figure vertical-post mb-3">
						<div class="box-img">
							<img src="../assets/images/flowers-banner-large-min.jpg" class="figure-img img-fluid w-100" alt="image">
						</div>
						<figcaption class="figure-caption text-justify">
							<div class="icon py-3 row row-cols-auto">
								<div class="col-4">
									<strong class='bx bx-calendar-alt'></strong>
									12/08/2022
								</div>
								<div class="col-4">
									<i class='bx bxs-user-circle'></i>
									Minh Hậu
								</div>
								<div class="col-4">
									<i class='bx bxs-show'></i>
									Xem: 20
								</div>
							</div>
							<h2 class="title">
								Phát triển nông nghiệp hữu cơ, nông dân cần doanh nghiệp chung tay "gánh vác" </h2>
							<div class="content">DNVN - Phó Giám đốc Sở Nông nghiệp và Phát triển nông thôn Cần Thơ Trần Thái Nghiêm cho rằng: “Phát triển sản xuất nông nghiệp nói chung và sản xuất nông nghiệp theo hướng hữu cơ đòi hỏi cần thiết là nông dân phải gắn”.
							</div>
						</figcaption>
					</figure>
				</div>

				<div class="content-right col-lg-7 col-md-auto">
                    <?php for ($i = 0; $i < 3; $i ++): ?>
						<div class="row horizontal-post mb-3">
							<div class="col-lg-5 col-md-auto">
								<figure class="figure box-img">
									<img src="../assets/images/flowers-banner-large-min.jpg" class="figure-img img-fluid" alt="image">
								</figure>
							</div>
							<div class="col-lg-7 col-md-12">
								<h3 class="title pb-1">
									<a href="">
										Tầm quan trọng của việc sử dụng phân hữu cơ trong "cơn bão" giá vật tư nông nghiệp hiện nay
									</a>
								</h3>
								<div class="expert mt-0">
									Trong bối cảnh dịch bệnh COVID-19, tất cả các mặt hàng đang đối mặt với sự leo thang giá cả, vật tư nông nghiệp cũng không ngoại lệ. Phân bón và thuốc bảo vệ thực vật,...
								</div>
								<div class="figure-caption">
									<div class="icon my-3 row row-cols-auto">
										<div class="col-4">
											<i class='bx bx-calendar-alt'></i>
											12/08/2022
										</div>
										<div class="col-4">
											<i class='bx bxs-user-circle'></i>
											Minh Hậu
										</div>
										<div class="col-4">
											<i class='bx bxs-show'></i>
											Xem: 20
										</div>
									</div>
								</div>
							</div>
						</div>
                    <?php endfor; ?>
				</div>
			</div>
		</div>
	</div>

</div>