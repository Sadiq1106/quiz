<?php
include_once "class/UserManagement.php";

$userManagementObj = new UserManagement();

$success = true;
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = test_input($_POST["email"]);
    
    // validation for email
    if (empty($email)) {
        $errorMsg .= "Please enter.<br>";
        $success = false;
    } else {

            $errorMsg .= "Sent successfully";
            //$success = false;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>03 Lab</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
    <?php
    if (!empty($errorMsg)) {
        echo "<div class='alert alert-danger alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>$errorMsg
              </div>";
    }
    ?>
 <?php echo '<p>Hello World</p>'; ?>
 <section class="py-5">
        <div class="container my-5">
            <form action="checkforgetpassword.php" method="post">
                <div class="container">
                    <h2>Search</h2>
                    <div class="form-group">
                        <label for="email">Search:</label>
                        <input type="text" class="form-control" id="email" placeholder="Search" name="email">
                    </div>
                    <br>
                    <div class="clearfix">
                        <input type="button" name="cancel" class="btn btn-danger" style="float:left;" value="Cancel"
                            formnovalidate onclick="location.href='login.php'">
                        <input name="submit" type="submit" class="btn btn-primary "></button>
                    </div>
                </div>
            </form>
        </div>
    </section> 
 </body>
</html>