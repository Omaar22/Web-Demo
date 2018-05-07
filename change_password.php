<?php
session_start();
?>
<html>
<?php
$password = $_POST["password"];
$email = $_SESSION["userEmail"];
$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "web_demo");

$query = mysqli_query($con, "update users set password = '$password' where email = '$email' ");

mysqli_close($con);

if ($query) {
    Header("Location: welcome.php");
} else {
    echo "Error!";
}

?>
</html>