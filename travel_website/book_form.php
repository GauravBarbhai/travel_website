<?php

if(isset($_POST['send'])){

    $conn = mysqli_connect('localhost','root','','travel_db');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $members = $_POST['members'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $insert_query = "INSERT INTO book_form(`name`,`email`,`phone`,`address`,`location`,`members`,`arrival`,`leaving`)  VALUES ('$name','$email','$phone','$address','$location','$members','$arrivals','$leaving')";

    mysqli_query($conn,$insert_query);

    header('location:book.php');

}
else{
    echo "something went wrong";
}

?>