<?php
session_start();
if (!isset($_SESSION["username"])) {
    include("headerLogin.php");
} else {
    include("header.php");
}

// Include the database configuration file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwt_proj";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}



if (isset($_POST['submit'])) {
    
    // Capture form data
    $name = $_POST["name"];
    $occupation = $_POST["occupation"];
    $message = $_POST["message"];
    $rating = (int)$_POST["rating"];

    // Debugging step
    //echo "Captured data: Name - $name, Occupation - $occupation, Message - $message, Rating - $rating";
    
    // Insert data into the database
    $sql = "INSERT INTO feedback (name, occupation, message, rating) 
            VALUES ('$name', '$occupation', '$message', $rating)";
    
    if (mysqli_query($connection, $sql)) {
        //echo "New feedback added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style/Feedback.css">
</head>
<body>


 <!-- Testimonials Section -->
 <section class="testimonials">
        <h2 id="heading">What People Say About Us</h2>
        <div class="testimonial-cards">
            <div class="testimonial">
                <img src="./images/adam.webp" class="testimonial-image"><br>
                <img src="./images/star.png" class="testimonial-stars">
                <p>"Lifeguard Insurance made securing my family’s future simple and stress-free. Their plans are flexible and easy to understand, and their customer service is excellent!"</p><br>
                <span>Adam Smith, Doctor</span>
            </div>
            
            <div class="testimonial">
            <img src="./images/clara.jpg" class="testimonial-image"><br>
            <img src="./images/star.png" class="testimonial-stars">
                <p>"The process was seamless, and I felt completely confident in my investment. Lifeguard Assurance has given me peace of mind for my family’s future."</p><br>
                <span>Clara Martin, Lawyer</span>
            </div>
            <div class="testimonial">
            <img src="./images/edward.jpg" class="testimonial-image"><br>
            <img src="./images/star.png" class="testimonial-stars">
                <p>"I appreciate the personalized support I received from Lifeguard Assurance. They helped me find the perfect plan to secure my children's education."</p><br>
                <span>Edward James, Mechanical Engineer</span>
            </div>
        </div>
    </section>
    











<!-- 
feedback form -->
<h1 id="heading">Tell us what you think</h1>
    <div class="feedback-container">

    <h2>Feedback Form</h2>

    <form action="" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required>
    
    <label for="occupation">Occupation</label>
    <input type="text" id="occupation" name="occupation" placeholder="Your Occupation" required>
    
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Type your message" required></textarea>
    
    <label for="rating">Overall satisfaction with our insurance services:</label>
    <input type="hidden" id="rating" name="rating" value="">
    <div class="star-rating">
        <span class="star" data-value="1">★</span>
        <span class="star" data-value="2">★</span>
        <span class="star" data-value="3">★</span>
        <span class="star" data-value="4">★</span>
        <span class="star" data-value="5">★</span>
    </div>

    <button type="submit" name="submit">Submit</button>
</form>

</div>
    

    <script src="js/feedback.js"></script>
</body>
</html>

<?php 
  include('footer.php');
?>

