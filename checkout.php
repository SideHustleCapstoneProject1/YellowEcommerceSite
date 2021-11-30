<?php 

include 'include/header.inc.php';

include 'include/Navbar.inc.php';


$productname = $_POST['productname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];


if(empty($productname)){
  header("Location: index.php?error");
}

?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add">
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Create an account by entering the information below. If you are a returning customer
                                please login at the top of the page</p>
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Amount</span></div>
                                <ul>
                                    <li><?php echo "$productname"; ?> <span>₦<?php echo number_format($price); ?> </span></li>
                                    <li>Quantity <span><?php echo "$quantity"; ?> </span></li>
                                   
                                </ul>
                                <?php 

                                $total = $price * $quantity;

                                 ?>
                                <div class="checkout__order__subtotal">Subtotal <span>₦<?php echo number_format($total); ?></span></div>
                                <div class="checkout__order__total">Total <span>₦<?php echo number_format($total); ?></span></div>
                                <div class="checkout__input__checkbox">
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paystack">
                                        Paystack
                                        <input type="checkbox" id="paystack">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="BankTransfer">
                                        Direct Bank Transfer
                                        <input type="checkbox" id="BankTransfer">
                                        <span class="checkmark" class="ms-5"></span>
                                    </label>
                                </div>

                                <p>Your personal data will be used to process your order, support your experience 
                                    throughout this website, and for other purposes described in our privacy policy.
                                </p>

                                <div class="checkout__input__checkbox">
                                   <p><input type="checkbox"> I have read and agree to the website <a href="#">Terms and conditions</a></p>
                                </div>
                                
                                <button type="submit" class="site-btn">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <?php 
 
 include 'include/footer.pages.php';

 include 'include/footer.inc.php'; 

 ?>;