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
                        <h2>User Registration</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php"><i class="fa fa-home"></i> Home</a>
                            <span>User Registration</span>
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
                
                <div class="col-lg-6 col-md-6" style=" margin: 0 auto;">
				<div class="section-title">
          <h2>User Registration</h2>
          
        </div>
                    <form action="userregister.php" method="post" class="contact__form" >
					 <fieldset>
							<legend>
								Sign Up
								
							</legend>
		  
                        <div class="row">
						
                            <div class="col-lg-12 col-md-12">
                                <?php
if(isset($_POST['user_register']))
{ 
$fullname=trim($_POST['fullname']);
    $gender=trim($_POST['gender']);
  
    $category_id=trim($_POST['category_id']);
	$username=trim($_POST['username']);
    $pass=$_POST['pass'];
    $repass=$_POST['rpass'];
	$email=trim($_POST['email']);
    $contact=trim($_POST['contact']);

		$flag=0;
    if($fullname && $username)
    {
        if($pass==$repass)
        {
			$str="insert into user(fullname,gender,category_id,username,pass,email,contact) values('$fullname','$gender','$category_id','$username','$pass','$email','$contact')";
        
        if(mysqli_query($connect,$str))
        {
            echo '<div class="alert alert-success">Thanks for User Registration. </div>';
        }
        else
        {
            echo '<div class="alert alert-danger">Error Occured.' . $str .' <br>' . mysqli_error($connect).'</div>';
        }
        }
        else
        {
            echo '<div class="alert alert-danger">Password and Retype Password Mismatch</div>';
        }
    }
	 else
                            {
                                echo '<div class="alert alert-danger">All Fields Required.</div>';
                            }
}
?>
	
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <input type="text" placeholder="Full Name" name="fullname"required />
                            </div>
							
                            <div class="col-lg-12 col-md-12">
                           
							 <select class="myselect" name="gender">
                                                <option >Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                               
                                            </select>
                            </div>
							<div class="col-lg-12 col-md-12">
                           
							 <select class="myselect" name="category_id">
                                        <option >Choose Categories</option>
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
							<div class="col-lg-12 col-md-12">
                                <input type="text" placeholder="User Name" name="username" required/>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <input type="password" placeholder="Password" name="pass" required/>
                            </div>
							<div class="col-lg-12 col-md-12">
                                <input type="password" placeholder="Re-type Password" name="rpass"     required>
                            </div>
							<div class="col-lg-12 col-md-12">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <input type="text" placeholder="Contact(+61)" name="contact" required>
                            </div>
                        </div>
                        <button type="submit" class="site-btn" name="user_register">Register Now</button>
						
						
</fieldset>                   
				   </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
	<?php 
 include('include/footer.php');  

?>
