<section class="container-news">
    <div class="container">
        <p class="text-start">Trang chủ / <span> Tin tức</span></p>
        <div class="row">
            <div class="col-8">
                <!--                List posts -->
                <?php
                    for ($i = 0; $i < 4; $i ++){
                ?>
                <div class="container-content mt-2 rounded p-3 border">
                    <div class="content-post">
                        <div class="title-post">
                            <h5>Phát triển nông nghiệp hữu cơ, nông dân cần nông nghiệp chung tay "gánh vác"</h5>
                        </div>
                        <p>DNVN - Phó giám đốc nông nghiệp và phát triển nông thôn Cần Thơ Trần Thái Nghiêm cho rằng:
                            "Phát triển sản xuất nông nghiệp nói chung
                            và sản xuất nông nghiệp theo hướng hữu cơ đòi hỏi cần thiết..."</p>
                        <div class="box-share">
                            <a href="#" class="text-decoration-none"><i class="fa-solid fa-arrow-up-from-bracket"></i>
                                Chia sẻ</a>
                            <span class="day float-end">11/10/2023</span>
                        </div>
                    </div>
                    <div class="img-post justify-content-end">
                        <img src="assets/images/image_94.png" alt="Hình ảnh" width="195" height="160">
                    </div>
                </div>
                <?php } ?>
                <!--                Pagination -->
                <div class="pagination mt-5 me-5 float-end">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">...</a>
                    <a href="#">&raquo;</a>
                </div>
                <!--                Slick post -->
                <div class="container-related-post">
                    <div class="title-related-post">
                        <h5><i class='bx bxs-leaf'></i> Bài viết có liên quan</h5>
                    </div>
                    <div class="box-related-post d-flex">
                        <?php for($i = 0; $i < 1; $i++){ ?>
                        <div class="card-post p-3 border rounded d-flex">
                            <div class="content-card-post">
                                <div class="title-card-post">
                                    <h5 >Phân bón có tác dụng gì?</h5>
                                </div>
                                <p>"Nhất nước nhì phân, tam cần, tứ giống" - Câu tục ngữ quen thuộc của nhà nông
                                    nên 4 yếu tố</p>
                                <div class="box-share">
                                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-arrow-up-from-bracket"></i>
                                        Chia sẻ</a>
                                    <span class="day float-end">11/10/2023</span>
                                </div>
                            </div>
                            <div class="img-post justify-content-end">
                                <img src="assets/images/image_94.png" alt="Hình ảnh" width="195" height="160">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!--                End carousel post-->
            </div>
            <!--                Category aside -->
            <div class="container-aside col-4">
                <div class="container-category">
                    <div class="category-title">
                        <h4>Danh mục dành cho bạn</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="#">Tin Tức Nổi Bật</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Kỹ Thuật Nông Nghiệp</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Tin Tức Hôm Nay</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Kiến Thức Phân Bón</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Tin Tức Khác</a>
                        </li>
                    </ul>
                    <div class="container-weather rounded border mt-5">
                        <!--                        Weather location-->
                        <div class="container-weather p-4">
                            <div class="container-title">
                                <span>Cần Thơ<i class='bx bx-crosshair float-end mt-1'></i></span>
                            </div>
                            <hr>
                            <div class="container-content-weather d-flex">
                                <div class="box-location">
                                    <p>Thứ sáu, ngày 20 tháng 4 năm 2022</p>
                                    <h2>31&#176;C</h2>
                                </div>
                                <div class="box-image-weather">
                                    <img class="mt-5" src="assets/images/sun.png" alt="Hình ảnh">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                    Images aside -->
                    <div class="box-img">
                        <img class="mt-2" src="assets/images/image_96.png" alt="Hình ảnh">
                        <img class="mt-2" src="assets/images/image_95.png" alt="Hình ảnh">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
