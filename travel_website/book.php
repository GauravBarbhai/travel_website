<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<!-- header section -->
<?php
include("dbConnect.php"); 
include 'header.php';
?>
<!-- header section ends-->

<div class="heading" style="background: url(images/header-bg-3.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!-- booking section starts -->
<section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // Display the form with user information pre-filled
        echo '
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" value="' . $_SESSION['Name'] . '" name="name" readonly>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" value="' . $_SESSION['email'] . '" name="email" readonly>
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" value="'  . strval($_SESSION['phone']) . '" name="phone" readonly>
                </div>';
                if (empty($_GET['location'])) {
                    echo '<div class="inputBox">
                            <span>where to :</span>
                            <input type="text" placeholder="place you want to visit" name="location">
                          </div>';
                } else {
                    $location = $_GET['location'];
                    echo '<div class="inputBox">
                            <span>where to :</span>
                            <input type="text" value="' . $location . '" name="location">
                          </div>';
                }
                echo '
                        <div class="inputBox">
                            <span>Your Address :</span>
                            <input type="text" placeholder="enter your address" name="address">
                        </div>
                        <div class="inputBox">
                            <span>how many :</span>
                            <input type="number" placeholder="number of members" name="members">
                        </div>
                        <div class="inputBox">
                            <span>arrivals :</span>
                            <input type="date" name="arrivals">
                        </div>
                        <div class="inputBox">
                            <span>leaving :</span>
                            <input type="date" name="leaving">
                        </div>';
                        if (isset($_GET['price'])) {
                            $price = $_GET['price'];
                            echo '<div class="inputBox">
                                    <span>Price :</span>
                                    <input type="text" value="'.$price.'" name="price">
                                  </div>';
                        }else{
                            echo '<div class="inputBox">
                                    <span>Price :</span>
                                    <input type="text"  name="price">
                            </div>';
                        }
                        echo'
                            </div>
                            <input type="submit" value="submit" name="send" class="btn">
                        </form>';
            } 
     else {
        // Display login and signup buttons
        echo '
        <div class="login-signup-buttons" style = "display: flex;
        justify-content: center;
        gap: 5rem;">
            <a href="login.php" class="btn">Log In</a>
            <a href="signup.php" class="btn">Sign Up</a>
        </div>';
    }
    ?>

</section>
<!-- booking section ends -->

<!-- footer section -->
<?php include 'footer.php'; ?>
<!-- footer section ends-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
