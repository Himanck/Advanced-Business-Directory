<?php include('include/header.php');
include('include/connection.php');
?>
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Add Categories</h1>
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
						$l=4;
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
						$loc_path_image=$location.$name;
						$query="insert into categories(cat_id,cat_name,cat_path) values('$cat_id','$cat_name','$loc_path_image')";
						 if(mysqli_query($connect,$query))
        {
			                  
            echo '<div class="alert alert-success">Category is Added Successfully.</div>';
			
        }
        else
        {
            echo '<div class=" alert alert-danger">Problem Occured.</div>';
        }
					}
				}
				else
				{
					echo '<div class=" alert alert-danger">Enter a valid Category image';
				}
			}
			else
				{
					echo '<div class="alert alert-danger">Select Category Image';
				}
		}
	}
	
                        }
                      ?>
					  
<form role="form" method="post" action="categories.php" enctype="multipart/form-data">          
              <div class="form-group">
			  <?php

$Reg_Result = mysqli_query($connect,"select * from categories ORDER BY id desc");
$Reg_Row = @mysqli_fetch_array($Reg_Result,MYSQLI_ASSOC);

?>
                <input class="form-control" type="text" placeholder="Category ID" name="cat_id" value="<?php echo ($Reg_Row['id']+1); ?>" required="" readonly>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Category Name" name="cat_name" required="">
              </div>
             
              <div class="form-group">
                <input class="form-control" type="file" placeholder="Category Image" name="cat_path" required="">
              </div>
              
              <hr>
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
                 
          </form></div>
        </div>
        <!-- /.container-fluid -->

      </div>
	  <?php include('include/footer.php');?>