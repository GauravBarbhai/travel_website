
<?php
include("dbConnect.php");
session_start();
echo'<!-- header section starts -->
<section class="header  text-decoration-none">
  <a href="home.php" class="logo">Travel.</a>
  <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>';
      
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo '<a href="confirmation.php">My Trip</a>
        <a href="logout.php">Log Out</a>';
        echo '<p> Welcome ! '.$_SESSION['Name']."</p";
      }
      else{
        echo '<a href="signup.php">Sign Up</a>';
        echo'<a href="login.php">Log In</a>';
      }
  echo'</nav>
  <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
  echo '
    <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>Success!</strong> Your signup is done successfully. Now you can login to our site.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
else if(isset($_GET['error']) && $_GET['signupsuccess'] == "false"){
  echo '
    <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
      <strong>Error!</strong> '.$_GET['error'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  ';
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false && !isset($_GET['signupsuccess'])){
  echo '
    <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
      <strong>Error!</strong> Invalid Email or Password.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  ';
}

?>