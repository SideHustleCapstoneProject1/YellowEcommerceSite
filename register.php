

<!-- the header section  -->

<?php
require 'include/header.inc.php';
require_once('include/user-core.php');

// require 'include/homeNavbar.inc.php';


if(isset($_POST['register'])){
        $register = $user->register($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['address'], $_POST['city'], $_POST['state'], $_POST['country']);
        if($register){
            $login = $user->login($_POST['email'], $_POST['password']);
        }else{
            header("Location: register.php?error=Unable to create Account");
        }       
    }



?>

<!-- end of header section -->
<section>
  
          <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@internship.sidehustle.ng</li>
                                <li>Free Shipping for all Order of ₦99</li>
                                <li><a href="#" class="track-order" style="color: black; text-decoration: none">Track</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/side-hustle-logo.png" class="w-50" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./products.php">Shop</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="./products-cart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>₦150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>          
    </section>
    <!-- Hero Section End -->
<section>
    <div class="container">

<div class="row">

    <div class="col-md-12">

         <h3>Register</h3>
         <br>
<form method="post" action="register.php">


<div class="row">
    <div class="col-md-6">
   <label>First Name</label>
   <input type="text" name="firstname" class="form-control">
</div>

  <div class="col-md-6">
   <label>Last Name</label>
   <input type="text" name="lastname" class="form-control">
</div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
   <label>Email</label>
   <input type="email" name="email" class="form-control">
</div>

  <div class="col-md-6">
   <label>Phone Number</label>
   <input type="text" name="phone" class="form-control">
</div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
   <label>Password</label>
   <input type="password" name="password" class="form-control">
</div>

  <div class="col-md-6">
   <label>Address</label>
   <input type="text" name="address" class="form-control">
</div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
   <label>City</label>
   <input type="text" name="city" class="form-control">
</div>

  <div class="col-md-6">
   <label>State</label>
   <input type="text" name="state" class="form-control">
</div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
          
<select class="form-control" name="country" required>
                                    <option selected disabled value="">Choose Country</option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Yugoslavia">Yugoslavia</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>

</div>

<div class="col-md-6">
    
<button class="btn btn-success" type="submit" name="register">Register</button>

</div>
  
</div>


<br>
</form>

</div>

</div>




</div>

</section>
  




 <?php 

 include 'include/footer.pages.php';

 include 'include/footer.inc.php'; 

 ?>