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

//echo "$name $email $password $gender $birthdate"; test

$con = mysqli_connect("localhost", "root", "123");

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
    echo "not inserted";
}
mysqli_close($con);
?>
</html>
