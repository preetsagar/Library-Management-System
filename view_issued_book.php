<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $query = "SELECT * FROM `issued_books` WHERE user_email = '$_SESSION[email]' ";
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




<!-- Navigation Bar button on user regitration page -->
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
  <div>
  
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="user_dashboard.php">Home</a>
  </nav>  

<div class="row">

<div class="col-md-2"></div>
<div class = "col-md-8" >

<table class="table">
  <thead>
    <tr>
      <th scope="col">Book No.</th>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">Date Of Issue</th>

    </tr>
  </thead>
  <tbody>
                    <?php
                        $query_run = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($query_run)){
                            $book_no= $row['book_no'];
                            $name = $row['user_name'];
                            $email = $row['user_email'];
                            $date = $row['issued_date'];
                    ?>
                            <tr>
                                <td><?php echo $book_no;?></td>
                                <td><?php echo $name;?></td>
                                <td><?php echo $email;?></td>
                                <td><?php echo $date;?></td>
                            </tr>
                            <?php
                        }
                    ?>
  </tbody>
</table>

</div>
<div class = "col-md-2" ></div>


</div>



</body>

</html>