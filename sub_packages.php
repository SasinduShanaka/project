<?php 
session_start();
    if (!isset($_SESSION["username"])) {
        include("headerLogin.php");
    } else {
        include("header.php");
    }
  ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style/sub_packages.css">
    </head>
    <body>

    <?php
              require_once "IWT_db.php";
              $package_type = $_GET['package_type'];
              $image = $_GET['image'];
        
    ?>
        
        <!--Heading-->
        <div class="heading">
            <?php echo "<h2>$package_type</h2>" ?>
        </div>

        <!--packages-->

        
        <!-- <div class ="package-grid"> -->
        <section class="products">
        <?php
          
            $SQL = "SELECT * FROM insurance_packages where package_type = '$package_type'";

            $result = $conn->query($SQL);
            if($result ->num_rows > 0){
                while($row = $result->fetch_assoc()){
                       $package_name = $row["package_name"];
                       $p_id = $row['package_id'];


                       echo "<div class='card-container'>
                                <div class='card' id='card1'>
                                    <div class='card-content'>
                                        <img src= $image alt='Card Image' class='card-image'>
                                        <h3>$package_name</h3>
                                        <a href='package_details.php?package_id=$p_id' class='learn-more'>Learn More</a>
                                    </div>
                                </div>
                            </div>";
                }
            }
        
            
                
        ?>
       <!--  <div> -->
                
            </div>
        </section> 

    </body>
</html>
<?php 
include('footer.php');
?>
