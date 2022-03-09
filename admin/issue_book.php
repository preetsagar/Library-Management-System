<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Issue Book</title>
  </head>
  <body>
    <!-- <h1>add_book.php</h1> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="admin_dashboard.php">Home</a>
  </nav> 


<center><h2>Issue a Book</h2></center>


<div class="row">

<div class="col-md-3"></div>
<div class="col-md-6">
  <form  action="update_new_issue_book.php" method="post">
        <div class="mb-3">
          <label for="book_no" class="form-label" >Book Number</label>
          <input type="number" class="form-control" id="book_no" name='book_no'>
        </div>

        <div class="mb-3">
          <label for="user_name" class="form-label" >User Name</label>
          <input type="text" class="form-control" id="user_name" name='user_name'>
        </div>

        <div class="mb-3">
          <label for="user_email" class="form-label" >User Email</label>
          <input type="text" class="form-control" id="user_email" name='user_email'>
        </div>

        <div class="mb-3">
          <label for="issue_date" class="form-label" >Issue Date</label>
          <input type="date" class="form-control" id="issue_date" name='issue_date'>
        </div>

        <center><button type="submit" class="btn btn-success">Issue</button></center>
        
</form>
</div>
<div class="col-md-3"></div>

</div>




</html>