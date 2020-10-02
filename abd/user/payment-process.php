<?php 
include('include/header.php');
include('include/connection.php');
?>
	<script>
window.alert('Thank you for making Payment');
</script>

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Paypal Payment Confirmation</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
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
                 
                  <tbody>
<tr>
<?php 
$query="insert into payment_process(bcid,bname,uid,uname,paymentid,token,payerid,amount,pdate) values('".$_SESSION['bcid']."','".$_SESSION['bname']."','".$_SESSION['id']."','".$_SESSION['username']."','".$_GET['paymentId']."','".$_GET['token']."','".$_GET['PayerID']."','".$_SESSION['pamount']."','".date("Y-m-d")."')";
						 mysqli_query($connect,$query);
?>
<td><?php echo $_SESSION['bcid'];?></td>
<td><?php echo $_SESSION['bname'];?></td>
<td><?php echo $_SESSION['id'];?></td>
<td><?php echo $_SESSION['username'];?></td>
<td><?php echo $_GET['paymentId'];?></td>
<td><?php echo $_GET['token'];?></td>
<td><?php echo $_GET['PayerID'];?></td>
<td>$<?php echo $_SESSION['pamount'];?></td>
</tr>
               

				  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
		<?php include('include/footer.php');?>