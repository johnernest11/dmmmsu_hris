<?php
include 'login.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel = "icon" href = "PICTURE/dmmmsu.png" type = "image/x-icon" class="img-fluid">

    <title>HRIS-DMMMSU</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<!-- sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
</script>
  <script src="js/sweetalert.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <!-- sweet alert -->
  

</head>


<body>
<br>
<br>
<br>
<br>
<br>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login">
                            <br>
                            
                            <img src="PICTURE/dmmmsu.png"class="rounded mx-auto d-block position-static" width="110%"  ></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">HUMAN RESOURCES INFORMATION SYSTEM</h1>
                                    </div>
                                       
                                        <form class="validate-form" method="POST" >
                                        <div class="form-group  validate-input" data-validate = "Employee Id is required">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="username" aria-describedby="emailHelp"
                                                placeholder="Enter Employee Id..." required>
                                        </div>
                                        <div class="form-group  validate-input" data-validate="Password is required">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password" required>
                                        </div>
                                      
                                        <input name="login" id="login"type="submit"class="btn btn-primary btn-user btn-block">
                                            
                                        </input>
                                        <hr>
                                    </form >
                                    <?php if(isset($error)){ echo $error; }?>
                                    <hr>
                                    <div class="text-center">
                                        <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>