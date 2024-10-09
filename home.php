<?php 
    
    session_start();
    if (!isset($_SESSION["username"])) {
        include("headerLogin.php");
    } else {
        include("header.php");
    }
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style/home.css">
    <script src="./js/home.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
<!--image slider -->


<!-- <?php
echo ' <script src="./js/home.js"></script>"></script>';
?> -->

 <section class="container"> 
    <div class="slider-wrapper">
        <div class="slider">
            <img id="slide-1" src="./images/hero.png" alt="image1">
            <img id="slide-2" src="./images/hero4.png" alt="image1">
            <img id="slide-3" src="./images/hero6.png" alt="image1">
            <img id="slide-4" src="./images/hero5.png" alt="image1">   
        </div>

    <div class="slider-nav">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
        <a href="#slide-4"></a>
    </div>
    </div>
 </section>

<!--our products -->

<section class="products">
        <h2 class="headings">Our Products</h2>
        <p>Lifeguard Assurance offers a range of tailored life insurance solutions designed to protect what matters most to you and your family. Our products provide comprehensive coverage, financial security, and peace of mind, ensuring you’re prepared for life’s uncertainties. Whether you’re looking for term insurance, whole life plans, or retirement solutions, our easy-to-understand policies are crafted to meet your specific needs. Trust Lifeguard Assurance to safeguard your future with flexible, reliable insurance options.






</p>
        <div class="card-container">
            <div class="card"  >
                <div class="card-content" >
                <img src="./images/fam.png" alt="Card Image" class="card-image">
                <h3>Life Insurance <br>Plans </h3>
                <a href="www.google.com" class="learn-more">Learn More</a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                <img src="./images/retirement.jpg" alt="Card Image" class="card-image">
                <h3>Retirement Plans</h3>
                <a href="#" class="learn-more">Learn More</a>
                
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                <img src="./images/health.png" alt="Card Image" class="card-image">
                <h3>Medical <br>Plans</h3>
                <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                <img src="./images/inv.png" alt="Card Image" class="card-image">
                <h3>Investment Plans</h3>
               
                <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                <img src="./images/group.png" alt="Card Image" class="card-image">
                <h3>Group <br>Plans</h3>
                <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>
        </div>
    </section>



    <!-- About Us Section -->
    <section class="about-us">
        <div class="about-us-text">
            <h2 class="headings">Welcome to Lifeguard Assurance</h2>
            <p>At Lifeguard Assurance, innovation and creativity transcend boundaries. We are dedicated to improving lives by providing world-class, comprehensive life insurance solutions designed to protect and secure your future with unwavering confidence, trust, and personalized care.
</p>
           <a href="aboutUs.php">
            <button class="button" style="vertical-align:middle"><span>Read More </span></button>
            </a>
        </div>
        <div class="about-us-image">
            <img src="./images/fam01.jpg" alt="About Us Image">
        </div>
        
    </section>
   
<!-- testimonials section -->

 <!-- Testimonials Section -->
 <section class="testimonials">
        <h2 class="headings">What People Say About Us</h2>
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
    
<!--scroll image -->

    <div class="scroll-image">
        <h1>We're Here to Guide <br> You Every Step of the Way</h1><br>
        
       
    </div>






    </body>
</html>
<?php 
   include("footer.php")
   ?>