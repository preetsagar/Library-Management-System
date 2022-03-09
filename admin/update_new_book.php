
<?php
// Add mew Books to the Data base

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");

//check weather Book number alredy exists or not
$sql = "SELECT * FROM `books` WHERE `book_number` = '$_POST[book_number]' ";
$result = mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);


if($num)
{
    //IF boook number Alredy Exists
    echo '<script>alert("Book Number Already Exists!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "add_books.php";
    </script>
    
    <?php
}
else
{
    //If Book number is not used before
    $query = "insert into books values(null,'$_POST[book_name]','$_POST[author]','$_POST[category]','$_POST[book_number]','$_POST[book_price]')";
    $query_run = mysqli_query($connection, $query);

    echo '<script>alert("Book Added  SUCCESFULLY!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "admin_dashboard.php";
    </script>
    <?php
}
?>

