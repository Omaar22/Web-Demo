<html>
<head>
    <meta charset="utf-8"/>
    <title>My Books</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<body>
<div w3-include-html="fragments/header-in.html"></div>
<div class="container">
    <h1 class="form-heading">Add New Book</h1>
    <hr>
    <form action="#" method="post">
        <input name="name" placeholder="book name" required="required">
        <input name="image" placeholder="image url">
        <input type="submit" value="Add">
    </form>
</div>
<script>
    w3.includeHTML();
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "123");

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