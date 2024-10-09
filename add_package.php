<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  type="text/css" href="style/Add Package.css">
    <script src="js/add_package.js"> </script>
</head>

<body>
     <form action="create_package.php" id="packageForm" method="post" onsubmit="return validateForm()">
        <fieldset>
            <h2>Add Package Details</h2>
            
            <label>Package Name</label>
            <input type="text" class="input" name="pname" ><br><br>
            
            <label>Package Type</label>
            <select class="input" name="ptype">
                <option class="option" value="Life Insurance Plan">Life Insurance Plan</option>
                <option class="option" value="Retirement Plan">Retirement Plan</option>
                <option class="option" value="Medical Plan">Medical Plan</option>
                <option class="option" value="Investment Plan">Investment Plan</option>
                <option class="option" value="Group Plan">Group Plan</option>
            </select>
            <br><br>

            <label>Package Description </label>
            <textarea class="input" name="description" rows="10" cols="50"></textarea><br><br>

            <label>Maximum Coverage Limit </label>
            <input type="number" step="0.01" class="input" name="mcoverage"><br><br>
            
            <label>Payment Interval</label>
            <input type="number" class="input" name="pay_interval"><br><br>
            
            <label>Premium Amount </label>
            <input type="number" step="0.01" class="input" name="premium_amount"><br><br>
            
            <label>Regulation </label>
            <textarea class="input" name="regulation" rows="10" cols="50"></textarea><br><br>
            
            <label>Basic Amount </label>
            <input type="number"  step="0.01" class="input" name="basic_amount"><br><br>
            
            <input type="submit" id="btn" value="Add a Package" name ='submit'>
        </fieldset>
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        require_once "IWT_db.php";

        $p_name = $_POST['pname'];
        $p_type = $_POST['ptype'];
        $p_des = $_POST['description'];
        $m_coverage = $_POST['mcoverage'];
        $pay_interval = $_POST['pay_interval'];
        $premium_amount = $_POST['premium_amount'];
        $regulation = $_POST['regulation'];
        $basic_amount = $_POST['basic_amount'];

        $SQL = "Insert into insurance_packages(package_name, package_type, package_description, max_coverage_limit, payment_interval, premium_amount, regulation, basic_amount) 
                values ('$p_name', '$p_type', '$p_des', '$m_coverage', '$pay_interval', '$premium_amount', '$regulation', '$basic_amount')";

        if($conn -> query ($SQL) == TRUE)
        {
            echo "<script>alert('New Package Inserted!');</script>";
            header('Location:admin_dashboard.php');
        }
        else 
        {
            echo "Error".$conn -> error;
        }
    }
?>

    <script src="js/add_packages.js"></script>
</body>
</html>