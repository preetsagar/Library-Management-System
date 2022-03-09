<?php

// Add mew Books to the Data base
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
//check weather Book number alredy exists or not
$sql = "SELECT * FROM `books` WHERE `book_number` = '$_POST[book_number]'";
$result = mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);


if($num)
{
    
    //If Book number is found then check is that book issued to someone
    $sql = "SELECT * FROM `issued_books` WHERE `book_no` = '$_POST[book_number]'";
    $result = mysqli_query($connection, $sql);
    $num2 = mysqli_num_rows($result);
    if($num2)       // means that book is issued to sone one
    {
        echo '<script>alert("Can Not Delete!! book is issued to Someone")</script>'; 
        ?>
        <script type="text/javascript">
            window.location.href = "admin_dashboard.php";
        </script>
        <?php
    }
    else    // delete the book
    {

            $query = "DELETE from books WHERE book_number ='$_POST[book_number]' ";
            $query_run = mysqli_query($connection, $query);

            echo '<script>alert("Book Removed  SUCCESFULLY!!!")</script>'; 
            ?>
            <script type="text/javascript">
                window.location.href = "admin_dashboard.php";
            </script>
            <?php
    }


    
    
}
else
{
    //IF boook number does not Exist
    echo '<script>alert("Book Number does not Exist!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "admin_dashboard.php";
    </script>
    
    <?php
}
?>

