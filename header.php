
<!DOCTYPE html>
<head>
    <title>LIFEGUARD Assurance</title>
   <link rel="stylesheet" href="style/headerfooter.css">
   <link rel="icon" type="image/png" sizes="32x32" href="./images/title_logo.png">
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

<div id="navbar">
<img id="logo" src="./images/logo_.png" alt="logo">

<ul class="menu">
<li class="menu"><a href="home.php">Home</a></li>
<li class="menu"><a href="Packages.php">Our Products</a></li>
<li class="menu"><a href="aboutUs.php">About Us</a></li>
<li class="menu"><a href="Feedback.php">Feedbacks</a></li>
<li class="menu"><a href="News.php">News</a></li>
<li class="menu"><a href="ContactUs.php">Contact Us</a></li>
<li class="menu"><a href="FAQpage.php">FAQ</a></li>
<li class="menu"><a href="policy.php">Policies</a></li>

</ul>
<a href="user_dashboard.php">
<img src="./images/user_icon.png" alt="user icon " id="user" onclick="dropdown()">
<h6><?php echo $_SESSION['username'] ?> </h6>
</a>
</div>
</body>
</html>
