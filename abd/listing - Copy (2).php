<?php ob_start();
 include('include/header.php');  
include('include/connection.php');  
?>
<style>
footer{
	width:100%;float:left;
}
.listing{
	width:100%;
	height:auto !important;
}
body{
	overflow:auto !important;
}

.listing .listing__list .listing__item {
    max-width: calc(33% - 30px);
	
}
</style>
 <!-- Filter Begin -->
    <div class="filter nice-scroll">
        <div class="filter__title">
            <h5><i class="fa fa-filter"></i> Filter</h5>
        </div>
        <div class="filter__search">
            <input type="text" Placeholder="Enter Keyword..">
        </div>
        
        
        
        <div class="filter__btns">
            <button type="submit">Filter Results</button>
            <button type="submit" class="filter__reset">Reset All</button>
        </div>
    </div>
    <!-- Filter End -->

    <!-- Listing Section Begin -->
    <section class="listing nice-scroll1">
        <div class="listing__text__top">
            <div class="listing__text__top__left">
                <h5>
				<?php 
                          $query2 = "SELECT * FROM categories where cat_id='".$_GET['cat_id']."'";
                          $result2 = mysqli_query($connect, $query2) or die(mysqli_error($db));
                          while ($row2 = mysqli_fetch_array($result2)) {
                              echo $row2['cat_name'];
                            }
                          ?>
				</h5>
                <span><?php 
                          $query = "SELECT COUNT(*) FROM business_listing where bcid='".$_GET['cat_id']."'";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                              echo "$row[0]";
                            }
                          ?> Results Found</span>
            </div>
            <div class="listing__text__top__right">Nearby <i class="fa fa-sort-amount-asc"></i></div>
        </div>
        <div class="listing__list">
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="img/listing/list-1.jpg">
                    <img src="img/listing/list_icon-1.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Chinese Sausage Restaurant</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 236 Littleton St. New Philadelphia, Ohio, United
                                States</li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="img/listing/list_small_icon-1.png" alt="">
                            <span>Restaurant</span>
                        </div>
                        <div class="listing__item__text__info__right">Open Now</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="img/listing/list-2.jpg">
                    <img src="img/listing/list_icon-2.png" alt="">
                    <div class="listing__item__pic__tag top_rate">Top Rate</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Shrimp floured and fried</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 1012 Vesper Dr. Columbus, Georgia(GA), United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="img/listing/list_small_icon-2.png" alt="">
                            <span>Food & Drink</span>
                        </div>
                        <div class="listing__item__text__info__right closed">Closed</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="img/listing/list-4.jpg">
                    <img src="img/listing/list_icon-4.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Crab fried with tamarind</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 14320 Keenes Mill Rd. Cottondale, Alabama(AL), United
                                States</li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="img/listing/list_small_icon-3.png" alt="">
                            <span>Hotel</span>
                        </div>
                        <div class="listing__item__text__info__right closed">Closed</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="img/listing/list-3.jpg">
                    <img src="img/listing/list_icon-3.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Sweet and sour pork ribs</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 251 Wiley St. Forks, Washington(WA), United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="img/listing/list_small_icon-1.png" alt="">
                            <span>Restaurant</span>
                        </div>
                        <div class="listing__item__text__info__right">Open Now</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="img/listing/list-5.jpg">
                    <img src="img/listing/list_icon-5.png" alt="">
                    <div class="listing__item__pic__tag hot_deal">Hot Deal</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Tortoise grilled on salt</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 236 Littleton St. New Philadelphia, Ohio, United
                                States</li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="img/listing/list_small_icon-4.png" alt="">
                            <span>Shopping</span>
                        </div>
                        <div class="listing__item__text__info__right">Open Now</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="img/listing/list-6.jpg">
                    <img src="img/listing/list_icon-6.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Fish cooked with fishsauce</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 2604 E Drachman St. Tucson, Arizona, United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="img/listing/list_small_icon-3.png" alt="">
                            <span>Hotel</span>
                        </div>
                        <div class="listing__item__text__info__right">Open Now</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Listing Section End -->
 
<?php 
 include('include/footer.php');  

?>
 <script>
 $(document).ready(function(){
	 $('body').addClass("ov-hid");
	 $('header').addClass("header--normal");
 })
 </script>