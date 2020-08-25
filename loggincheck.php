#used to verify if a user is logged in. Eventually I will add some form of "you need to be logged in to view this" using something like login.php?message=1, which will display a message on the login screen.

<?php

if (!isset($_SESSION['user'])) {
    header("location: login.php");
}
?>
