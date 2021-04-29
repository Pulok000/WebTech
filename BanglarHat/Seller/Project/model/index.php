<?php
if (isset($_COOKIE['username'])) {

    if ($_COOKIE['username'] == 'customer')

        header('Location:../view/dashboard.php');

    else

        header('Location:../view/homepage.php');

} else

    header('Location:../view/homepage.php');