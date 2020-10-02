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
            <input type="text" id="myfilter" Placeholder="Enter Keyword..">
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
							  $cat_path=$row2['cat_path'];
							  $cat_name=$row2['cat_name'];
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
        <div class="listing__list " id="mydiv">
            
			<?php
	if($_GET['cat_id'])
	{
		$cat_id=$_GET['cat_id'];
    $query=mysqli_query($connect,"select * from business_listing where bcid='".$_GET['cat_id']."' ORDER BY id desc");
                                      if(mysqli_num_rows($query)>0)
                                      { 
                                           while($row=mysqli_fetch_array($query))
                                           {
											
                                                ?>
				
			
			<div class="listing__item">
			<?php if($row['uid']=='admin')
						{
							?>
                    <div class="listing__item__pic set-bg" data-setbg="admin/<?php echo $row['bimage']; ?>">
                       
					<?php 
						}
						else
						{
							?>
							 <div class="listing__item__pic set-bg" data-setbg="user/<?php echo $row['bimage']; ?>">
						<?php }?>
                     <img src="admin/<?php echo $cat_path;?>" alt="">
					 <?php if($row['ptype']=='paid')
						{
							?>
                   <div class="listing__item__pic__tag top_rate">Top Rate</div>
                       
					<?php 
						}?>
                    
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5><?php echo $row['bname']; ?></h5>
                        
                        <ul>
                            <li><span class="icon_pin_alt"></span> <?php echo $row['address']; ?>
                            </li>
							<li><span class="icon_mail_alt"></span> <?php echo $row['email']; ?></li>
                            <li><span class="icon_phone"></span> <?php echo $row['phone']; ?></li>
                        </ul>
                    </div>
					 <div class="listing__sidebar__contact__social">
                                    <a href="<?php echo $row['fb']; ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $row['li']; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="<?php echo $row['tw']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                              
                                </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="admin/<?php echo $cat_path; ?>" alt="">
                            <span><?php echo $cat_name; ?></span>
                        </div>
                       
                    </div>
                </div>
            </div>
             
			 
			 <?php }}}?>
			 
			 
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
 
 <script>
$(document).ready(function(){
  $("#myfilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mydiv div.listing__item").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>