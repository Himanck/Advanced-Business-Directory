   <?php include('include/header.php'); 
   include('include/connection.php');
   ?>
    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="img/hero/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                            <h2>Discover Services Near You</h2>
                                </div>
                        <div class="hero__search__form">
                            <form action="listing.php" method="get">
                                <input type="text" name="catword" placeholder="Search..." required>
                                <div class="select__option">
                                    <select name="cat_id">
                                        <option value="">Choose Categories</option>
										<?php

$query = mysqli_query($connect,"select * from categories ORDER BY id desc");
 if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                
?><option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name'];?></option>
									  <?php }}?>
								</select>
                                </div>
                                <div class="select__option">
                                    <select>
                                        <option value="">Choose Location</option>
										<option>Sydney</option>
										<option>Malbourne</option>
										 </select>
                                </div>
                                <button type="submit">Explore Now</button>
                            </form>
                        </div>
                        <ul class="hero__categories__tags">
                           

						   <li><a href="#"><img src="img/hero/cat-1.png" alt=""> Restaurant</a></li>
                            <li><a href="#"><img src="img/hero/cat-2.png" alt=""> Food & Drink</a></li>
                            <li><a href="#"><img src="img/hero/cat-3.png" alt=""> Shopping</a></li>
                            <li><a href="#"><img src="img/hero/cat-4.png" alt=""> Beauty</a></li>
                            <li><a href="#"><img src="img/hero/cat-5.png" alt=""> Hotels</a></li>
                            <li><a href="#"><img src="img/hero/cat-6.png" alt=""> All Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Most Popular Categories</h2>
                        <p></p>
                    </div>
                    <div class="categories__item__list">
                        <?php
    $query=mysqli_query($connect,"select * from categories ORDER BY id desc");
                                      if(mysqli_num_rows($query)>0)
                                      { 
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
						
						<div class="categories__item">
                          <a href="listing.php?cat_id=<?php echo $row['cat_id']; ?>">
						  <img src="admin/<?php echo $row['cat_path']; ?>" alt="">
                            <h5><?php echo $row['cat_name']; ?></h5>
                            </a>
                        </div>
									  <?php }}?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <
    <!-- Work Section Begin -->
    <section class="work spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>How Does It Work</h2>
                         </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">01.</div>
                        <img src="img/work/work-1.png" alt="">
                        <h5>Location & Categories</h5>
                          </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">02.</div>
                        <img src="img/work/work-2.png" alt="">
                        <h5>Explore Listing</h5>
                           </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">03.</div>
                        <img src="img/work/work-3.png" alt="">
                        <h5>Making Appointments</h5>
                         </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    
    <?php include('include/footer.php'); ?>