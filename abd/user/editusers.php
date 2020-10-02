<?php include('include/header.php');
include('include/connection.php');
?>
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit User</h1>
		  <div class="col-md-8">
		  
		 <?php
if(isset($_POST['submit']))
{ 
$id=trim($_POST['id']);
$fullname=trim($_POST['fullname']);
    $gender=trim($_POST['gender']);
  
   	$category_id=trim($_POST['category_id']);
    $username=$_POST['username'];
    $email=$_POST['email'];
	  $contact=$_POST['contact'];
    if($fullname && $email)
    {
        $str="update user set fullname='$fullname',username='$username',email='$email',gender='$gender',contact='$contact',category_id='$category_id' where id='$id'";
        
        if(mysqli_query($connect,$str))
        {
			
            echo '<div class="alert alert-success">User detail is Updated successfully.</div>';
        }
        else
        {
            echo '<div class="alert alert-danger">Error Occured.' . $str .' <br>' . mysqli_error($connect).'</div>';
        }
        }
        

	 else
                            {
                                echo '<div class="alert alert-danger">All Fields Required.</div>';
                            }
}
?>
			  
<form role="form" method="post" action="editusers.php" enctype="multipart/form-data">          
              <div class="form-group">
			  <?php
 if(isset($_SESSION['id']))
                          {
                            
$Reg_Result = mysqli_query($connect,"select * from user where id='".$_SESSION['id']."'");
$Reg_Row = @mysqli_fetch_array($Reg_Result,MYSQLI_ASSOC);
						 
?>
                <input class="form-control" type="text" placeholder="User ID" name="id" value="<?php echo $Reg_Row['id']; ?>" required="" readonly>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Full Name" name="fullname" value="<?php echo $Reg_Row['fullname']; ?>" required="">
              </div>
          <div class="form-group">
                <Select class="form-control" name="gender">
<option value="<?php echo $Reg_Row['gender']; ?>" selected><?php echo $Reg_Row['gender']; ?></option>
<option value="Male">Male</option>
                                                <option value="Female">Female</option>
</select>
              </div>
			  <div class="form-group">
               <select name="category_id" class="form-control">
<option value="<?php echo $Reg_Row['category_id'];?>" selected><?php echo $Reg_Row['category_id'];?></option>
							<?php

$query = mysqli_query($connect,"select * from categories ORDER BY id desc");
 if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                
?><option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name'];?></option>
									  <?php }}?>
								</select> </div>
			  <div class="form-group">
                <input class="form-control" type="text" placeholder="User Name" name="username" value="<?php echo $Reg_Row['username']; ?>" required="">
              </div>
			  <div class="form-group">
                <input class="form-control" type="email" placeholder="Full Name" name="email" value="<?php echo $Reg_Row['email']; ?>" required="">
              </div>
			  <div class="form-group">
                <input class="form-control" type="text" placeholder="Contact" name="contact" value="<?php echo $Reg_Row['fullname']; ?>" required="">
						  </div><?php }?>
              <hr>
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Update</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
                 
          </form></div>
        </div>
        <!-- /.container-fluid -->

      </div>
	  <?php include('include/footer.php');?>