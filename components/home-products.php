<!--<section class="home-products mt-5 mb-5">-->
<!--    <div class="container">-->
<!--        <div class="title text-center">-->
<!--            <p class="text-danger fw-semibold">HOA TƯƠI BẢO HÂN</p>-->
<!--            <h4 class="fs-1  fw-bold">Mẫu hoa mới nhất</h4>-->
<!--	        <p class="">Là những mẫu hoa mới hàng ngày được cập nhật tại cửa hàng hoa tươi Bảo Hân</p>-->
<!--        </div>-->
<!--	    <div class="products row mt-5 mb-5">-->
<!--		    --><?php
//		        for ($i = 0 ; $i < 8 ; $i++) {
//					?>
<!--			        <div class="col-sm-3 col-6 mb-4">-->
<!--				        <div class="item">-->
<!--					        <a href="#" class="search text-center p-2 m-2"><i class='bx bx-search'></i></a>-->
<!--					        <div class="card border-0">-->
<!--						        <a href="#"><img src="--><?php //= ASSETS ?><!--/images/bo-hong-do-600x600.jpg" alt="flowers-banner-large-min" class="img-fluid"></a>-->
<!--						        <div class="card-body text-center">-->
<!--							        <div class="item-title">-->
<!--								        <a href="#" class="text-decoration-none">Bó hoa tặng em</a>-->
<!--							        </div>-->
<!--							        <div class="item-price">-->
<!--								        <span class="text-success">700,000đ</span>-->
<!--							        </div>-->
<!--						        </div>-->
<!--					        </div>-->
<!--				        </div>-->
<!--			        </div>-->
<!--					--><?php
//		        }
//		    ?>
<!--	    </div>-->
<!--    </div>-->
<!--</section>-->
<section class="mx-auto">
    <div class="col-lg-12 custom-img">
        <img src="../assets/images/ban-chay.svg"   width="100%"  alt="Responsive image">
    </div>
    <div class="banner-product ">
        <ul class="nav-title   " ><li><h3>SẢN PHẨM NỔI BẬT</h3></li></ul>
        <ul class="nav nav-pills  " >


            <li class="nav-item mx-2 " >
                <button class="nav-link rounded-pill btn-custom" type="button" >Sản phẩm hót</button>
            </li>
            <li class="nav-item mx-2" >
                <button class="nav-link btn-custom rounded-pill"  type="button" >Sản phẩm mua nhiều</button>
            </li>
            <li class="nav-item mx-2 " >
                <button class="nav-link btn-custom rounded-pill"  type="button" >Sản phẩm mới</button>
            </li>

        </ul>

    </div>
    <div class=" custom-product">
        <div class=" box-product row">
            <?php
            for ($i = 0 ; $i < 5 ; $i++) {
                ?>
                <div class="card  mt-1"  style="width: 16rem"  >
                    <img src="/assets/images/img-product.png"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Phân bón lá SITTO FOPRO 20-20-20</h5>
                        <div class="reviews">
                            <ul class="stars">
                                <li><i class='bx bxs-star' ></i></li>
                                <li><i class='bx bxs-star' ></i></li>
                                <li><i class='bx bxs-star' ></i></li>
                                <li><i class='bx bxs-star' ></i></li>
                                <li><i class='bx bx-star' ></i></li>
                            </ul>
                            <span>(99)</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3 price-custom">
                            <del>100,000 <u>đ</u></del>
                            <span class="sale rounded-pill">-20%</span>
                        </div>
                        <div class="price-product">
                            <b>80,000<u>đ</u></b>
                        </div>
                        <div class="product-footer ">
                            <div class="d-flex justify-content-between mt-3 price-custom ">
                                <a class="text-decoration-none" href="" ><i class='bx bx-plus-circle'></i> &nbsp; So sánh</a>
                                <a href=""><i style="color: #0DAC4B; font-size: 25px;" class='bx bxs-cart-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </div>
</section>
