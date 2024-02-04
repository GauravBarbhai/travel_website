<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musafir-The Traveler</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<!-- header section -->
<?php  include 'header.php' ?>
<!-- header section ends-->
  
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
        <p>We are the one who will fullfill your travelling dreams with beautiful and wonderful memories. We have more than 20,000+ satisfied clients.</p>
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
                <img src="images/mh.jpg" alt="">
            </div>
            <div class="content">
                <h3>Maharashtra Exploration Tour</h3>
                <p>7 Days / 6 Nights</p>
                <p>Mumbai - Pune - Lonavala - Khandala - Aurangabad - Ajanta and Ellora Caves</p>
                <a href="book.php" class="btn">book now</a>
            </div>

        </div>

        <div class="box">
            <div class="image">
                <img src="images/pkg-11.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kerala Enchantment Tour</h3>
                <p>7 Days / 6 Nights</p>
                <p>Kochi (Cochin) - Munnar - Thekkady (Periyar) - Alleppey (Alappuzha) - Kumarakom - Kovalam - Trivandrum (Thiruvananthapuram)</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/gj.jpg" alt="">
            </div>
            <div class="content">
                <h3>Gujarat Discovery Tour</h3>
                <p>7 Days / 6 Nights</p>
                <p>Ahmedabad - Vadodara - Champaner-Pavagadh - Udaipur (Rajasthan) - Rajkot - Somnath - Dwarka - Jamnagar - Ahmedabad</p>
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
        <p>Speical Winter Offer for packages with more than 10 days.</p>
        <a href="book.php" class="btn">book now</a>
    </div>

</section>

<!-- home offer section ends -->

<!-- footer section -->
<?php  include 'footer.php' ?>
<!-- footer section ends -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>