<!-- ########################################################################################### -->
                  <!-- connect with database to show the user info --> 
<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $query = "SELECT * FROM `users` WHERE `email` = '$_SESSION[email]' ";
    $query_run = mysqli_query($connection, $query);
    //$row = mysqli_fetch_assoc($query_run);
    $row = mysqli_fetch_assoc($query_run);
    $name = $row['name'];
    $email = $row['email'];
    //$mobile = $row['mobile'];
    //echo var_dump($row);
    //echo $row['name'];
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

  <title>User Dashboard</title>
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
                      <!-- Navigation Bar button on view profile page -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="user_dashboard.php">User Dashboard</a>
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
<!-- ########################################################################################### -->
                              <!-- form to display users details -->
            <form>
                                    <!-- showing name -->
            <div class="form-group">
					  <label>Name:</label>
					  <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
				    </div>

                                <!-- showing Mobile number -->
            <div class="form-group">
					  <label>Mobile Number:</label>
					  <input type="number" class="form-control" value="<?php echo $row['mobile'];?>" disabled>
				    </div>

                                      <!-- showing email -->
            <div class="form-group">
					  <label>Email:</label>
					  <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
				    </div><br>
            <center><a class="btn btn-secondary" href="user_dashboard.php" role="button">Go back</a></center>
            </form>
    </div>
    <div class="col-2"></div>
  </div>
</body>

</html>