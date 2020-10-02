<?php 
include('include/header.php');
include('include/connection.php');
?>
	
 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View Payments</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                 <th>Payment ID </th>  
<th> Payment Date</th>
				 <th>Category ID</th>
                <th>Business Name</th>
				<th>User ID</th>
                <th>User Name</th>
				<th>Payment ID </th>
					<th>Token ID</th>
                	<th>Payer ID</th>
				<th>Amount Paid</th>
				
                    </tr>
                  </thead>
				  <tfoot>
                    <tr>
                   <th>Payment ID </th>
<th> Payment Date</th>				   
                <th>Category ID</th>
                <th>Business Name</th>
				<th>User ID</th>
                <th>User Name</th>
				<th>Payment ID </th>
					<th>Token ID</th>
                	<th>Payer ID</th>
				<th>Amount Paid</th>
				
                    </tr>
                  </tfoot>
                 
                  <tbody>
<tr>
<?php
                                      $query=mysqli_query($connect,"select * from payment_process where uid='".$_SESSION['id']."'");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
            <tr>
                <td><?php echo $row['id']; ?></td><td><?php echo $row['pdate']; ?></td>
				<td><?php echo $row['bcid']; ?></td><td><?php echo $row['bname']; ?></td><td><?php echo $row['uid']; ?></td><td><?php echo $row['uname']; ?></td><td><?php echo $row['paymentid']; ?></td><td><?php echo $row['token']; ?></td><td><?php echo $row['payerid']; ?></td><td>$<?php echo $row['amount']; ?></td>
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