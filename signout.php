<?php
session_start();
?>

<html>
<?php
session_unset();
session_destroy();
header("Location: welcome.php");
?>

</html>
