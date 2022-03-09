
<?php
// Add new Admin data into the table
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
//check weather emial alredy exists or not
$sql = "SELECT * FROM `admins` WHERE `email` = '$_POST[email]' ";
$result = mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);

if($num)
{
    //IF Email Alredy Exists
    echo '<script>alert("Email Already Exists!!!")</script>'; 
    ?>
     <script type="text/javascript">
	     window.location.href = "new_registration.php";
    </script>
    
    <?php
}
else
{
    //If email is not used before
    $query = "insert into admins values('$_POST[name]','$_POST[email]',$_POST[mobile],'$_POST[pass]')";
    $query_run = mysqli_query($connection, $query);

    echo '<script>alert("REGISTRATION SUCCESFUL!!!")</script>'; 

    ?>
     <script type="text/javascript">
	     window.location.href = "index.php";
    </script>
    
    <?php
    
}
?>

