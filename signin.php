<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sign in</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

<?php include "fragments/header.html"; ?>

<div class="container">
    <form action="check_signin.php" method="post" class="form">
        <h1 class="form-heading">Sign In</h1>
        <input type="email" name="email" class="form-control" placeholder="Email address" required="required"/>
        <input type="password" name="password" class="form-control" placeholder="Password"
               required="required"/>
        <?php
         if (isset($_SESSION["error"])) {
             echo '<div class="alert alert-danger" >
                   <span style = "color : #ff0000">' .$_SESSION["error"]. '</span >
                   </div >';
            $_SESSION["error"] = null;
         }
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>

</body>
</html>