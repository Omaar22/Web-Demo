<?php
session_start();
?>

<html>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$birthdate = $_POST["birthdate"];

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "web_demo");


// todo: validate

$query = mysqli_query($con, "insert into users (name,email, password, gender, birthdate)
 values ('$name','$email','$password', '$gender', '$birthdate')
");

if ($query) {
    $_SESSION["userName"] = $name;
    $_SESSION["userEmail"] = $email;
    $_SESSION["userPassword"] = $password;
    $_SESSION["userGender"] = $gender;
    $_SESSION["userBirthdate"] = $birthdate;
    header("Location: welcome.php");
} else {
    $_SESSION["error"] = "Can't sign up";
    header("Location: signup.php");
}
mysqli_close($con);
?>
</html>
