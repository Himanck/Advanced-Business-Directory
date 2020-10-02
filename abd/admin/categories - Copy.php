<?php include('include/header.php');?>
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
		  <div class="col-md-8">
<form role="form" method="post" action="emp_transac.php?action=add">          
              <div class="form-group">
                <input class="form-control" placeholder="First Name" name="firstname" required="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Last Name" name="lastname" required="">
              </div>
              <div class="form-group">
                  <select class="form-control" name="gender" required="">
                    <option value="" disabled="" selected="" hidden="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Email" name="email" required="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Phone Number" name="phonenumber" required="">
              </div>
              <div class="form-group">
                <select class="form-control" name="jobs" required="">
        <option value="" disabled="" selected="" hidden="">Select Job</option><option value="1">Manager</option><option value="2">Cashier</option></select>              </div>
              <div class="form-group">
                <input placeholder="Hired Date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="FromDate" name="hireddate" class="form-control">
              </div>
              <div class="form-group">
                <select class="form-control" id="province" placeholder="Province" name="province" required=""><option selected="" disabled="">Select Province</option><option>Abra</option><option>Agusan del Norte</option><option>Agusan del Sur</option><option>Aklan</option><option>Albay</option><option>Antique</option><option>Apayao</option><option>Aurora</option><option>Basilan</option><option>Bataan</option><option>Batanes</option><option>Batangas</option><option>Benguet</option><option>Biliran</option><option>Bohol</option><option>Bukidnon</option><option>Bulacan</option><option>Cagayan</option><option>Camarines Norte</option><option>Camarines Sur</option><option>Camiguin</option><option>Capiz</option><option>Catanduanes</option><option>Cavite</option><option>Cebu</option><option>Compostela Valley</option><option>Cotabato</option><option>Davao del Norte</option><option>Davao del Sur</option><option>Davao Oriental</option><option>Dinagat Islands</option><option>Eastern Samar</option><option>Guimaras</option><option>Ifugao</option><option>Ilocos Norte</option><option>Ilocos Sur</option><option>Iloilo</option><option>Isabela</option><option>Kalinga</option><option>La Union</option><option>Laguna</option><option>Lanao del Norte</option><option>Lanao del Sur</option><option>Leyte</option><option>Maguindanao</option><option>Marinduque</option><option>Masbate</option><option>Metro Manila</option><option>Misamis Occidental</option><option>Misamis Oriental</option><option>Mountain Province</option><option>Negros Occidental</option><option>Negros Oriental</option><option>Northern Samar</option><option>Nueva Ecija</option><option>Nueva Vizcaya</option><option>Occidental Mindoro</option><option>Oriental Mindoro</option><option>Palawan</option><option>Pampanga</option><option>Pangasinan</option><option>Quezon</option><option>Quirino</option><option>Rizal</option><option>Romblon</option><option>Samar</option><option>Sarangani</option><option>Shariff Kabunsuan</option><option>Siquijor</option><option>Sorsogon</option><option>South Cotabato</option><option>Southern Leyte</option><option>Sultan Kudarat</option><option>Sulu</option><option>Surigao del Norte</option><option>Surigao del Sur</option><option>Tarlac</option><option>Tawi-Tawi</option><option>Zambales</option><option>Zamboanga del Norte</option><option>Zamboanga del Sur</option><option>Zamboanga Sibugay</option></select>
              </div>
              <div class="form-group">
                <select class="form-control" id="city" placeholder="City" name="city" required=""><option selected="" disabled="">Select City / Municipality</option></select>
              </div>
              <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
                 
          </form></div>
        </div>
        <!-- /.container-fluid -->

      </div>
	  <?php include('include/footer.php');?>