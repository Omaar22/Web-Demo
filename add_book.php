<html>
<head>
    <meta charset="utf-8"/>
    <title>My Books</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

<?php include "fragments/header-in.html"; ?>

<div class="container">
    <h1 class="form-heading">Add New Book</h1>
    <hr>
    <form action="#" method="post">
        <input name="name" placeholder="book name" required="required">
        <input name="image" placeholder="image url">
        <input type="submit" value="Add">
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "");

    mysqli_select_db($con, "web_demo");
    $book_name = $_POST["name"];
    $url = $_POST["image"];
    $query = mysqli_query($con, "insert into books (name,image_url) values
            ('$book_name','$url')
            ");
    if ($query) {
        header("Location: mybooks.php");
    } else {
        echo "not inserted!";
    }
    mysqli_close($con);
}
?>
</body>
</html>