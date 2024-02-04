<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!-- header section -->
    <?php  include 'header.php' ?>
    <!-- header section ends-->

    <!-- Login Form Starts -->
        <section class="logining">
            <form action="_loginHandel.php" method="post" class="login-form">
                <div class="flex">
                    <!-- <div class="inputBox">
                        <span>Phone :</span>
                        <input type="text" placeholder="enter your name" name="loginName">
                    </div> -->
                    
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="enter your email" name="loginEmail">
                    </div>

                    <div class="inputBox">
                    <span>Password</span>
                    <input type="password" placeholder="enter your password" id="loginPassword" name="loginPassword">
                    </div>
                </div>
                <input type="submit" value="submit" name="send" class="btn">
            </form>
        </section>
    <!-- Login Form Ends -->

    <!-- footer section -->
    <?php  include 'footer.php' ?>
    <!-- footer  section ends-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>