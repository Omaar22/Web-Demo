<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>My Books</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

<?php include "fragments/header-in.html"; ?>

<div class="container">
    <h1 class="form-heading">My Books</h1>
    <hr>

    <form action="#" method="post">
        <select name="bookChoice" id="bookChoice" style="width:300px;  height: 30px">
            <?php
            $con = mysqli_connect("localhost", "root", "");

            mysqli_select_db($con, "web_demo");

            $query = mysqli_query($con, "select * from books");

            while ($row = mysqli_fetch_array($query)) {
                $name = $row["name"];
                $id = $row["id"];
                echo "<option value='$id'>$name</option>";
            }
            ?>
        </select>
        <input type="submit" value="Add To My Books">
    </form>
    <hr>
    <table border=2 width="100%">
        <?php
        $tmp = $_SESSION["userEmail"];
        $query = mysqli_query($con, "select * from my_books where user_email = '$tmp'");
        echo "<tr> <th colspan='2'>Book Name</th>";
        while ($row = mysqli_fetch_array($query)) {
            $book_id = $row["book_id"];
            $query2 = mysqli_query($con, "select * from books where id = '$book_id'");
            $row2 = mysqli_fetch_array($query2);
            $book_name = $row2["name"];
            echo "<tr>";
            echo "<td><a href='#'>$book_name</a></td>";
            echo "<td><a href='../hello/deleteFromMyBooks.php?id=$book_id'>delete</a></td>";
            echo "</tr>";
        }
        mysqli_close($con);
        ?>

    </table>

</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "");

    mysqli_select_db($con, "web_demo");

    $book_id = $_POST["bookChoice"];
    $email = $_SESSION["userEmail"];
    $query = mysqli_query($con, "insert into my_books (user_email,book_id) values
            ('$email','$book_id')
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