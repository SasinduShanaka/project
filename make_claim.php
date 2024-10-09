<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwt_proj";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables
$policyno = $type = $date = $amount = $descp = '';

// Check if in edit mode
if (isset($_GET['edit_policyno'])) {
    $policyno = $_GET['edit_policyno'];
    
    // Fetch the claim details based on the policy number
    $sql = "SELECT * FROM makeclaim WHERE policyno = '$policyno'";
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $policyno = $row['policyno'];
        $type = $row['type'];
        $date = $row['date'];
        $amount = $row['amount'];
        $descp = $row['description'];
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $policyno = $_POST['policyno'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $descp = $_POST['description'];

    if (isset($_POST['update'])) {
        // Update query
        $sql = "UPDATE makeclaim SET policyno = '$policyno', type = '$type', date = '$date', amount = '$amount', description = '$descp' WHERE policyno = '$policyno'";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: make_claim.php?msg=Claim updated');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } elseif (isset($_POST['add'])) {
        // Insert query
        $sql = "INSERT INTO makeclaim (policyno, type, date, amount, description) VALUES ('$policyno', '$type', '$date', '$amount', '$descp')";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: make_claim.php?msg=Claim added');
        } else {
            echo "Error adding record: " . mysqli_error($conn);
        }
    }
}

// Delete claim
if (isset($_GET['delete_policyno'])) {
    $policyno = $_GET['delete_policyno'];
    $sql = "DELETE FROM makeclaim WHERE policyno = '$policyno'";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: make_claim.php?msg=Claim deleted');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/make_claim.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Make claims</title>
</head>
<body>

<div class="container" id="form-container">
    <div class="claim-form">
        <h1>Make a Claim</h1>
        
        <form class="inputs" method="post">
            <label>Policy Number</label>
            <input type="text" id="policyNumber" name="policyno" placeholder="Enter policy number" value="<?php echo isset($policyno) ? $policyno : '';?>" required>

            <label>Claim Type</label>
            <select id="claimType" name="type" required>
                <option value="">Select claim type</option>
                <option value="health" <?php if ($type == "health") echo "selected"; ?>>Health</option>
                <option value="vehicle" <?php if ($type == "vehicle") echo "selected"; ?>>Vehicle</option>
                <option value="property" <?php if ($type == "property") echo "selected"; ?>>Property</option>
                <option value="life" <?php if ($type == "life") echo "selected"; ?>>Life</option>
            </select>

            <label>Date of Incident</label>
            <input type="date" id="incidentDate" name="date" value="<?php echo isset($date) ? $date : '';?>" required>

            <label>Claim Amount (Rs.)</label>
            <input type="number" id="claimAmount" name="amount" placeholder="Enter claim amount" value="<?php echo isset($amount) ? $amount : '';?>" required>

            <label>Description of Incident</label>
            <textarea id="description" name="description" placeholder="Describe the incident" rows="4" required><?php echo isset($descp) ? $descp : '';?></textarea>

            <?php if (isset($policyno) && !empty($policyno)) { ?>
                <button type="submit" name="update">Update Claim</button>
            <?php } else { ?>
                <button type="submit" name="add">Add New Claim</button>
            <?php } ?>
        </form>
    </div>
</div>

<!-- Claims Table -->
<div class="container" id="table-container">
    <h2>List of Claims</h2>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>POLICY NO</th>
                <th>TYPE</th>
                <th>DATE</th>
                <th>AMOUNT</th>
                <th>DESCRIPTION</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM makeclaim";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['policyno']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                        <a class='button' id="btn1" href='make_claim.php?edit_policyno=<?php echo $row['policyno']; ?>'>Edit</a>
                        <a class='button' id="btn2" href='make_claim.php?delete_policyno=<?php echo $row['policyno']; ?>' onclick="return confirm('Are you sure you want to delete this claim?');">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='6'>No record found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>