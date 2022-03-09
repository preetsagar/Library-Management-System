<!-- ###################################################################################### -->
<?php
require('functions.php');
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $query = "SELECT * FROM `admins` WHERE `email` = '$_SESSION[email]' ";
    $query_run = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($query_run);
    $name = $row['name'];
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

  <title>Admin Dashboard</title>
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



<!-- ###################################################################################### -->
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
  <div>
  <center class= alert-success><h5>Welcome <?php echo $row['name'] ?><h5></center> <!--  welcome name  -->

  <!-- ###################################################################################### -->
                                <!-- Different options of Amdins -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin_dashboard.php">Home</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"> 
                                      <!-- Add Books -->
            <li class="nav-item">
                <a class="nav-link" href="add_books.php">Add Books</a>
            </li>
                                    <!-- Remove Books -->
            <li class="nav-item">
                <a class="nav-link" href="remove_books.php">Remove Books</a>
            </li>
                                      <!-- issue book -->
            <li class="nav-item">
                <a class="nav-link" href="issue_book.php">Issue book</a>
            </li>
                                    <!-- remove issue book -->
            <li class="nav-item">
                <a class="nav-link" href="remove_issued_book.php">Remove Issued books</a>
            </li>
        </ul>

    </div>
</nav>
<!-- 1stcard -->
<div class="row">
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered User</h5>
    <p class="card-text">Total no of Registered User <?php echo get_user_count(); ?> </p>
    <a href="view_registered_user.php" class="btn btn-danger">View Registered User</a>
  </div>
</div>
</div>



<!-- 2nd card -->
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered Books</h5>
    <p class="card-text">Total no of Registered Books <?php echo get_book_count(); ?> </p>
    <a href="view_registered_books.php" class="btn btn-warning">View Registered Books</a>
  </div>
</div>
</div>



<!-- 3rd card -->
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Issued Books</h5>
    <p class="card-text">Total number of Issued Books <?php echo get_issued_book_count(); ?> </p>
    <a href="view_issued_book.php" class="btn btn-success">View Issued Books</a>
  </div>
</div>
</div>


<!-- 4th card -->
<!-- <div class="col-md-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
</div>
</div>


</body>

</html>