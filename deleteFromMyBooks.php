<?php
session_start();
?>
<html>
<body>

<?php
$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "web_demo");

$book_id = $_GET["id"];
echo $book_id;
$email = $_SESSION["userEmail"];
$query = mysqli_query($con, "delete from my_books where book_id = '$book_id'");
if ($query) {
    header("Location: mybooks.php");
} else {
    echo "Error!";
}
mysqli_close($con);
?>

</body>
</html>