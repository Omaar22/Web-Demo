<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

<?php include "fragments/header-in.html"; ?>

<div class="container">
    <h1 class="form-heading">Profile</h1>
    <hr>
    <label>
        <?php
        echo $_SESSION["userName"] . "<br>";
        echo $_SESSION["userEmail"] . "<br>";
        echo $_SESSION["userGender"] . "<br>";
        echo $_SESSION["userBirthdate"] . "<br>";
        ?>
    </label>
    <form action="change_password.php" method="post">
        Change Password: <input type="password" placeholder="New Password" name="password" minlength="6">
        <input type="submit">
    </form>
</div>

</body>
</html>