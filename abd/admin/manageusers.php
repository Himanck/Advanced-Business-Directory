 <?php include('include/header.php');
include('include/connection.php');
?>
 
   <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Manage Users</h1>
          <p class="mb-4">
		  <?php
                          if(isset($_GET['id']))
                          {
                            
                            $query_delete=mysqli_query($connect,"delete from user where id='".$_GET['id']."'");
                            if(mysqli_affected_rows($connect)>0)
                            {
								echo '<div class="alert alert-success">User detail is deleted Successfully</div>';
								 
								}
                          }
                           ?>
		  </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Manage Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                <th>User ID</th>
                <th>Full Name</th>
				<th>Gender</th>
				<th>Category ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Contact</th>
                 <th>Action 1</th>
				<th>Action 2</th>
                
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>User ID</th>
                <th>Full Name</th>
				<th>Gender</th>
				<th>Category ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Contact</th>
                 <th>Action 1</th>
				<th>Action 2</th>
                
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php
                                      $query=mysqli_query($connect,"select * from user");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                                
                <td><?php echo $row['fullname']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['category_id']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['pass']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact']; ?></td>
				                
                <td>
				<a href="editusers.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Update</span>
                  </a>
				</td><td>
				<a href="manageusers.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Do you want to Delete User?')" class="btn btn-danger btn-icon-split">
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