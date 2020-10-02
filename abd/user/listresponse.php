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
$bname=trim($_POST['bname']);
$bdesc=trim($_POST['bdesc']);
$bcid=trim($_POST['bcid']);
$address=trim($_POST['address']);
$email=trim($_POST['email']);
$phone=trim($_POST['phone']);
$fb=trim($_POST['fb']);
$li=trim($_POST['li']);
$tw=trim($_POST['tw']);
$uid=$_SESSION['id'];
$uname=$_SESSION['username'];
$ptype=trim($_POST['ptype']);
$pamount=trim($_POST['pamount']);
$flag=0;                                   
   if(isset($_FILES['bimage']))
	{
		$name=strtolower($_FILES['bimage']['name']);
		$tmp_name=$_FILES['bimage']['tmp_name'];
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
					$query="insert into business_listing(bcid,bname,bdesc,bimage,address,email,phone,fb,li,tw,uid,uname,ptype,pamount) values(
'$bcid','$bname','$bdesc','$loc_path_image','$address','$email','$phone','$fb','$li','$tw','$uid','$uname','$ptype','$pamount')";
						 if(mysqli_query($connect,$query))
        {
			                  
           $flag=1;
			
        }
        else
        {
            echo '<div class=" alert alert-danger">Problem Occured.</div>';
        }
					}
				}
				else
				{
					echo '<div class=" alert alert-danger">Enter a valid Listing image';
				}
			}
			else
				{
					echo '<div class="alert alert-danger">Select Listing Image';
				}
		}
	}
	
                        }
                      ?>
		  </p>
<?php
if($flag==1 && $ptype=='free')
{
	echo '<div class="alert alert-success">Thanks for Adding Business Listing Details.</div>';
		
}
else
{
?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Payment Checkout</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                <th>Category ID</th>
                <th>Business Name</th>
				<th>Email</th>
                <th>Phone</th>
				<th>Listing Type</th>
				<th>Payable Amount</th>
				
                    </tr>
                  </thead>
                 
                  <tbody>
<tr>
<td><?php echo $bcid;  $_SESSION['bcid']=$bcid;?></td>
<td><?php echo $bname; $_SESSION['bname']=$bname;?></td>
<td><?php echo $email;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $ptype;?></td>
<td>$<?php echo $pamount; $_SESSION['pamount']=$pamount;?></td>
</tr>
<tr>
<td colspan="3">Payout Amount</td>
<td colspan="3" style="text-align:right"><div id="paypal-button"></td>
</tr>                

				  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
<?php }?>
 
 <script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AQ4CjilsHT7VNiaKkZh7kXfisVQ_RuEI8Bp_fOSYI5AQIIqW63kXrX5xPr_bIbAOLMR9Q2w8j-gG9Da-',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'blue',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
		
	  return actions.payment.create({
	

        transactions: [{
          amount: {
            total: '30',
            currency: 'AUD'
          }
        }],
		redirect_urls:
        {
          return_url: 'http://localhost:8080/abd/user/payment-process.php',
		}
		
	  
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
    //  window.alert('Thank you for your purchase!');
		return actions.redirect();
      });
    }
  }, '#paypal-button');

</script>

 <?php include('include/footer.php');?>