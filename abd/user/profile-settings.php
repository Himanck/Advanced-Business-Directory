<?php include('include/header.php');
include('include/connection.php');
?>
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Change Password</h1>
		  <div class="col-md-8">
				<?php
                              if(isset($_POST['submit']))
                              {
                                   $old_pass=trim($_POST['pass']);
                                   $pass=trim($_POST['npass']);
                                   $repass=trim($_POST['cpass']);
                                   if(!empty($old_pass) && !empty($pass) && !empty($repass))
                                   {
									   $query=mysqli_query($connect,"select * from user where id='".$_SESSION['id']."'");
                                        if(mysqli_num_rows($query)>0)
                                        {
                                         $row=mysqli_fetch_assoc($query);
											
											//echo $row['password'];
                                            if($old_pass==$row['pass'])
                                            {
                                                if($pass==$repass)
													
												{ 
												$new_pass=$pass;
                                                $qry="update user set pass='$new_pass' where id='".$_SESSION['id']."'";
                                                    
                                                    if(mysqli_query($connect,$qry))
                                                    {
                                                        echo '<script>
                                alert("Password is updated Successfully.");
                              var windowlocation = "../index.php";
                               window.location.href =windowlocation;
                                </script>';
                                                    }
                                                    else
                                                    {
                                                        echo '<div class="alert alert-danger">Problem Occur, Try again.</div>';
                                                    }
                                                }
                                                else
                                                {
                                                    echo '<div class="alert alert-danger">Password and Confirm password mismatch.</div>';
                                                }
                                            }
                                            else
                                            {
                                                echo'<div class="alert alert-danger">Old Password is incorrect.</div>';
                                            }
                                        }
                                   }
                                   else
                                   {
                                    echo '<div class="alert alert-danger">All Fields required.</div>';
                                   } 
                              }
                              
                          ?>     
        
      				  
<form role="form" method="post" action="profile-settings.php" enctype="multipart/form-data">          
              <div class="form-group">
			  
                <input class="form-control" type="password" placeholder="Old Password" name="pass"  required="">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" placeholder="New Password" name="npass" required="">
              </div>
             
              <div class="form-group">
                <input class="form-control" type="password" placeholder="Re-type Password" name="cpass" required="">
              </div>
              
              <hr>
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Change</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
                 
          </form></div>
        </div>
        <!-- /.container-fluid -->

      </div>
	  <?php include('include/footer.php');?>