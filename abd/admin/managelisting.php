 <?php include('include/header.php');
include('include/connection.php');
?>
 
   <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Manage Business Listing</h1>
          <p class="mb-4">
		  <?php
                          if(isset($_GET['id']))
                          {
                            
                            $query_delete=mysqli_query($connect,"delete from business_listing where id='".$_GET['id']."'");
                            if(mysqli_affected_rows($connect)>0)
                            {
								echo '<div class="alert alert-success">Business Listing is deleted Successfully</div>';
								 
								}
                          }
                           ?>
		  </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Manage Business Listing</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                <th>ID</th>
                <th>Business Category</th>
				<th>Business Name</th>
				<th>Business Description</th>
				
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				
				<th>Username</th>
				<th>Plan Type</th>
				
                 <th>Action 1</th>
				<th>Action 2</th>
                
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    
                <th>ID</th>
                <th>Business Category</th>
				<th>Business Name</th>
				<th>Business Description</th>
				
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				
				<th>Username</th>
				<th>Plan Type</th>
				
                 <th>Action 1</th>
				<th>Action 2</th>
                
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php
                                      $query=mysqli_query($connect,"select * from business_listing");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                                
                <td><?php echo $row['bcid']; ?></td>
				<td><?php echo $row['bname']; ?></td>
				<td><?php echo $row['bdesc']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['uname']; ?></td>
				<td><?php echo $row['ptype']; ?></td>
				                
                <td>
				<a href="editlisting.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Update</span>
                  </a>
				</td><td>
				<a href="managelisting.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Do you want to Delete Lisiting?')" class="btn btn-danger btn-icon-split">
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