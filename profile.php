<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<body>

<div w3-include-html="fragments/header-in.html"></div>
<div class="container">
    <h1 class="form-heading">Profile</h1>
    <hr>
    <label>
        <?php
        echo $_SESSION["userName"] ."<br>";
        echo $_SESSION["userEmail"] ."<br>";
        echo $_SESSION["userGender"] ."<br>";
        echo $_SESSION["userBirthdate"] ."<br>";
        ?>
    </label>
</div>
<script>
    w3.includeHTML();
</script>

</body>
</html>