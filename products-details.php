<?php 

$id = $_POST['id'];


if(empty($id)){
  header("Location: index.php?error");
}
include 'include/header.inc.php';

include 'include/Navbar.inc.php';



?>



    <?php 
require 'include/connect.php';



$qry = "SELECT * from product where id='$id'";
$result = mysqli_query($yellow, $qry);

$num = mysqli_num_rows($result);

 while($row = mysqli_fetch_array($result))
    { 

$number = $row["price"];
$english_format_number = number_format($number);
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $row["name"]; ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                           <!--  <a href="./index.php">Samsung Galaxy</a> -->
                            <span><?php echo $row["name"]; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->

    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="media/product/<?php echo $row["image"]; ?>" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/iphone-11.jpg"
                                src="img/product/details/iphone-12.jpg" alt="">
                            <img data-imgbigurl="img/product/details/iphone-11.jpg"
                                src="img/product/details/iphone-12.jpg" alt="">
                            <img data-imgbigurl="img/product/details/iphone-11.jpg"
                                src="img/product/details/iphone-12.jpg" alt="">
                            <img data-imgbigurl="img/product/details/iphone-11.jpg"
                                src="img/product/details/iphone-12.jpg" alt="">
                        </div>
                    </div>
                </div>





                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $row["name"]; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">₦<?php echo number_format($number); ?></div>
                        <p><?php echo $row["description"]; ?></p>
<form method="post" action="checkout.php">

 <input type="text" name="productname" value="<?php echo $row["name"]; ?>" hidden>
                                    <input type="text" name="price" value="<?php echo $row["price"]; ?>" hidden>

                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                  
                                    <input type="text" name="quantity" value="1">
                                   </div>

                               
                                                            </div>
                        </div>


                       <button class="btn btn-success">Proceed to Payment</button>

                         </form>
                      <!--   <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> -->
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>










                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo itaque repellendus 
                                        recusandae eius dolorum atque exercitationem facere aperiam aliquid molestias!</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eveniet 
                                        deleniti consectetur id dicta dolorum tempore? Perspiciatis, in. Expedita, eveniet!</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nam repellendus
                                         totam pariatur animi quisquam atque veritatis corrupti deleniti ut?</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolore voluptas 
                                        fugit consequuntur quaerat deleniti doloribus amet voluptate aliquam fuga?</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ex voluptas 
                                        voluptates quibusdam reprehenderit dolore corrupti amet sunt fuga aliquid!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <?php }


 ?>

    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/iphone-11.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Infinix Smart 5 Pro</a></h6>
                            <h5>₦30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/iphone.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Infinix Smart 5 Pro</a></h6>
                            <h5>₦30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/iphone-11.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Infinix Smart 5 Pro</a></h6>
                            <h5>₦30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/iphone.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Infinix Smart 5 Pro</a></h6>
                            <h5>₦30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

<?php 
 
 include 'include/footer.pages.php';

 include 'include/footer.inc.php'; 
?>;