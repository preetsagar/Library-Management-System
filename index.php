<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>LMS</title>
</head>

<body>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->




<!-- ########################################################################################### -->
                <!-- Navigation Bar button on user regitration page -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Library Management System</a>
      <div class="collapse navbar-collapse"></div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="admin/index.php">Admin Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">User Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="new_registration.php">Register</a>
            </li>
          </ul>
        </ul>
    </div>
  </nav> <br> <br>




<!-- ########################################################################################### -->
                                    <!-- """USER LOGIN""" -->
  <div class="container">
    <div class="row">
      <center><h2>User Login</h2></center>
      <form  action="" method="post">
        <div class="mb-3">
          <label for="Email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="Password" class="form-label" >Password</label required>
          <input type="password" class="form-control" id="password" name="pass">
        </div>

        <button type="submit" name="login" class="btn btn-primary" >login</button><br><br>
      </form>


<!-- ########################################################################################### -->
                                <!-- check credential after login -->
      <?php
          session_start();
          if(isset($_POST['login']))    // to check if button is pressed or not
          {
            //echo "Login Button Clicked";
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, "lms");
            $query = "SELECT * FROM `users` WHERE `email` = '$_POST[email]' ";
            $query_run = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($query_run);
            $num = mysqli_num_rows($query_run);     // num stores the no of rows with entered email

            if($num) //check email exists or not
            {
                //echo "Email found in the database<br>";
                if($row['password'] == $_POST['pass']) //check password matches or not
                {
                  //echo "Password matched";
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['email'] = $row['email'];
                  header("Location:user_dashboard.php");// password matched so direct to the next page
                }
                else
                {
                  // Alert message for wrong Password
                  ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Wrong Password!!!</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <?php
                }
            }
            else{
              // Alert message for not registered user
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Not Registered!!!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              
              <?php
            }
          }
      ?>
    </div>
  </div>





</body>

</html>