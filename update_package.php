<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  type="text/css" href="style/update_package.css">
    </head>

    <body>


<!--select option to choose the package -->
        <div class="grid-container">
    <div class="grid-itemfirst">
            <div class= "grid-item-1">
          
                <form action = "add_package.php">
                <h2>Add Package</h2>
                    <input type="submit" class="btn" value="Add Package" > 
                </form>
            </div>
        
            <div class="grid-item-2">
                
                    <form  action="update_package.php" method="post">
                        <fieldset>
                            <h2>Select Package</h2>

                            <label>Package Name</label>
                            <select class="input" name="package_id">

                        <?php
                            require_once "IWT_db.php";
                            
                            $SQL = "SELECT * FROM insurance_packages "; 

                            $result = $conn->query($SQL);
                            if ($result->num_rows > 0) {

                                while($row = $result->fetch_assoc()){
                                    $package_id = $row["package_id"];
                                    $package_name = $row["package_name"];

                                    echo "<option class='option' value='$package_id'>$package_name</option>";
                                }  
                            }
                        ?> 
                            </select>

                            <input type="submit" class="btn" value="Select Package" name ="select">
                            <br><br>

                        </fieldset>
                    </form>

            </div>
    </div>   


    <!--fetch the information from the database-->
            
                    <?php
                    if(isset($_POST['select'])){
                     $package_id = $_POST['package_id'];
                    

                        $SQL = "SELECT * FROM insurance_packages where package_id = $package_id"; 

                        $result = $conn->query($SQL);
                        if ($result->num_rows > 0) {

                            $row = $result->fetch_assoc();
                            
                            $p_name = $row["package_name"];
                            $package_description = $row["package_description"];
                            $regulation = $row["regulation"];
                            $max_coverage_limit = $row["max_coverage_limit"];
                            $payment_interval = $row["payment_interval"];
                            $premium_amount = $row["premium_amount"];
                            $basic_amount = $row["basic_amount"];
                        }
                    
                    }
                    ?>



    

            <div class="grid-itemSecond">

                <form  action="update_package.php" method="POST">

                    <fieldset>
                        <h2>Update Package</h2>

                        <label>Package Name</label>
                        <input type="text" class="input" name="package_name" value="<?php if(isset($_POST['select'])){ echo $p_name; } ?>" > <br><br>

                        <label>Package Description </label>
                        <textarea class="input" name="description" rows="10" cols="50"  >   <?php if(isset($_POST['select'])){ echo $package_description ;} ?>    </textarea><br><br> 

                        <label>Maximum Coverage Limit </label>
                        <input type="number" class="input" name="mcoverage" value="<?php echo $max_coverage_limit; ?>" ><br><br>
                        
                        <label>Payment Interval</label>
                        <input type="number" class="input" name="pay_interval" value="<?php echo $payment_interval; ?>" ><br><br>
                        
                        <label>Premium Amount </label>
                        <input type="number" class="input" name="premium_amount" value="<?php echo $premium_amount; ?>" ><br><br>
                        
                        <label>Regulation </label>
                        <textarea class="input" name="regulation" rows="10" cols="50" > <?php if(isset($_POST['select'])){ echo $regulation; }?> </textarea><br><br> 
                        
                        <label>Basic Amount </label>
                        <input type="number" class="input" name="basic_amount" value="<?php echo $basic_amount; ?>" ><br><br>
                        
                        <input type="submit" class="btn" value="Update" name ="update">   <!--button for save the updated details-->

                        <input type="submit" class="btn" value="Delete" name= "delete">   <!--button for deleting the package-->

                    </fieldset>
                </form>
            </div>


    <!--updating the modified data in the database-->

            <?php
                if(isset($_POST['update'])){

                    
                    $p_name = $_POST['package_name'];
                    $p_description = $_POST['description'];
                    $m_coverage = $_POST['mcoverage'];
                    $pay_interval = $_POST['pay_interval'];
                    $prem_amount = $_POST['premium_amount'];
                    $regula = $_POST['regulation'];
                    $bas_amount = $_POST['basic_amount'];

                    $SQL = "UPDATE insurance_packages
                            SET 
                                package_name = '$p_name',
                                package_description = '$p_description',
                                max_coverage_limit = '$m_coverage',
                                payment_interval = '$pay_interval',
                                premium_amount = '$prem_amount',
                                regulation = '$regula',
                                basic_amount = '$bas_amount'
                            WHERE package_id = $package_id";


                    
                    if($conn -> query ($SQL) == TRUE)
                    {
                        echo "<script>alert('Package Details Updated!');</script>";
                    }
                    else 
                    {
                        echo "Error".$conn -> error;
                    }
                }
            ?>


    <!--delete a package from the database-->

            <?php
                if(isset($_POST['delete'])){


                    $SQL = "DELETE FROM insurance_packages
                            WHERE package_id = $package_id";

                    if($conn -> query ($SQL) == TRUE)
                    {
                        echo "<script>alert('Package Deleted Sucessfully!');</script>";
                    }
                    else 
                    {
                        echo "Error".$conn -> error;
                    }
                }
            ?>


                
        </div>


        

    </body>
</html>
