<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$sql = "SELECT * FROM `books` WHERE `book_number` = '$_POST[book_number]'";
$result_book = mysqli_query($connection, $sql);
$sql = "SELECT * FROM `users` WHERE `email` = '$_POST[user_email]'";
$result_user = mysqli_query($connection, $sql);

$num1 = mysqli_num_rows($result_book);
$num2 = mysqli_num_rows($result_user);

if($num1 && $num2)
{
    //If Book number and used both are found
    $query = "DELETE from issued_books WHERE book_no ='$_POST[book_number]' AND user_email = '$_POST[user_email]'";
    $query_run = mysqli_query($connection, $query);

    echo '<script>alert("SUCCESFUL!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "admin_dashboard.php";
    </script>
    <?php
    
}
else
{
    //IF boook number does not Exist
    echo '<script>alert("Enter Correct Data!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "admin_dashboard.php";
    </script>
    
    <?php
}
?>

