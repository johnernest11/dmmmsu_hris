<!--SIDEBAR OF THE SYSTEM-->
<?php
include_once "../sidebar1.php";
?>

<main>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row ">
     <!-- Grid column -->
    <div class="col-xl-2 col-md-6 mb-xl-3 mb-4">
      <!-- Card -->
      <div class="card card-cascade cascading-admin-card">
      <div class="row mt-3">
      <div class="col-md-5 col-5 text-left pl-4">
        <a type="button" class="btn-floating btn-lg light-blue lighten-1 ml-4"><i class="fas fa-users"
            aria-hidden="true"></i></a>
      </div>
      <div class="col-md-7 col-7 text-right pr-5">
        <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
        <?php
                      ob_start();
                      include_once "../../assets/connection.php";
                      $conn = dbConnect();
                      $account = $conn->prepare("SELECT COUNT(Id) FROM account WHERE employee_history = '' AND employee_active ='Active' ");
                      $account->execute();
                      $result =$account->fetchColumn();
                      echo '
                              <a>'.$result.'</a>';
                      ob_end_flush();
                  ?>
               </h5>
              <p class="font-small grey-text">Employee</p>
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
          <div class="col-xl-2 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
            <div class="row mt-3">
            <div class="col-md-5 col-5 text-left pl-4">
              <a type="button" class="btn-floating btn-lg purple lighten-1 ml-4"><i class="fas fa-users"
                  aria-hidden="true"></i></a>
            </div>
            <div class="col-md-7 col-7 text-right pr-5">
              <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
              <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT COUNT(Id) FROM account 
                            WHERE employee_status='Contractual' AND employee_history = '' AND employee_active ='Active'  ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
               </h5>
              <p class="font-small grey-text">Contractual</p>
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
        <div class="col-xl-2 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
            <div class="row mt-3">
            <div class="col-md-5 col-5 text-left pl-4">
              <a type="button" class="btn-floating btn-lg cyan darken-4 ml-4"><i class="fas fa-users"
                  aria-hidden="true"></i></a>
            </div>
            <div class="col-md-7 col-7 text-right pr-5">
              <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
              <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT COUNT(Id) FROM account 
                            WHERE employee_status='Casual' AND employee_history = '' AND employee_active ='Active' ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
               </h5>
              <p class="font-small grey-text">Casual</p>
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
        <div class="col-xl-2 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
            <div class="row mt-3">
            <div class="col-md-5 col-5 text-left pl-4">
              <a type="button" class="btn-floating btn-lg deep-orange darken-4 ml-4"><i class="fas fa-users"
                  aria-hidden="true"></i></a>
            </div>
            <div class="col-md-7 col-7 text-right pr-5">
              <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
              <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT COUNT(Id) FROM account 
                            WHERE  employee_status='COS/JO' AND employee_history = '' AND employee_active ='Active' ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
               </h5>
              <p class="font-small grey-text">COS/JO</p>
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
                  <div class="col-xl-2 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
            <div class="row mt-3">
            <div class="col-md-5 col-5 text-left pl-4">
              <a type="button" class="btn-floating btn-lg teal accent-4 ml-4"><i class="fas fa-users"
                  aria-hidden="true"></i></a>
            </div>
            <div class="col-md-7 col-7 text-right pr-5">
              <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
              <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT COUNT(Id) FROM account 
                            WHERE  employee_status='Temporary' AND employee_history = '' AND employee_active ='Active'  ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
               </h5>
              <p class="font-small grey-text">Temporary</p>
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
                   <div class="col-xl-2 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
            <div class="row mt-3">
            <div class="col-md-5 col-5 text-left pl-4">
              <a type="button" class="btn-floating btn-lg grey darken-1 ml-4"><i class="fas fa-users"
                  aria-hidden="true"></i></a>
            </div>
            <div class="col-md-7 col-7 text-right pr-5">
              <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
              <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT COUNT(Id) FROM account 
                            WHERE  employee_status='Permanent' AND employee_history = ''  AND employee_active ='Active' ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
               </h5>
              <p class="font-small grey-text">Permanent</p>
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

            <!-- Grid column -->
            <div class="col-xl-6 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
            <div class="row mt-3">
            <div class="col-md-5 col-5 text-left pl-4">
              <a type="button" class="btn-floating btn-lg red accent-4 ml-4"><i class=" fas fa-user-graduate"
                  aria-hidden="true"></i></a>
            </div>
            <div class="col-md-7 col-7 text-right pr-5">
              <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
              <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT COUNT(Id) FROM account  AS a
                            INNER JOIN emp_education  As e ON a.Id = e.account_id WHERE
                            gad_name !='' AND a.employee_history = '' AND a.employee_active ='Active' ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
               </h5>
              <p class="font-small grey-text">Masteral</p>
              <a href="../employee/employee_masteral.php" >View </a>
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

            <!-- Grid column -->
            <div class="col-xl-6 col-md-6 mb-xl-3 mb-4">
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
            <div class="row mt-3">
            <div class="col-md-5 col-5 text-left pl-4">
              <a type="button" class="btn-floating btn-lg purple darken-4 ml-4"><i class=" fas fa-user-graduate"
                  aria-hidden="true"></i></a>
            </div>
            <div class="col-md-7 col-7 text-right pr-5">
              <h5 class="ml-4 mt-4 mb-2 font-weight-bold">
              <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT COUNT(Id) FROM account  AS a
                            INNER JOIN emp_education  As e ON a.Id = e.account_id WHERE
                            gad_namee !='' AND a.employee_history = '' AND a.employee_active ='Active' ");
                            $account->execute();
                            $result =$account->fetchColumn();
                            echo '
                                    <a>'.$result.'</a>';
                            ob_end_flush();
                        ?>
               </h5>
              
              <p class="font-small grey-text">Doctorate</p>
              <a href="../employee/employee_doctorate.php" >View </a>
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

</div>

<div class="row">
     <!-- Grid column -->
     <div class="col-lg-3 col-md-12 mb-4">

        <!-- Card -->
        <div class="card card-cascade narrower ">
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center ">
          <?php
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT count(account_id)  as gender,employee_sex
                            FROM emp_profile GROUP BY employee_sex ");
                            $account->execute();
                            $result = $account->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <script type="text/javascript" src="../../bootstrap/js/demo/chart-pie-google.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);
                               
                                function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    
                                    <?php foreach($result as $key=>$val) {?>
                                    ['<?php echo $val['employee_sex'];?>',<?php echo $val['gender'];?>],
                                    <?php } ?>
                                                        
                                    ]);
                                            var options = {
                                    legend:'bottom',
                                    width:310,
                                    height:300};

                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                    chart.draw(data, options);
                                }
                            </script>
    <canvass id="piechart" style=" height: 300px;"></canvass>


          </div>
          <!-- Card content -->

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

       <!-- Grid column -->
       <div class="col-lg-9 col-md-12 mb-4">

        <!-- Card -->
        <div class="card card-cascade narrower ">
               
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center ">
          <?php
            include_once "../../assets/connection.php";
            $conn = dbConnect();
            $account1 = $conn->prepare("SELECT count(Id)  as count1,employee_department
                FROM account  GROUP BY employee_department ");
            $account1->execute();
            $result = $account1->fetchAll(PDO::FETCH_ASSOC);
            ?>
            
            <script type="text/javascript">
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawRightY);

                function drawRightY() {
                var data = google.visualization.arrayToDataTable([
                    ['Employees', ''],
                    <?php foreach($result as $key=>$val) 
                    {?>
                    ['<?php echo $val['employee_department'];?>',<?php echo $val['count1'];?>],
                   
                <?php } ?>
                ]);

                var materialOptions = {
                  width: 950,
                  height: 800,
                  responsive:true,
                    chart: {
                    title: 'Population of DMMMSU-MLUC',
                   
                    },
                    hAxis: {
                    title: 'Total Population',
                    minValue: 0,
                    },
                    bars: 'horizontal',
                    axes: {
                    y: {
                    0: {side: 'left'}
                        }
                        }
                    };
                
                                    
                var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
                        materialChart.draw(data, materialOptions);
            }
        </script>
       <script type="text/javascript" src="../../bootstrap/js/demo/chart-bar-google.js"></script>
       <div class="table-responsive">
       <table class="table table-hover table-responsive department">
           <tr>
            <th><canvass id="chart_div" ></canvass></th>
           </tr>
          </table>
       </div>

          </div>
          <!-- Card content -->

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->
      </div>


<!-- Section: data tables -->
<section class="section">

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 col-lg-4 ">


<!-- Card content -->
<div class="card-body card-body-cascade pb-0">
     
          <!-- Card content -->
        <div class="card-body card-body-cascade pb-0">

          <!-- Panel data -->
          <div class="row py-3 pl-4">
        
          </div>
          <!-- Panel data -->

        </div>
        <!-- Card content -->

      </div>

    </div>

  </div>



</div>
<!-- Grid row -->

</section>
<!-- Section: data tables -->



<!-- ------------------------------------------------------Content Row --------------------------------------------------->
<br>



</div>
<!-- End of Content Wrapper -->
</div>
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script>
    $(document).ready(function() {
    var table = $('table.department').DataTable();
     $('table.employee tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
} );
</script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
    
</main>
