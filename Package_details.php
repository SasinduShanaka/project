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
        <link rel="stylesheet" href="style/Package_details.css">
    </head>
    
    <?php
            require_once "IWT_db.php";
              
            $package_id = $_GET['package_id'];

            $SQL = "SELECT *FROM insurance_packages where package_id = $package_id"; 

            $result = $conn->query($SQL);
            if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();
                
                $package_type = $row["package_type"];
                $package_name = $row["package_name"];
                $package_description = $row["package_description"];
                $regulation = $row["regulation"];
                $max_coverage_limit = $row["max_coverage_limit"];
                $payment_interval = $row["payment_interval"];
                $premium_amount = $row["premium_amount"];
                $basic_amount = $row["basic_amount"];
            }
        
    ?>
    <body>

        <!--heading section-->
        <div>
            <h3><?php echo $package_type?></h3>
            <h2><b><?php echo $package_name?></b></h2>
        </div>

        <!--image-->
        <div class="image-container">
            <img src="images/pack2.png" alt="life insurance" class="img">
        </div>

        <!--Paragraph section-->
        <section class="paragraph">
            <div>
                <p class="para">
                    <?php echo $package_description ?>
                </p>
                <p class="para">
                    <?php echo $regulation ?>
                </p>
                <p class="para">
                    Maximum Coverage limit - $
                    <?php echo $max_coverage_limit ?>

                    <br>

                    Payment Interval - 
                    <?php echo $payment_interval ?>
                     Months

                </p>
                
            </div>
        </section>

        <!--Pricing section-->
        <section class="pricing-section">
            <div class="grid-container">

                <div class="grid-item-1">
                    <div class="grid-content">
                        <h4> $<?php echo $basic_amount; ?></h4>
                        <p>BASIC</p>

                        <hr>

                        <ul>
                            <li>Standard Policy Terms</li>
                            <li>Basic Customer Support</li>
                            <li>Limited Claim Settlement Options</li>
                        </ul>

                        <form action="Package_Activation.php" method="GET">
                            <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                            <input type="hidden" name="p_cat" value ="Basic">
                            <button type="submit" class="activate-btn">ACTIVATE BASIC</button>
                        </form>
                       
                    </div>
                </div>

                <div class="grid-item-2">
                    <div class="grid-content">
                        <h4> $<?php echo $premium_amount; ?></h4>
                        <p>PREMIUM</p>

                        <hr>

                        <ul>
                            <li>Flexible Policy Terms</li>
                            <li>Dedicated Customer Support</li>
                            <li>Advanced Claim Settlement Options</li>
                        </ul>
     
                        <form action="Package_Activation.php" method="GET">
                            <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                            <input type="hidden" name="p_cat" value ="Premium">
                            <button type="submit" class="activate-btn" name="submit" value = "submit">ACTIVATE PREMIUM</button>
                        </form>
                
                    </div>
                </div>
            </div> 
        </section>

    </body>
</html>
<?php 
include('footer.php');
?>










