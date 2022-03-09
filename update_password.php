<!-- ########################################################################################### -->
<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$query = "SELECT * FROM `users` WHERE `email` = '$_SESSION[email]' ";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($query_run);


if($row['password'] == $_POST['current_password'])  //saved password and entered password matches
{
    if($_POST['new_password'] == $_POST['renew_password'])
    {
          $query = "UPDATE users SET password = '$_POST[new_password]' WHERE email = '$_SESSION[email]'";
          $query_run = mysqli_query($connection, $query);
          ?>
        <script type="text/javascript">
            alert("Updated successfully...");
            window.location.href = "user_dashboard.php";
        </script>
        
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Password Mis-Match!!!");
            window.location.href = "change_password.php";
        </script>
        
        <?php
    }
}
else{
        ?>
        <script type="text/javascript">
            alert("Wrong Password!!!");
            window.location.href = "change_password.php";
        </script>
        
        <?php
}

?>

<!-- <script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "user_dashboard.php";
</script> -->