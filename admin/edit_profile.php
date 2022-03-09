<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $query = "SELECT * FROM `admins` WHERE `email` = '$_SESSION[email]' ";
    $query_run = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($query_run);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Edit Profile</title>
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




<!-- Navigation Bar button on user regitration page -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="admin_dashboard.php">Admin Dashboard</a>
      <div class="collapse navbar-collapse"></div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <ul class="nav navbar-nav navbar-right">
            <!--  Profile Button  -->

            
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
                <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
                <li><a class="dropdown-item" href="change_password.php">Change Passowrd </a></li>
            </ul>
            </div>

            <!--  Logout Button  -->
            <a href="logout.php" class="btn btn-secondary" role="button" >Logout</a>

          </ul>
        </ul>
    </div>
  </nav>

  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
            <!-- form to display admin details -->
            <form  action="update.php" method="post">
        <div class="mb-3">
          <label for="Name" class="form-label" >Full Name</label>
          <input type="text" class="form-control" name="name" id="name" value= '<?php echo $name; ?>'>
        </div>


        <div class="mb-3">
            <label for="mobile" class="form-label" >Mobile Number</label>
            <input type="number" class="form-control" id="mobile" name="mobile" value= '<?php echo $mobile;?>'>
        </div>


        <div class="mb-3">
          <label for="Email" class="form-label">Email address</label>
          <input type="text" class="form-control" id="email" name="email" value= '<?php echo $email; ?>' disabled>
        </div>

        <center><button type="update" class="btn btn-primary">Update</button></center>
        
      </form>
    </div>
    <div class="col-2"></div>
  </div>
</body>

</html>