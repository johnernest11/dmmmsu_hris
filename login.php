
<?php
session_start();
if(isset($_SESSION['Admin_login'])){
    header('location:HR-ADMIN/page/employee/employee.php');
    } 

    else if(isset($_SESSION['Dean_login'])){
        header('location:HEAD-DEANS/page/profile/dashboard.php');
        
        } else if(isset($_SESSION['Staff_login'])){
            header("location:STAFF-FACULTY/dashboard.php");
            }
           else if(isset($_SESSION['Secretary_login'])){
            header("location:SECRETARY/page/profile/dashboard.php");
            }
        else {

        }

//Getting Input value
if(isset($_POST['login'])){
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];

  if(empty($username) || empty($password)){
      $error= 'All fields are required.';
  } else {
      //Checking Login Detail
      include_once "connection.php";
      $conn = dbConnect();

      // Use prepared statements to prevent SQL injection
      $stmt = $conn->prepare("SELECT Id, employee_id, password, role, 
                              employee_department, employee_position, employee_salarygrade, 
                              employee_type, employee_status, employee_start, employee_active 
                              FROM account 
                              WHERE employee_id = :username AND password = :password 
                              AND employee_active = 'Active' AND employee_history = ''"); 
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':password', $password); 
      $stmt->execute();
      $rows = $stmt->fetch(PDO::FETCH_ASSOC);
      $count = $stmt->rowCount();

      if($count == 1){
          // Store session variables
          $_SESSION['employee_id'] = $username;
          $_SESSION['password'] = $password;
          $_SESSION['Id'] = $rows['Id'];
          $_SESSION['role'] = $rows['role'];
          // ... store other session variables as needed

          // Redirecting User Based on Role
          switch($rows['role']){
              case 'Admin':
                  $_SESSION["Admin_login"] = $rows['Id'];
                  $_SESSION["Admin_role"] = $rows['role'];
                  header('location:HR-ADMIN/page/profile/dashboard.php');
                  break;
              case 'Dean':
                  $_SESSION["Dean_login"] = $rows['Id'];
                  $_SESSION["Dean_role"] = $rows['role'];
                  header('location:HEAD-DEANS/page/profile/dashboard.php');
                  break;
              // ... other cases
          }

      } else {
          $error = 'Invalid username or password.';
      }
  }
}
?>