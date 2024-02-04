<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musafir-The Traveler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php include 'header.php' ?>
    <section class="confirmation">
        <div class="container">
            <h1 class="mt-2 mb-5 text-center">Booking Confirmation</h1>

            <?php
            // Include database connection file
            include 'dbconnect.php';

            // Assume you have stored the user's email in a session variable during form processing
            $email = $_SESSION['email'];

            // Fetch user details from the database using the email
            $selectSql = "SELECT * FROM `book_form` WHERE `email` = '$email'";
            $result = mysqli_query($conn, $selectSql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            ?>
            
            <form method="post">
                <div class="flex" style="display: flex; text-align: left; font-size: 1.5rem; flex-wrap: wrap;">
                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span>Name :</span>
                        <input type="text" value="<?php echo $row['name']; ?>" readonly>
                    </div>

                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span>Email :</span>
                        <input type="email" value="<?php echo $row['email']; ?>" readonly>
                    </div>

                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span>Phone :</span>
                        <input type="number" value="<?php echo $row['phone']; ?>" readonly>
                    </div>

                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span> Where To :</span>
                        <input type="text" value="<?php echo $row['location']; ?>" readonly>
                    </div>

                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span> Your Address :</span>
                        <input type="text" value="<?php echo $row['address']; ?>" readonly>
                    </div>

                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span>How Many :</span>
                        <input type="number" value="<?php echo $row['members']; ?>" readonly>
                    </div>

                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span>Arrival :</span>
                        <input type="date" value="<?php echo $row['arrival']; ?>" readonly>
                    </div>
                            
                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span>Leaving :</span>
                        <input type="date" value="<?php echo $row['leaving']; ?>" readonly>
                    </div>
                    
                    <div class="inputBox" style="flex: 1 1 45%;">
                        <span>Price :</span>
                        <input type="text" value="<?php echo $row['price']; ?>" readonly>
                    </div>
                </div>
            </form>
            <div class="buttons-container mt-3">
                <button type="button" id="payButton" class="btn btn-primary">Pay Now</button>
                <a href="/travel_website/home.php" class="btn btn-secondary">Back to Home</a>
            </div>

            <!-- Payment Status -->
            <div id="paymentStatus" class="mt-3"></div>

            <?php
            } else {
                echo '<div class="alert alert-danger mt-3" role="alert">
                        <h4 class="alert-heading">Error!</h4>
                        <p>Failed to retrieve booking details. Please try again.</p>
                    </div>';
            }
            ?>
        </div>
    </section>

<!-- footer section -->
<?php include 'footer.php' ?>
<!-- footer section ends -->

<!-- Add this script to your HTML page -->
<script>
    src="https://js.stripe.com/v3/";
    var stripe = Stripe('pk_test_51NaCNiSADc0JQr3ISrbfYhPUkmY6djvCXqys6sIRVE27SWaSjt7blZpX6Rnu9qFXLDyIF0SBYo3S8EHTY9l6711g00ZKqUOf1N');
    var payButton = document.getElementById('payButton');

    payButton.addEventListener('click', function () {
        fetch('payment_session.php', {
            method: 'POST',
        }).then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(response => response.json())
            .then(session => {
                return stripe.redirectToCheckout({ sessionId: session.sessionId });
            })
            .then(result => {
                if (result.error) {
                    alert(result.error.message);
                } else {
                    // Display payment success message
                    document.getElementById('paymentStatus').innerHTML = '<div class="alert alert-success" role="alert">Payment successful!</div>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
