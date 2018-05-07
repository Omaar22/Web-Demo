<?php
session_start();
?>
<html>
<?php

$email = $_POST["email"];
$password = $_POST["password"];

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "web_demo");

$query = mysqli_query($con, "select * from users where email = '$email' and password = '$password'");

if ($row = mysqli_fetch_array($query)) {
    $_SESSION["userName"] = $row["name"];
    $_SESSION["userEmail"] = $row["email"];
    $_SESSION["userPassword"] = $row["password"];
    $_SESSION["userGender"] = $row["gender"];
    $_SESSION["userBirthdate"] = $row["birthdate"];
    Header("Location: welcome.php");
} else {
    $_SESSION["error"] = "wrong username or password";
    Header("Location: signin.php");
}

mysqli_close($con);

?>
</html>