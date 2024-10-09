<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  type="text/css" href="style/Package Activation.css">
</head>

<body>

<!-- Getting package_id and category-->
            <?php
                    
                    require_once "IWT_db.php";
                    session_start();
                    $package_id = $_GET['package_id'];
                    $package_cat = $_GET['p_cat'];
                    $SQL = "SELECT * FROM insurance_packages where package_id = $package_id"; 
                    $result = $conn->query($SQL);
                        if ($result->num_rows > 0) {

                            $row = $result->fetch_assoc();
                            
                            $p_name = $row["package_name"];
                           
                        } 
            ?>

<!--package activation details-->
    <form action="#" method="post">
        <fieldset>
            <h2>Package Activation</h2>
            <label>User Name :</label><br>
            <input type="text" class="input" name="username" placeholder="User name" value="<?php echo $_SESSION['username'];?>" required><br><br>

            <label>NIC :</label><br>
            <input type="text" class="input" name="nic" placeholder="nic" required><br><br>

            <label>Phone :</label><br>
            <input type="tel" class="input" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="123 456 7890" value="<?php echo $_SESSION['mobile'];?>" required><br><br>

            <label>E-Mail :</label><br>
            <input type="email" class="input" name="email" value="<?php echo $_SESSION['email'];?>" required><br><br>

            <label>Product :</label><br>
            <input type="text" id="product" class="input" name="product" value ="<?php echo $p_name." - ".$package_cat; ?>"><br><br>

            <br>

            <input type="submit" id="btn" value="Pay Now">
    </fieldset>
    </form>
</body>
</html>