
<?php
##################################################################################################
                        // Add new user data into the users table

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");

//check weather emial alredy exists or not
$sql = "SELECT * FROM `users` WHERE `email` = '$_POST[email]' ";//for checking email alredy exists or not
$result = mysqli_query($connection, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
// echo $num; //print number of rows
// echo " records found in the DataBase<br>";


if($num)
{
    //It means email already exists
    echo '<script>alert("Email Already Exists!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "new_registration.php";
         href = "new_registration.php";
    </script>
    
    <?php
}
else
{
    //If email is not used before
    $query = "insert into users values('$_POST[name]','$_POST[email]',$_POST[mobile],'$_POST[pass]')";
    $query_run = mysqli_query($connection, $query);

    echo '<script>alert("REGISTRATION SUCCESFUL!!!")</script>'; 

    ?>
     <script type="text/javascript">
	     window.location.href = "index.php";
         href = "new_registration.php";
    </script>
    
    <?php
    
}
?>

