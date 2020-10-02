 <?php include('include/header.php');
include('include/connection.php');
?>
 
   <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Manage Categories</h1>
          <p class="mb-4">
		  <?php
                          if(isset($_GET['id']))
                          {
                            
                            $query_delete=mysqli_query($connect,"delete from categories where id='".$_GET['id']."'");
                            if(mysqli_affected_rows($connect)>0)
                            {
								echo '<div class="alert alert-success">Category is deleted Successfully</div>';
								 
								}
                          }
                           ?>
		  </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Manage Categories</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                <th>Category ID</th>
                <th>Category Name</th>
				<th>Category Image</th>
                <th>Action 1</th>
				<th>Action 2</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Category ID</th>
                <th>Category Name</th>
				<th>Category Image</th>
                <th>Action 1</th>
				<th>Action 2</th>
                 
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php
                                      $query=mysqli_query($connect,"select * from categories");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
            <tr>
                <td><?php echo $row['cat_id']; ?></td>
                                
                <td><?php echo $row['cat_name']; ?></td>
				 <td><img src="<?php echo $row['cat_path']; ?>" height="70" width="50" /></td>
                               
                <td>
				<a href="editcategories.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Update</span>
                  </a>
				</td><td>
				<a href="managecategories.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Do you want to Delete Category?')" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Delete</span>
                  </a>
				
												  </td>                                  
            </tr>
			 <?php
                                           }   
                                      } 
                                      ?>
        </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      
 
 
 <?php include('include/footer.php');?>