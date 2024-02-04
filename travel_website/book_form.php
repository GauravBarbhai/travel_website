<?php

if(isset($_POST['send'])){
    include('dbConnect.php');
    session_start();
    $id = $_SESSION['id'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $members = $_POST['members'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $price = $_POST['price'];

    $update_query = "UPDATE book_form 
    SET `address`='$address', `location`='$location', `members`='$members', 
        `arrival`='$arrivals', `leaving`='$leaving',`price` = '$price' 
    WHERE `id` = $id";

    mysqli_query($conn,$update_query);

    header('location:/travel_website/confirmation.php');

}
else{
    echo "something went wrong";
}

?>