<?php
ob_start();
 include('include/header.php');
include('include/connection.php');
?>
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Category Detail</h1>
		  <div class="col-md-8">
		  
		  <?php
                              if(isset($_POST['submit']))
                              {
                                   
                                   $cat_id=trim($_POST['cat_id']);
                                   $cat_name=trim($_POST['cat_name']);
   if(isset($_FILES['cat_path']))
	{
		$name=strtolower($_FILES['cat_path']['name']);
		$tmp_name=$_FILES['cat_path']['tmp_name'];
		$ext=pathinfo($name,PATHINFO_EXTENSION);
		$compare=array('gif','jpeg','jpg','png');
		if(isset($name))
		{
						
			if(!empty($name))
			{
				if(in_array($ext,$compare))
				{
					$location='images/';
					if(file_exists($location.$name))
					{
						$l=3;
						$c='abcdefghijklmnopqrstuvwxyz';
						$name='';
						for($i=0;$i<=$l;$i++)
						{
							$name.=$c[rand(0,strlen($c))];
							}
							$name=$name.'.'.$ext;
					}
					if(move_uploaded_file($tmp_name,$location.$name))
					{
						$loc_file=$location.$name;
						$imgquery1=mysqli_query($connect,"SELECT * FROM categories WHERE cat_id='$cat_id'");
						$imgrow1=mysqli_fetch_array($imgquery1);
						$imgpath1=$imgrow1['cat_path'];
						unlink($imgpath1);
						$query="update categories set cat_name='$cat_name',cat_path='$loc_file' where cat_id='$cat_id'";
						 if(mysqli_query($connect,$query))
        {
			                  
            echo '<div class="alert alert-success">Category with image Updated Successfully.</div>';
			header('Refresh:3;url=managecategories.php');
			
        }
        else
        {
            echo '<div class="alert alert-danger">Problem Occured.</div>';
        }
					}
				}
				else
				{
					echo '<div class="alert alert-danger">Enter a valid image';
				}
			}
			else
				{
					$query2="update categories set cat_name='$cat_name' where cat_id='$cat_id'";
						 if(mysqli_query($connect,$query2))
        {
			                  
            echo '<div class="col-lg-12 alert alert-success">Category Updated Successfully.</div>';
			header('Refresh:3;url=managecategories.php');
			
        }
        else
        {
            echo '<div class="alert alert-danger">Problem Occured.</div>';
        }
				}
		}
	}
	
                        }
                      ?>
					  
<form role="form" method="post" action="editcategories.php" enctype="multipart/form-data">          
              <div class="form-group">
			  <?php
 if(isset($_GET['id']))
                          {
                            
$Reg_Result = mysqli_query($connect,"select * from categories where id='".$_GET['id']."'");
$Reg_Row = @mysqli_fetch_array($Reg_Result,MYSQLI_ASSOC);
						 
?>
                <input class="form-control" type="text" placeholder="Category ID" name="cat_id" value="<?php echo $Reg_Row['cat_id']; ?>" required="" readonly>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" value="<?php echo $Reg_Row['cat_name']; ?>" placeholder="Category Name" name="cat_name" required="">
              </div>
              <?php }?>
              <div class="form-group">
                <input class="form-control" type="file" placeholder="Category Image" name="cat_path" >
              </div>
              
              <hr>
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
                 
          </form></div>
        </div>
        <!-- /.container-fluid -->

      </div>
	  <?php include('include/footer.php');?>