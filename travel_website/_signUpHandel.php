<?php
// Include PHPMailer
/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception; */
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['Password'];
    $cpass = $_POST['Cpassword'];
    $existsSql = "SELECT * FROM `book_form` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $existsSql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        $showError = "Email already exists";
    } else {
        if ($pass == $cpass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $signup_users = "INSERT INTO `book_form`(`name`,`email`,`phone` ,`password`) VALUES ('$name','$email','$phone','$hash')";
            $result = mysqli_query($conn, $signup_users);
            header("Location: /travel_website/home.php?signupsuccess=true");
            exit();
        } else {
            $showError = "Password does not matched";
        }
}
header("Location: /travel_website/home.php?signupsuccess=false&error=$showError");
}

?>