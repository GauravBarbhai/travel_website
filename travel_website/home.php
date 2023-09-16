<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <nav class="navbar" >
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->

<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        
        <div class="swiper-wrapper">
            
            <div class="swiper-slide slide" style="background: url(images/home-slide1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide3.jpg) no-repeat">
                <div class="content" >
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section ends -->

<!-- service section starts -->
<section class="services">
    
    <h1 class="heading-title">Our Services</h1>
    
    <div class="box-container">
       
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>
       
        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>
       
        <div class="box">
           <img src="images/icon-3.png" alt=""> 
           <h3>trekking</h3>
        </div>
       
        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>
       
        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>
       
        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section> 
<!-- service section ends -->

<!-- home about section starts -->
<section class="home-about">

    <div class="image" >
        <img src="images/about_img.jpg" alt="" >
    </div>
    
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ducimus optio itaque reiciendis illo commodi ut ex blanditiis, error placeat id harum molestiae aspernatur quo? A, impedit iusto corrupti rerum repellendus iste qui tenetur repellat? Ratione assumenda ullam commodi omnis.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>

<!-- home about section ends -->

<!-- home package section starts -->
<section class="home-packages">

    <h1 class="heading-title">our packages</h1>

    <div class="box-container">
        
        <div class="box">
            
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, similique.</p>
                <a href="book.php" class="btn">book now</a>
            </div>

        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, similique.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, similique.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>
    
    <div class="load-more"> <a href="package.php" class="btn"> load more </a></div>

</section>
<!-- home package section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum cupiditate debitis corporis et asperiores veritatis impedit incidunt non magnam dolor?</p>
        <a href="book.php" class="btn">book now</a>
    </div>

</section>

<!-- home offer section ends -->



<!-- footer section starts -->
<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick Access</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions </a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us </a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +917854612345 </a>
            <a href="#"> <i class="fas fa-phone"></i> +918734521395 </a>
            <a href="#"> <i class="fas fa-envelope"></i> travels@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Pune,India - 411043 </a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>
</section>
<!-- footer section ends -->


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>