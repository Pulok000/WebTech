<?php
if (isset($_COOKIE['username'])) {

    setcookie("username", null, time() - (5 * 3600), '/');

    session_unset();

    session_destroy();

}

header('Location: ../view/login.php');