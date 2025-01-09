<?php
    include '../../assets/session.php';   
if(!isset($_SESSION['Dean_login'])){
    header('location:../index.php');
    } 
    
    else if(isset($_SESSION['Admin_login'])){
        header('location:../HR-ADMIN/home.php');
        
        } else if(isset($_SESSION['Staff_login'])){
            header("location:../STAFF-FACULTY/dashboard.php");
            }     
        else {

        }
   
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel = "icon" href = "../../../PICTURE/dmmmsu.png" type = "image/x-icon" class="img-fluid"> 
  <title>HRIS</title>
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="../../bootstrap/css/font.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../bootstrap/css/mdb.min.css">
  <!-- DataTables.net  -->
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/addons/datatables.min.css">
  <link rel="stylesheet" href="../../bootstrap/css/addons/datatables-select.min.css">
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../bootstrap/js/sweetalert.js"></script>


  <!-- Your custom styles (optional) -->
  <style>
  input::-webkit-outer-spin-button,
          input::-webkit-inner-spin-button {
           -webkit-appearance: none;
           margin: 0;
              }

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="../../../PICTURE/dmmmsu.png" width="25%"></a>
          </div>
        </li>

        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">

            <li>
              <a class="collapsible-header waves-effect" href="../profile/dashboard.php">
                <i class="w-fa fas fa-tachometer-alt"></i>Dashboards
              </a>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-user"></i>Leave Request<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class='collapsible-body'>
                      <ul>
                        <li>
                          <a href='../leave/leave_request.php' class='waves-effect'>Request</a>
                        </li>
                        <li>
                          <a href='../leave/leave_status.php' class='waves-effect'>Status</a>
                        </li>
                        <li>
                          <a href='../leave/leave_history.php' class='waves-effect'>History</a>
                        </li>
                        <li>
                          <a href='../leave/leave_indexcard.php' class='waves-effect'>Leave Index Card</a>
                        </li>
                      </ul>
                    </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-user"></i>Employee Leave Request<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../emp_leave/employee_leave.php" class="waves-effect">Requested Leave</a>
                  </li>
                  <li>
                    <a href="../emp_leave/employee_leave_history.php" class="waves-effect">History</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fab fa-css3"></i>Department<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../emp_leave/employee.php" class="waves-effect">Employee</a>
                  </li>
                  <li>
                    <!-- <a href="../css/media.html" class="waves-effect">Media object</a> -->
                  </li>
                </ul>
              </div>
            </li>
            <li>
             
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>Human Resources Information System </p>
      </div>

      <div class="d-flex change-mode">
        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <!-- <li class="nav-item dropdown notifications-nav">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="badge red">3</span> <i class="fas fa-bell"></i>
              <span class="d-none d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                <span>Your campaign is about to end</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
                class="clearfix d-none d-sm-inline-block">Contact</span></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link waves-effect text-dark digital-clock"><i class="far fa-comments"></i> <span
                class="clearfix d-none d-sm-inline-block">00:00:00</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['role'];?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="../profile/pds.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                PDS
            </a>
            <a class="dropdown-item" href="../profile/profile.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>    
            </div>
          </li>

        </ul>

    </nav>
    <!-- Navbar -->
    </div>

  </header>
  <!-- Main Navigation -->

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="../../assets/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../../bootstrap/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../bootstrap/js/mdb.min.js"></script>
  
  <!-- DataTables  -->
  <script type="text/javascript" src="../../bootstrap/js/addons/datatables.min.js"></script>
  <!-- DataTables Select  -->
  <script type="text/javascript" src="../../bootstrap/js/addons/datatables-select.min.js"></script>
  
  <!-- Initializations -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    // Small chart
    $(function () {
      $('.min-chart#chart-sales').easyPieChart({
        barColor: "#4285F4",
        onStep: function (from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    });



    //bar
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
      type: 'bar',
      data: {
        labels: ["January", "Febuary", "March", "April", "May"],
        datasets: [{
          label: '# of Votes',
          data: [13, 19, 8, 11, 5],
          backgroundColor: [
            'rgba(255, 99, 132, 0.3)',
            'rgba(41, 182, 246, 0.3)',
            'rgba(255, 187, 51, 0.3)',
            'rgba(66, 133, 244, 0.3)',
            'rgba(153, 102, 255, 0.3)',

          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(41, 182, 246, 1)',
            'rgba(255, 187, 51, 1)',
            'rgba(66, 133, 244, 1)',
            'rgba(153, 102, 255, 1)',

          ],
          borderWidth: 2
        }]
      },
      optionss: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    
    
  </script>

<script>
$(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
  $('.digital-clock');
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var h = addZero(twelveHour(date.getHours()));
  var m = addZero(date.getMinutes());
  var s = addZero(date.getSeconds());
  
  $('.digital-clock').text(h + ':' + m + ':' + s).text(new Date())
}
</script>

 <script src="../../Inputmask/dist/inputmask.min.js"></script>

<!-- As A jQuery Plugin -->

<script src="../../Inputmask/cdn/jquery.min.js"></script>

<script src="../../Inputmask/dist/jquery.inputmask.min.js"></script>

<!-- Allows data-input attribute -->

<script src="../../Inputmask/dist/bindings/inputmask.binding.js"></script>