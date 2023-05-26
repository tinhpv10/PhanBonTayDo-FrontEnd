<div class="container news-home">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand mt-1" href="#">
                <h4><b>TIN TỨC</b></h4>
            </a>

            <div class="title-news collapse navbar-collapse"  >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Khuyến mãi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Giới thiệu sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Kinh nghiệm & Mẹo vặt</a>
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
<!--   CONTENT TITLE-->
    <div class="container-fluid  mt-4">
<!--        CONTENT LEFT-->
        <div class="box-news row">
            <div class="content-left col-lg-5 col-md-auto">
                <figure class="figure">
                    <img src="../assets/images/home-news1.svg" class="figure-img img-fluid " style="width: 100%;" alt="image">
                    <figcaption class="figure-caption">
                        <div class="icon row row-cols-auto text-secondary">
                            <div class="col-md-3 col-md-2 ">
                                <i class='bx bx-calendar-alt' ></i>
                                12/08/2022
                            </div>
                            <div class="col-md-3 col-md-2">
                                <i class='bx bxs-user-circle'></i>
                                Minh Hậu
                            </div>
                            <div class="col-md-3 col-md-2">
                                <i class='bx bxs-show' ></i>
                                Lượt xem: 20
                            </div>
                        </div>
                        <div class="title mt-2 text-secondary">
                            <strong>
                                Phát triển nông nghiệp hữu cơ, nông dân cần doanh nghiệp chung tay "gánh vác"
                            </strong>
                        </div>
                        <div class="content mt-2 text-secondary">
                            <p>DNVN - Phó Giám đốc Sở Nông nghiệp và Phát triển nông thôn Cần Thơ Trần Thái Nghiêm cho rằng: “Phát triển sản xuất nông nghiệp nói chung và sản xuất nông nghiệp theo hướng hữu cơ đòi hỏi cần thiết là nông dân phải gắn”.</p>
                        </div>
                    </figcaption>
                </figure>
            </div>
<!--            CONTENT RIGHT-->
            <div class="content-right col-lg-7  col-md-auto">
                <?php for ($i = 0; $i < 3; $i ++): ?>
                <div class="row">
                    <div class="col-lg-4 col-md-auto">
                        <figure class="figure">
                            <img src="../assets/images/home-news1.svg" class="figure-img img-fluid" alt="image">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="title-right pb-1">
                            <strong>
                                Tầm quan trọng của việc sử dụng phân hữu cơ trong "cơn bão" giá vật tư nông nghiệp hiện nay
                            </strong>
                        </div>
                        <div class="content-right mt-0" >
                            <p class="lh-sm">
                                Trong bối cảnh dịch bệnh COVID-19, tất cả các mặt hàng đang đối mặt với sự leo thang giá cả, vật tư nông nghiệp cũng không ngoại lệ. Phân bón và thuốc bảo vệ thực vật,...
                            </p>
                        </div>
                        <figcaption class="figure-caption">
                            <div class="icon row row-cols-auto text-secondary">
                                <div class="col-md-3 col-md-2 ">
                                    <i class='bx bx-calendar-alt' ></i>
                                    12/08/2022
                                </div>
                                <div class="col-md-3 col-md-2">
                                    <i class='bx bxs-user-circle'></i>
                                    Minh Hậu
                                </div>
                                <div class="col-md-3 col-md-2">
                                    <i class='bx bxs-show' ></i>
                                    Lượt xem: 20
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

</div>