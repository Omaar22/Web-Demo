<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Sign up</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

<?php include "fragments/header.html"; ?>

<form id="signup" action="check_signup.php" method="post" class="container form">
    <h1>Sign Up</h1>
    <input class="form-control" placeholder="Name" name="name" required="required"/>
    <input type="email" class="form-control" placeholder="Email address" name="email" required="required"/>
    <input type="password" minlength="6" class="form-control" placeholder="Password" name="password"
           required="required"/>
    <input type="password" minlength="6" class="form-control" placeholder="Confirm Password" name="confirm_password"
           required="required"/>
    <select name="gender" class="form-control">
        <option value="male" class="form-control">Male</option>
        <option value="female" class="form-control">Female</option>
        <option value="other" class="form-control">Other</option>
    </select>
    <input type="date" class="form-control" name="birthdate" placeholder="Birthdate"/>
    <?php
    if (isset($_SESSION["error"])) {
        echo '<div class="alert alert-danger" >
                   <span style = "color : #ff0000">' . $_SESSION["error"] . '</span >
                   </div >';
        $_SESSION["error"] = null;
    }
    ?>
    <button type="submit" class="btn btn-lg btn-primary" style="wid 49%">Sign up</button>
</form>

</body>
</html>