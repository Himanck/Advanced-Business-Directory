  <?php include('include/header.php');
  include('include/connection.php');
  ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Welcome <?php echo $_SESSION['username'];?></h1>
              </div>

          <!-- Content Row -->
          <div class="row" style="margin-top:150px;">

            <!-- Earnings (Monthly) Card Example -->
           
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Categories</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
					  <?php 
                          $query = "SELECT COUNT(*) FROM categories";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                              echo "$row[0]";
                            }
                          ?>
					  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Business Lists</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
						  <?php 
                          $query = "SELECT COUNT(*) FROM business_listing";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                              echo "$row[0]";
                            }
                          ?>
						  </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
              </div>

          <!-- Content Row -->

        
            </div>
      </div>
      <!-- Footer -->
      <?php include('include/footer.php');?>