

<!-- the header section  -->

<?php


require 'include/header.inc.php';

require 'include/homeNavbar.inc.php';
?>

<!-- end of header section -->

  
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="<?php echo "media/product/".$user->getUserInfo()['image']; ?>">
                            <h5><a href="#"><?php echo $user->getUserInfo()['name'] ?></a></h5>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Android">Android</li>
                            <li data-filter=".laptop">Laptop</li>
                            <li data-filter=".samsung">Samsung</li>
                            <li data-filter=".printers">Printers</li>
                        </ul>
                    </div>
                </div>
            </div>

<?php 

$number = $user->getUserInfo()['price'];
$english_format_number = number_format($number);

?>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix Android laptop">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="">
                            <img src="<?php echo "media/product/".$user->getUserInfo()['image']; ?>">

                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
<!--                                 <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
 -->                            </ul>
                        </div>
                        <form method="post" action="products-details.php">
                        <div class="featured__item__text">
                            <h6><?php echo $user->getUserInfo()['name'] ?></h6>
                            <h5>₦<?php echo number_format($number); ?></h5>
                            <input type="text" name="id" value="<?php echo $user->getUserInfo()['id'] ?>" hidden>
                           <button class="btn btn-success">Buy Now</button>
                        </div>
                    </form>
                    </div>
                </div>

           
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/p37.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/laptop.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                         <img src="<?php echo "media/product/".$user->getUserInfo()['image']; ?>">

                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $user->getUserInfo()['name'] ?></h6>
                                        <span>₦<?php echo number_format($number); ?></span>
                                    </div>
                                </a>

                              
                            </div>
                          <!--   <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iphone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iphone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iphone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/iPhone.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Infinix Hot 10 Pro</h6>
                                        <span>₦30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->




 <?php 

 include 'include/footer.pages.php';

 include 'include/footer.inc.php'; 

 ?>