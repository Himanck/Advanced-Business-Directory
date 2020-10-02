 <?php ob_start();
 include('include/header.php');  
include('include/connection.php');  
?>  
  <!-- Breadcrumb Begin -->
    <div class="breadcrumb-area set-bg" data-setbg="img/breadcrumb/breadcrumb-normal.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: #ffffff !important;">Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php"><i class="fa fa-home"></i> Home</a>
                            <span>Contacts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact__widget">
                        <div class="contact__widget__address">
                            <h4>Contact Us</h4>
                            <ul>
                                <li><i class="fa fa-send"></i> Australia</li>
                                <li><i class="fa fa-envelope"></i> aziz@gmail .com</li>
                                <li><i class="fa fa-phone"></i> +91 9030425790</li>
                            </ul>
                        </div>
                        <div class="contact__widget__time">
                            <h4>Office Hours</h4>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Mon - Fri: 8:30am - 07:00pm</li>
                                <li><i class="fa fa-clock-o"></i> Sat - Sun: 10:30am - 05:00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <form action="#" class="contact__form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
	<?php 
 include('include/footer.php');  

?>
