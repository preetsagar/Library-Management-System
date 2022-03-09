<!-- ########################################################################################### -->
						<!-- for updating the new details into the table -->
<?php
 session_start();
 $connection = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($connection, "lms");
 //echo "update.php";
// ////$query = "UPDATE users SET name = '$_POST[name]', mobile = $_POST[mobile] WHERE users.email = '$_POST[email]'";
 $query = "UPDATE users SET name = '$_POST[name]', mobile = $_POST[mobile] WHERE email = '$_SESSION[email]'";
 $query_run = mysqli_query($connection, $query);
 //echo "Updated Successfully";
?>

<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "user_dashboard.php";
</script>