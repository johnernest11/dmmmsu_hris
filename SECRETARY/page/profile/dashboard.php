<!--SIDEBAR OF THE SYSTEM-->
<?php
include_once "../sidebar.php";
?>

<main>
<!-- Begin Page Content -->
<br>
<br>
<div class="container-fluid">

<!-- Content Row -->
<div class="row">
     <!-- Grid column -->
          <div class="col-xl-4 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-users primary-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Employee Count</p>
                  <h4 class="font-weight-bold dark-grey-text">
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $Departmentt = $_SESSION['employee_department'];
                            $account = $conn->prepare("SELECT COUNT(employee_department) FROM account WHERE employee_department = '$Departmentt' ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
                  </h4>
                </div>
              </div>
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        <!-- Card -->
        
         <!-- Grid column -->
         <div class="col-xl-4 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-users purple lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Contractual</p>
                  <h4 class="font-weight-bold dark-grey-text">
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $Departmentt = $_SESSION['employee_department'];
                            $account = $conn->prepare("SELECT COUNT(employee_department) FROM account WHERE employee_department = '$Departmentt' AND employee_status='Contractual'  ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
                  </h4>
                </div>
              </div>
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                   <div class="progress-bar progress-bar-striped progress-bar-animated purple lighten-1" role="progressbar" style="width: 100%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        <!-- Card -->

         <!-- Grid column -->
         <div class="col-xl-4 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-users cyan darken-4 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Casual</p>
                  <h4 class="font-weight-bold dark-grey-text">
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $Departmentt = $_SESSION['employee_department'];
                            $account = $conn->prepare("SELECT COUNT(employee_department) FROM account WHERE employee_department = '$Departmentt' AND employee_status='Casual'  ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
                  </h4>
                </div>
              </div>
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                   <div class="progress-bar progress-bar-striped progress-bar-animated cyan darken-4" role="progressbar" style="width: 100%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        <!-- Card -->
        
         <!-- Grid column -->
         <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-users deep-orange darken-4 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">COS/JO</p>
                  <h4 class="font-weight-bold dark-grey-text">
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $Departmentt = $_SESSION['employee_department'];
                            $account = $conn->prepare("SELECT COUNT(employee_department) FROM account WHERE employee_department = '$Departmentt' AND employee_status='COS/JO'  ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
                  </h4>
                </div>
              </div>
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                   <div class="progress-bar progress-bar-striped progress-bar-animated deep-orange darken-4" role="progressbar" style="width: 100%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        <!-- Card -->

        <!-- Grid column -->
        <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-users teal accent-4 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Temporary</p>
                  <h4 class="font-weight-bold dark-grey-text">
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $Departmentt = $_SESSION['employee_department'];
                            $account = $conn->prepare("SELECT COUNT(employee_department) FROM account WHERE employee_department = '$Departmentt' AND  employee_status='Temporary' ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
                  </h4>
                </div>
              </div>
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                   <div class="progress-bar progress-bar-striped progress-bar-animated teal accent-4" role="progressbar" style="width: 100%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        <!-- Card -->

         <!-- Grid column -->
         <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-users grey darken-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Permanent</p>
                  <h4 class="font-weight-bold dark-grey-text">
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $Departmentt = $_SESSION['employee_department'];
                            $account = $conn->prepare("SELECT COUNT(employee_department) FROM account WHERE employee_department = '$Departmentt' AND employee_status='Permanent'  ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
                  </h4>
                </div>
              </div>
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                   <div class="progress-bar progress-bar-striped progress-bar-animated grey darken-1" role="progressbar" style="width: 100%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        <!-- Card -->
</div>


</div>
<!-- End of Content Wrapper -->
</div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
</main>
