<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <div class="footer__about__logo flogo">
                            <a href="#">Advance Business <span>Directory</span></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <span>Call Us:</span>
                                <p>+91 9030425790</p>
                            </li>
                            <li>
                                <span>Email:</span>
                                <p>Aziz@gmail .com</p>
                            </li>
                            
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__widget">
                        <ul>
                            <li>
                                <span style="color: #f03250;">Connect Us:</span>
                                <div class="footer__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </li> </ul>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Adavance Business Directory
                         </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

	<div class="modal fade in" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
					 <?php 
                         if(isset($_POST['submit2']))
                        {
							
                            $email_login=$_POST['email'];
                            $pass_login=md5($_POST['pass']);
                          $query_login=mysqli_query($connect, "select * from admin where username='$email_login' and password='$pass_login'");
                            if(mysqli_num_rows($query_login)>0)
                             {
								  while($row_login=mysqli_fetch_array($query_login))
                                    {
                                $_SESSION['admin_id']=$row_login['id'];  
                                 
                                echo '<script>
                                 alert("Admin Login Successfully");
                                window.location.href="admin/index.php";
                                </script>';                                 
                                //$url=$_SERVER['REQUEST_URI'];
                                header("refresh:1;Location: admin/index.php"); 
			                    }
                            }
                             else
                             {
                                 echo '<script>
                                 alert("username and password mismatch.");
                                 </script>';
                            }
						}							
							
                        ?>
					
						<div class="login-right">
                        							<form method="post" action="" id="ref">
								<h3>Admin Login </h3>
							  <div class="form-group">
    <input class="form-control" type="text" placeholder="Username" style="color: #333;" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">	
  </div>
  <div class="form-group">
    <input class="form-control" type="password" placeholder="Password" name="pass" style="color: #333;" required="">
  </div>	
								<input class="form-control primary-btn" type="submit" value="Admin Login" name="submit2">
							</form>
						</div>
						<div class="clearfix"></div>								
					</div>
					
				</div>
		  </div>

		</div>
	  </div>
	</div>
	

	<div class="modal fade in" id="askModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
					
						<div class="login-right">
                        							
								<h3>Add Listing </h3>
							  <div class="form-group">
    <h4> Do you have Account?</h4>
  </div>
  						<a class=" form-control btn btn-success mb-10" href="user.php"> Click here for User Login</a>
							
						</div>
						<div class="clearfix"></div>								
					</div>
					
				</div>
		  </div>

		</div>
	  </div>
	</div>

	<div class="modal fade in" id="askModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
					
						<div class="login-right">
                        							
								<h3>Add Listing </h3>
							  <div class="form-group">
    <h4> Do you have Account?</h4>
  </div>
  						<a class=" form-control btn btn-success mb-10" href="user.php"> Click here for User Login</a>
							
						</div>
						<div class="clearfix"></div>								
					</div>
					
				</div>
		  </div>

		</div>
	  </div>
	</div>
	
	
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	
		<script>
	$(document).ready(function() {
  var $navbar = $("#mNavbar");
  
  AdjustHeader(); // Incase the user loads the page from halfway down (or something);
  $(window).scroll(function() {
      AdjustHeader();
  });
  
  function AdjustHeader(){
    if ($(window).scrollTop() > 60) {
      if (!$navbar.hasClass("fixed-top")) {
        $navbar.addClass("fixed-top");
		$("#mNavbar").css('background-color', '#00000');

      }
    } else {
      $navbar.removeClass("fixed-top");
	  $("#mNavbar").css('background-color', '');

	  
	  
    }
  }
});
	</script>
</body>

</html>