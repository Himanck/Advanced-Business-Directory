<?php include('include/header.php');
include('include/connection.php');
?>
 
   <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Business Listing</h1>
          <p class="mb-4">
		   <?php
		  
                              if(isset($_POST['bname']))
                              {
$id=trim($_POST['id']);
						  $bname=trim($_POST['bname']);
$bdesc=trim($_POST['bdesc']);
$bcid=trim($_POST['bcid']);
$address=trim($_POST['address']);
$email=trim($_POST['email']);
$phone=trim($_POST['phone']);
$fb=trim($_POST['fb']);
$li=trim($_POST['li']);
$tw=trim($_POST['tw']);
                                 
    if($bname && $email)
    {


$str="update business_listing set bcid='$bcid',bname='$bname',bdesc='$bdesc',address='$address',email='$email',phone='$phone',fb='$li',tw='$tw' where id='$id'";
        
        if(mysqli_query($connect,$str))
        {
			
            echo '<div class="alert alert-success">Business Listing is Updated successfully.</div>';
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
			  
					
						
		  </p>
		  
		  
		  </div>
 <?php include('include/footer.php');?>