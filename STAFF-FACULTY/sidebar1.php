<?php

    include 'assets/session.php';   
    include "assets/profile_query.php";
if(!isset($_SESSION['Staff_login'])){
    header('location:../index.php');
    header("location:../STAFF-FACULTY/dashboard.php");
    } 

    else if(isset($_SESSION['Dean_login'])){
        header('location:../HEAD-DEANS/home.php');
        
        } else if(isset($_SESSION['Admin_login'])){
            header('location:../index.php');;
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
  <link rel = "icon" href = "../PICTURE/dmmmsu.png" type = "image/x-icon" class="img-fluid"> 
  <title>HRIS</title>
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- DataTables.net  -->
  <link rel="stylesheet" type="text/css" href="css/addons/datatables.min.css">
  <link rel="stylesheet" href="css/addons/datatables-select.min.css">
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="js/sweetalert.js"></script>

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn cyan-skin">

  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="../PICTURE/dmmmsu.png" width="25%"></a>
          </div>
        </li>

        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">

            <li>
              <a class="collapsible-header waves-effect" href="dashboard.php">
                <i class="w-fa fas fa-tachometer-alt"></i>Dashboard
              </a>
            </li>
            <?php
                    ob_start();
                    include_once "assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM account 
                   WHERE Id = $_SESSION[Id];");
                    
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                    $acc_id =$result["Id"];
                    $Status= $result['employee_status'];
                    $Status1 ="    <li>
                    <a class='collapsible-header waves-effect arrow-r'>
                      <i class='w-fa fas fa-image'></i>Leave<i class='fas fa-angle-down rotate-icon'></i>
                    </a>
                    <div class='collapsible-body'>
                      <ul>
                        <li>
                          <a href='#' data-toggle='modal' data-target='#Instruction_leaveModal'>Request</a>
                        </li>
                        <li>
                          <a href='leave_status.php' class='waves-effect'>Status</a>
                        </li>
                        <li>
                          <a href='leave_history.php' class='waves-effect'>History</a>
                        </li>
                        <li>
                          <a href='leave_indexcard.php' class='waves-effect'>Leave Index Card</a>
                        </li>
                      </ul>
                    </div>
                  </li>";
                   
                    $COSJO ="   ";
                    
                     if($Status == 'COS/JO'){
                        $Status =  $COSJO;
                    }else{
                        $Status =   $Status1;
                                                                             }
                        
                      echo '<tr>
                                    <td>'.$Status.'</td>
                                   
                            </tr>';
                    }
                    
                    ob_end_flush();
                    ?>

            <!-- <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-image"></i>Leave<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="leave_request.php" class="waves-effect">Request</a>
                  </li>
                  <li>
                    <a href="leave_status.php" class="waves-effect">Status</a>
                  </li>
                  <li>
                    <a href="employee_account.php" class="waves-effect">History</a>
                  </li> 
                </ul>
              </div>
            </li> -->

            <!-- <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-user"></i>Leaves<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="employee_leave.php" class="waves-effect">Request Leave</a>
                  </li>
                  <li>
                    <a href="employee_leave_approved.php" class="waves-effect">Approved Leave</a>
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
                    <a href="department.php" class="waves-effect">List</a>
                  </li>
                  <li>
                   <a href="../css/media.html" class="waves-effect">Media object</a>
                  </li>
                </ul>
              </div> -->
            </li>
            
             
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
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span
                class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['role'];?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="hr_PDS.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                My PDS
            </a> -->
            <a class="dropdown-item" href="profile.php">
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
                    <a class="btn btn-danger" href="assets/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


<!-- ----------------------------------------------------------------------LEAVE INSTRUCTION MODAL MODAL ----------------------- -->

<div class="modal fade" id="Instruction_leaveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <div  class="col-md-6">
              <h5 class="modal-title font-weight-bold dark-grey-text" id="exampleModalLabel" align="center">INSTRUCTIONS AND REQUIREMENTS</h5>
            </div>
               <div  class="col-md-6 text-right">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                <p class=" font-weight-bold dark-grey-text text-end">LEAVE REQUEST FORM </p>

            </div>
              
            </div>
            <div class="modal-body">
            <form action="leave_request.php?">
                <div class="container-fluid">
                  <p class=" font-weight-bold dark-grey-text"><b>Application for any type of leave shall be made on this Form and to be accomplished at least in duplicate with documentary requirements, as follows:</b> </p>
                <h6 class=" font-weight-bold dark-grey-text">1. Vacation leave* </h6>
                <p>It shall be filed five (5) days in advance, whenever possible, of the effective date of such leave.  Vacation leave within in the Philippines or abroad shall be indicated in the form for purposes of securing travel authority and completing clearance from money and work accountabilities.  
                 </p>
               <h6 class=" font-weight-bold dark-grey-text">2. Mandatory/Forced leave</h6> 
               <p> Annual five-day vacation leave shall be forfeited if not taken during the year.  In case the scheduled leave has been cancelled in the exigency of the service by the head of agency, it shall no longer be deducted from the accumulated vacation leave.  Availment of one (1) day or more Vacation Leave (VL) shall be considered for complying the mandatory/forced leave subject to the conditions under Section 25, Rule XVI of the Omnibus Rules Implementing E.O. No. 292.</p> 
                 </h6>
                 <h6>
                <h6 class=" font-weight-bold dark-grey-text">3. Sick leave* </h6>  
               <p> • It shall be filed immediately upon employee's return from such leave.<br> 
                • If filed in advance or exceeding five (5) days, application shall be accompanied by a medical certificate.  In case medical consultation was not availed of, an affidavit should be executed by an applicant. 
                </p>
               <h6 class=" font-weight-bold dark-grey-text">4. Maternity leave* – 105 days </h6> 
               <p> • Proof of pregnancy e.g. ultrasound, doctor’s certificate on the expected date of delivery <br> 
                • Accomplished Notice of Allocation of Maternity Leave Credits (CS Form No. 6a), if needed <br> 
                • Seconded female employees shall enjoy maternity leave with full pay in the recipient agency. 
                 </p>
               <h6 class=" font-weight-bold dark-grey-text"> 5. Paternity leave – 7 days  </h6>
                <p>Proof of child’s delivery e.g. birth certificate, medical certificate and marriage contract 
                </p>
                 
               <h6 class=" font-weight-bold dark-grey-text"> 6. Special Privilege leave – 3 days </h6>
                <p>It shall be filed/approved for at least one (1) week prior to availment, except on emergency cases.  Special privilege leave within the Philippines or abroad shall be indicated in the form for purposes of securing travel authority and completing clearance from money and work accountabilities. 
                 </p>
                <h6 class=" font-weight-bold dark-grey-text">7. Solo Parent leave – 7 days </h6>
                <p>It shall be filed in advance or whenever possible five (5) days before going on such leave with updated Solo Parent Identification Card. 
                 </p>
               <h6 class=" font-weight-bold dark-grey-text"> 8. Study leave* – up to 6 months </h6> 
                <p>• Shall meet the agency’s internal requirements, if any; <br> 
                • Contract between the agency head or authorized representative and the employee concerned.  
                 </p>
               <h6 class=" font-weight-bold dark-grey-text"> 9. VAWC leave – 10 days  </h6>
               <p> • It shall be filed in advance or immediately upon the woman employee’s return from such leave.  <br>  
                • It shall be accompanied by any of the following supporting documents: <br> 
                a. Barangay Protection Order (BPO) obtained from the barangay; <br> 
                b. Temporary/Permanent Protection Order (TPO/PPO) obtained from the court; <br> 
                c. If the protection order is not yet issued by the barangay or the court, a certification issued by the Punong Barangay/Kagawad or 
                Prosecutor or the Clerk of Court that the application for the BPO, TPO or PPO has been filed with the said office shall be sufficient to support the application for the ten-day leave; or 
                d. In the absence of the BPO/TPO/PPO or the certification, a police report specifying the details of the occurrence of violence on the victim and a medical certificate may be considered, at the discretion of the immediate supervisor of the woman employee concerned.  </p>
               <h6 class=" font-weight-bold dark-grey-text"> 10. Rehabilitation leave* – up to 6 months</h6> 
               <p> • Application shall be made within one (1) week from the time of the accident except when a longer period is warranted.  <br>  
                • Letter request supported by relevant reports such as the police report, if any,  <br> 
                • Medical certificate on the nature of the injuries, the course of treatment involved, and the need to undergo rest, recuperation, and rehabilitation, as the case may be. <br> 
                • Written concurrence of a government physician should be obtained relative to the recommendation for rehabilitation if the attending physician is a private practitioner, particularly on the duration of the period of rehabilitation. </p>
               <h6 class=" font-weight-bold dark-grey-text"> 11. Special leave benefits for women* – up to 2 months </h6>
                <p>• The application may be filed in advance, that is, at least five (5) days prior to the scheduled date of the gynecological surgery that will be undergone by the employee.  In case of emergency, the application for special leave shall be filed immediately upon employee’s return but during confinement the agency shall be notified of said surgery.<br>  
                • The application shall be accompanied by a medical certificate filled out by the proper medical authorities, e.g. the attending surgeon accompanied by a clinical summary reflecting the gynecological disorder which shall be addressed or was addressed by the said surgery; the histopathological report; the operative technique used for the surgery; the duration of the surgery including the perioperative period (period of confinement around surgery); as well as the employees estimated period of recuperation for the same. </p>
               <h6 class=" font-weight-bold dark-grey-text"> 12. Special Emergency (Calamity) leave – up to 5 days  </h6>
                <p>• The special emergency leave can be applied for a maximum of five (5) straight working days or staggered basis within thirty (30) days from the actual occurrence of the natural calamity/disaster. Said privilege shall be enjoyed once a year, not in every instance of calamity or disaster. <br> 
                • The head of office shall take full responsibility for the grant of special emergency leave and verification of the employee’s eligibility to be granted thereof.  Said verification shall include: validation of place of residence based on latest available records of the affected employee; verification that the place of residence is covered in the declaration of calamity area by the proper government agency; and such other proofs as may be necessary. </p>
                <h6 class=" font-weight-bold dark-grey-text">13. Monetization of leave credits</h6> 
               <p> Application for monetization of fifty percent (50%) or more of the accumulated leave credits shall be accompanied by letter request to the head of the agency stating the valid and justifiable reasons. 
                 </p>
                <h6 class=" font-weight-bold dark-grey-text">14. Terminal leave* </h6>
                <p>Proof of employee’s resignation or retirement or separation from the service.   
                </p>
               <h6 class=" font-weight-bold dark-grey-text"> 15. Adoption Leave</h6>
                <p>• Application for adoption leave shall be filed with an authenticated copy of the Pre-Adoptive Placement Authority issued by the Department of Social Welfare and Development (DSWD). 
                </p>
              <br>
              <p class=" font-weight-bold dark-grey-text">* For leave of absence for thirty (30) calendar days or more   and terminal leave, application shall be accompanied by a clearance from money, property and   work-related accountabilities (pursuant to CSC Memorandum Circular No. 2, s. 1985). </p>
              <!-- Checkbox -->
               
                </div>
                         <div class="col-12">
    <div class="form-check text-right">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12 text-right">


    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
                </div>
            </div>
          </div>
      </div>



    
<!----------------------------------------------------------------------END OF PROGRAM ATTENDED MODAL -----------------------



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
  <!-- DataTables  -->
  <script type="text/javascript" src="js/addons/datatables.min.js"></script>
  <!-- DataTables Select  -->
  <script type="text/javascript" src="js/addons/datatables-select.min.js"></script>
  
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



    
    
    
  </script>
   <script src="../../Inputmask/dist/inputmask.min.js"></script>

<!-- As A jQuery Plugin -->

<script src="../../Inputmask/cdn/jquery.min.js"></script>

<script src="../../Inputmask/dist/jquery.inputmask.min.js"></script>

<!-- Allows data-input attribute -->

<script src="../../Inputmask/dist/bindings/inputmask.binding.js"></script>