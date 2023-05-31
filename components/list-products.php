<section class="section-list-product">
    <div class="container-xl">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nông nghiệp</li>
            </ol>
        </nav>
    </div>
    <div class="container-xl">
        <div class="banner-list-product">
            <img src="../assets/images/banner-list-product.svg" class="w-100" alt="">
        </div>
    </div>
    <div class="container-xl">
        <div class="rounded-3 p-3 bg-xanh">
            <div><h3 CLASS="text-white">TOP 10 SẢN PHẨM BÁN CHẠY</h3></div>
            <div class="list-product">
                <?php
                for ($i = 0; $i < 5; $i++) {
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
                                    <a class="text-decoration-none text-primary" href=""><i
                                                class='bx bx-plus-circle'></i> So sánh</a>
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
    <div class="container-xl">
        <div class="filter-list-product p-3 d-lg-flex flex-lg-column gap-5">
            <ul class="filter-1 d-none d-lg-flex  gap-3">
                <li><a class=" btn btn-light border" href=""> <i class='bx bx-filter-alt'></i>Bộ lọc</a></li>
                <li>
                    <select name="" id="" class=" btn btn-light border">
                        <option value="">Hãng</option>
                    </select>
                </li>
                <li>
                    <select name="" id="" class="btn btn-light border">
                        <option value="">Loại phân bón</option>
                    </select>
                </li>
                <li>
                    <select name="" id="" class="btn btn-light border">
                        <option value="">Giá</option>
                    </select>
                </li>
            </ul>
            <ul class="filter-2 d-none d-lg-flex gap-3 ">
                <li>
                    <ins>Tìm kiếm nhiều nhất:</ins>
                </li>
                <li><a class=" btn  rounded-pill" href="">Phân bón lá</a></li>
                <li><a class=" btn  rounded-pill" href="">Phân bón gốc</a></li>

                <li><a class=" btn  rounded-pill" href="">Thuốc bảo vệ thực vật</a></li>
                <li><a class=" btn  rounded-pill" href="">Phân bón hữu cơ</a></li>

            </ul>
            <ul class="filter-3 d-none d-lg-flex  gap-3">
                <li>
                    <ins>199 Phân bón:</ins>
                </li>
                <li><input type="checkbox" name="" id="">&nbsp; Giảm giá</li>
                <li><input type="checkbox" name="" id="">&nbsp; Độc quyền</li>
                <li><input type="checkbox" name="" id="">&nbsp;Mới 2022</li>
                <div class="ms-auto">
                    <b>Sắp xếp theo</b>
                    <select name="" id="" class="btn btn-light border">
                        <option value="">Nổi bật</option>
                    </select>
                </div>
            </ul>
        </div>
        <div class="filter-list-product-mobile d-lg-none">
            <ul class="filter-1  d-lg-flex  gap-3">
                <li><a class=" btn btn-light border" href=""> <i class='bx bx-filter-alt'></i>Bộ lọc</a></li>
                <li>
                    <select name="" id="" class=" btn btn-light border">
                        <option value="">Hãng</option>
                    </select>
                </li>
                <li>
                    <select name="" id="" class="btn btn-light border">
                        <option value="">Loại phân bón</option>
                    </select>
                </li>
                <li>
                    <select name="" id="" class="btn btn-light border">
                        <option value="">Giá</option>
                    </select>
                </li>
            </ul>
            <ul class="filter-2  d-lg-flex gap-3 ">
                <li>
                    <ins>Tìm kiếm nhiều nhất:</ins>
                </li>
                <li><a class=" btn  rounded-pill" href="">Phân bón lá</a></li>
                <li><a class=" btn  rounded-pill" href="">Phân bón gốc</a></li>

                <li><a class=" btn  rounded-pill" href="">Thuốc bảo vệ thực vật</a></li>
                <li><a class=" btn  rounded-pill" href="">Phân bón hữu cơ</a></li>

            </ul>
            <ul class="filter-3  d-lg-flex  gap-3 ">
                <li>
                    <ins>199 Phân bón:</ins>
                </li>
                <li><input type="checkbox" name="" id="">&nbsp; Giảm giá</li>
                <li><input type="checkbox" name="" id="">&nbsp; Độc quyền</li>
                <li><input type="checkbox" name="" id="">&nbsp;Mới 2022</li>
                <div class="ms-auto">
                    <b>Sắp xếp theo</b>
                    <select name="" id="" class="btn btn-light border">
                        <option value="">Nổi bật</option>
                    </select>
                </div>
            </ul>
        </div>
    </div>
    <div class="container-xl">
        <div class="box-list-product row ">
            <?php
            for ($i = 0; $i < 6; $i++) {
                ?>
                <div class="card mt-1 product-item col-lg-2 col-6">
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
                                <a class="text-decoration-none text-primary" href=""><i
                                            class='bx bx-plus-circle'></i> So sánh</a>
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
    <div class="container-xl">
        <div class="row mt-4 page-product">
            <div class="col-lg-12 page-product-content">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center gap-2">

                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class='bx bxs-right-arrow'></i></a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>
    <div class="container-xl">
        <div class="row content-blog mt-3">
              <ins>Phân bón Tây Đô</ins>
            <div class="content-text mt-3">
                <p>Phân bón Tây Đô cung cấp các chất dinh dưỡng cần thiết cho cây trồng, giúp cải thiện năng suất và chất lượng sản phẩm nông nghiệp. Phân bón Tây Đô chủ yếu sản xuất các loại phân bón hữu cơ và phân bón vi sinh, nhằm tạo điều kiện tốt nhất cho sự phát triển của cây trồng mà không gây hại cho môi trường hay sức khỏe con người.</p>
            </div>
            <div class="learn-more d-flex justify-content-center flex-column">
                            <a class="btn btn-light " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <p>Xem thêm</p>
                                <i class='bx bx-chevron-down' ></i>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <p>Phân bón Tây Đô cung cấp các chất dinh dưỡng cần thiết cho cây trồng, giúp cải thiện năng suất và chất lượng sản phẩm nông nghiệp. Phân bón Tây Đô chủ yếu sản xuất các loại phân bón hữu cơ và phân bón vi sinh, nhằm tạo điều kiện tốt nhất cho sự phát triển của cây trồng mà không gây hại cho môi trường hay sức khỏe con người.</p>

                                </div>
                            </div>
            </div>

        </div>
    </div>
    <div class="container-xl mt-4">
        <div class="title-watched-product">
            <ins>SẢN PHẨM ĐÃ XEM</ins>
        </div>
        <div class="watched-product">
            <div class="list-product">
                <?php
                for ($i = 0; $i < 5; $i++) {
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
                                    <a class="text-decoration-none text-primary" href=""><i
                                                class='bx bx-plus-circle'></i> So sánh</a>
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