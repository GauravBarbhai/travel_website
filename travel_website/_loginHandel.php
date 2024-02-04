<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'dbconnect.php';
    session_start();
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPassword'];
    $get_user = "SELECT * FROM `book_form` WHERE `email` = '$email'";
    $result = mysqli_query($conn,$get_user);
    $numRows = mysqli_num_rows($result);
    if($numRows == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass , $row['password'])){
            $_SESSION['loggedin'] = true;
            $_SESSION['Name'] = $row['name'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['email'] = $email;
            $_SESSION['location'] = $row['location'];
            $_SESSION['price'] = $row['price'];
            $_SESSION['id'] = $row['id'];
            header("Location: /travel_website/home.php");
            exit();
        }
        else{
            $_SESSION['loggedin'] = false;
        }
        header("Location: /travel_website/home.php");
    }
    else{
        $_SESSION['loggedin'] = false;
    }
    header("Location: /travel_website/home.php");
    exit();
}
?>