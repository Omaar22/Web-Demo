<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Good Name</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<?php
if (isset($_SESSION["userName"])) {
    include "fragments/header-in.html";
} else {
    include "fragments/header.html";
}
?>
<h1 class="container">Welcome</h1>
</body>
</html>