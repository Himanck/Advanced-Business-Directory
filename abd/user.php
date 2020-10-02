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
                        <h2>User Login</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php"><i class="fa fa-home"></i> Home</a>
                            <span>User Login</span>
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
          <h2>User Login</h2>
          
        </div>
                    <form action="user.php" method="post" class="contact__form">
					 <fieldset>
							<legend>
								Sign in to your account
								
							</legend>
		  
                        <div class="row">
						<div class="col-lg-12 col-md-12">
							<?php 
                         if(isset($_POST['user']))
                        {
							
                            $username=trim($_POST['username']);
                            $pass=trim($_POST['pass']);
                            $login=mysqli_query($connect, "select * from user where username='$username' and pass='$pass'");
                            if(mysqli_num_rows($login)>0)
                             {
								  while($row_login=mysqli_fetch_array($login))
                                    {
										

                               $_SESSION['id']=$row_login['id'];  
                                  $_SESSION['username']=$row_login['username']; 
                                echo '<script>
                                 alert("Login Successfully");
                                window.location.href="user/index.php";
                                </script>';                                 
                                

			                    }
                            }
                             else
                             {
                                 echo '<div class="alert alert-danger">Wrong Username or Password</div>';
                            }
						}							
							
                        ?>
  </div>
                            <div class="col-lg-12 col-md-12">
                                <input type="text" placeholder="User Name" name="username" required>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <input type="password" placeholder="Password" name="pass" required>
                            </div>
							
                        </div>
                        <button type="submit" class="site-btn"name="user">Login Now</button>
						
						<div style="margin-top:16px;"> Don't have an account yet?
								<a href="userregister.php">
									Create an account
								</a></div>
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
