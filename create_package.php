<?php
    include "config.php";

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
    }
    else 
    {
        echo "Error".$conn -> error;
    }
?>