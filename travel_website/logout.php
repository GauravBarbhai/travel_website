<?php
session_start();
session_unset();
session_destroy();
header("Location: /travel_website/home.php");


?>