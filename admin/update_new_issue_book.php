
<?php
// Add mew Books to the Issued book table

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
//check weather the Book number alredy exists or not
$sql = "SELECT * FROM `books` WHERE `book_number` = '$_POST[book_no]' ";
$result = mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);


if($num)
{
    //It means book is there in the book table check user details is correct or not
    $sql = "SELECT * FROM `users` WHERE `email` = '$_POST[user_email]' ";
    $result = mysqli_query($connection, $sql);
    $num2 = mysqli_num_rows($result);
    if($num2)   // issue the book
    {
        $query = "INSERT into issued_books values('$_POST[book_no]','$_POST[user_name]','$_POST[user_email]','$_POST[issue_date]') ";
        $query_run = mysqli_query($connection, $query);

        echo '<script>alert("Book Issued Successfully!!!")</script>'; 
        ?>
        <script type="text/javascript">
            window.location.href = "admin_dashboard.php";
        </script>
        <?php
    }
    else
    {
        echo '<script>alert("Enter correct user Details!!!")</script>'; 
        ?>
        <script type="text/javascript">
            window.location.href = "admin_dashboard.php";
        </script>
        
        <?php

    }
}
else
{
    //If book number not available 
    echo '<script>alert("Enter correct book Details!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "admin_dashboard.php";
    </script>
    
    <?php
    
}
?>

