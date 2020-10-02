<?php include('include/header.php');
include('include/connection.php');
?>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
   
    font-family: Raleway;
    padding: 40px;
    width: 100%;
    min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}
textarea {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}
Select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

<div class="container-fluid">

          <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800" style="text-align: left;">Add Business Listing</h1>
		 
		  <div class="col-md-8 mb-4 ">
		  
						  
<form role="form" method="post" class="shadow" id="regForm" action="listresponse.php" enctype="multipart/form-data">          
           <h6> You have Selected <?php echo $_GET['id']; ?> Plan</h6>
		  
  <h1>Business Information</h1>
  <input type="hidden" value="<?php echo $_GET['id'];?>" name="ptype" />
  <input type="hidden" value="<?php echo $_GET['d'];?>" name="pamount" />
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Basic Information
  <p><select placeholder="Business Category..."  oninput="this.className = ''" name="bcid">
  <option>--Select Business Category--</option>
							<?php

$query = mysqli_query($connect,"select * from categories");
 if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                
?><option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name'];?></option>
									  <?php }}?>
  </select>
  </p>
  <p><input placeholder="Business name..." type="text" oninput="this.className = ''" name="bname"></p>
    <p><input placeholder="Business Description..." type="text" oninput="this.className = ''" name="bdesc"></p>
    <p><input placeholder="Upload Image" type="file" oninput="this.className = ''" name="bimage"></p>
  </div>
  <div class="tab">Contact Info
  <p><textarea placeholder="Address..." oninput="this.className = ''" name="address"></textarea></p>
    <p><input type="email" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input type="text" placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
	
  </div>
  <div class="tab">Social Media Links
    <p><input type="text" placeholder="Facebook.." oninput="this.className = ''" name="fb"></p>
    <p><input type="text" placeholder="Linked-In..." oninput="this.className = ''" name="li"></p>
    <p><input type="text" placeholder="Twitter..." oninput="this.className = ''" name="tw"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn"  name="submitlist" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
	
  </div>
</form>
             </div>
        </div>
        <!-- /.container-fluid -->

      </div>
	  
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>	  
	  
	  <?php include('include/footer.php');?>