<?php include('include/header.php');
include('include/connection.php');
?>
<style>
/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .box {
  padding: 20px;
  background: #f3f1f0;
  text-align: center;
  border-radius: 8px;
  
  overflow: hidden;
}

.pricing h3 {
  font-weight: 400;
  padding: 15px;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 600;
  color: #2b2320;
}

.pricing h4 {
  font-size: 42px;
  color: #f03c02;
  font-weight: 500;
  font-family: "Open Sans", sans-serif;
  margin-bottom: 20px;
}

.pricing h4 sup {
  font-size: 20px;
  top: -15px;
  left: -3px;
}

.pricing h4 span {
  color: #bababa;
  font-size: 16px;
  font-weight: 300;
}

.pricing ul {
  padding: 0;
  list-style: none;
  color: #2b2320;
  text-align: center;
  line-height: 20px;
  font-size: 14px;
}

.pricing ul li {
  padding-bottom: 16px;
}

.pricing ul .na {
  color: #ccc;
  text-decoration: line-through;
}

.pricing .btn-wrap {
  padding: 15px;
  text-align: center;
}

.pricing .btn-buy {
  color: #9c847b;
  border: 2px solid #e9e3e1;
  display: inline-block;
  padding: 10px 40px 12px 40px;
  border-radius: 4px;
  transition: none;
  font-size: 14px;
  font-weight: 400;
  font-family: "Muli", sans-serif;
  font-weight: 600;
  transition: 0.3s;
}

.pricing .btn-buy:hover {
  color: #f03c02;
  border-color: #f03c02;
}

.pricing .box:hover {
 border: 2px solid #e9e3e1;
  border-color: #f03c02;
}


.pricing .featured {
  background: #f03250;
  box-shadow: none;
}

.pricing .featured h3, .pricing .featured h4, .pricing .featured h4 span, .pricing .featured ul, .pricing .featured ul .na {
  color: #fff;
}

.pricing .featured .btn-wrap {
  padding: 15px;
  text-align: center;
}

.pricing .featured .btn-buy {
  color: #fff;
  border-color: rgba(255, 255, 255, 0.5);
}

.pricing .featured .btn-buy:hover {
  color: #f03c02;
  background: #fff;
  border-color: #fff;
}



	</style>
<div class="container-fluid pricing" >

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Add Business Listing - Business Plans</h1>
		     <div class="row">
    <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Standard</h3>
              <h4><sup>$</sup>Free<span>/ One Year</span></h4>
              <ul>
                <li>Limited Listing</li>
                <li>Limited Keywords</li>
              
                <li class="na">Business Support</li>
                <li class="na">Advanced Features</li>
              </ul>
              <div class="btn-wrap">
			 
               <a href="addblisting.php?id=free&d=0"  class="btn-buy js-cd-add-to-cart">Select Plan</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>30<span> / One Year</span></h4>
              <ul>
                <li>Ranked Listing</li>
                <li>Keywords</li>
                
                <li>Business Support</li>
                <li>Advanced Features</li>
              </ul>
              <div class="btn-wrap">
			
               <a href="addblisting.php?id=paid&d=30"  class="btn-buy js-cd-add-to-cart">Select Plan</a>  </div>
            </div>
          </div>

         

        </div>

        <!-- /.container-fluid -->

      </div>
	  <?php include('include/footer.php');?>