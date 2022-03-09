<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add book</title>
  </head>
  <body>
    <!-- <h1>add_book.php</h1> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  
  
                                                                            <!-- Heading -->
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="admin_dashboard.php">Home</a>
  </nav><br>
  

<center><h3>Remove Book From Database</h3></center><br><br>




<div class="row">

<div class="col-md-3"></div>
<div class="col-md-6">
  <form  action="remove_book_from_db.php" method="post">
        <div class="mb-3">
          <label for="book_name" class="form-label" >Name of The Book</label>
          <input type="text" class="form-control" id="book_name" name='book_name'>
        </div>

        <div class="mb-3">
          <label for="book_number" class="form-label" >Book Number</label>
          <input type="number" class="form-control" id="book_number" name='book_number'>
        </div>

        <center><button type="submit" class="btn btn-danger">Remove book</button></center>
        
</form>
</div>
<div class="col-md-3"></div>

</div>

</html>