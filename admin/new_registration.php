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




<!-- Navigation Bar button on user regitration page -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Library Management System</a>
      <div class="collapse navbar-collapse"></div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Admin Login</a>
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





  <!-- form input for user registration inputs= name, email, password -->
  <div class="container">
    <div class="row">
      <center><h2>Admin Registration</h2></center>
      <form  action="register.php" method="post">
        <div class="mb-3">
          <label for="Name" class="form-label" >Full Name</label>
          <input type="name" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
          <label for="Email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="Password" class="form-label" >Password</label required>
          <input type="password" class="form-control" id="password" name="pass">
        </div>

        <div class="mb-3">
          <label for="mobile" class="form-label" >Mobile Number</label required>
          <input type="mobile" class="form-control" id="mobile" name="mobile">
        </div>

        <button type="submit" class="btn btn-primary">Submit
          

        </button>
      </form>
    </div>
  </div>

</body>

</html>