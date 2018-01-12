<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Good Name</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<div id="header" w3-include-html="fragments/header.html"></div>
<body>
<h1 class="container">Welcome</h1>
<script>
    <?php
    if (isset($_SESSION["userName"])) {
        echo 'document.getElementById("header")
             .setAttribute("w3-include-html", "fragments/header-in.html");
             ';
    }
    ?>
    w3.includeHTML();
</script>
</body>
</html>