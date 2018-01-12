<?php
session_start();
?>
<html>
<?php

$email = $_POST["email"];
$password = $_POST["password"];

$con = mysqli_connect("localhost", "root", "123");

mysqli_select_db($con, "web_demo");

// todo: validate

$query = mysqli_query($con, "select * from users where email = '$email' and password = '$password'");

if ($row = mysqli_fetch_array($query)) {
    $_SESSION["userName"] = $row["name"];
    $_SESSION["userEmail"] = $row["email"];
    $_SESSION["userPassword"] = $row["password"];
    $_SESSION["userGender"] = $row["gender"];
    $_SESSION["userBirthdate"] = $row["birthdate"];
    header("Location: welcome.php");
} else {
    echo "not Found";
}

mysqli_close($con);

?>
</html>