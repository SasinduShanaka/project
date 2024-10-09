<?php
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "iwt_proj";
   
   // Create connection
   $conn = mysqli_connect("$servername", "$username", "", "$dbname");
   
   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
    

    
    

    // Delete Feedbacks
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM feedback WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
        $_SESSION['success'] = "Admin account deleted";
        header('Location: managfeedbacks.php');
    } else {
        $_SESSION['status'] = "Cannot delete the admin account";
        header('Location: managefeedbacks.php');
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\managefeedbacks.css">
    <title>Manage Feedbacks</title>
</head>
<body>

<button class="button" onclick="window.location.href='admin_dashboard.php'">Back</button>
 <!-- Feedback Table -->
    <div class="container" id="table-container">
    <h2>Feedback List </h2>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>OCCUPATION</th>
                <th>MESSAGE</th>
                <th>RATING</th>
                <th>ACTION</th>
            </tr>
        </thead> 
        <tbody>
        <?php
        $query = "SELECT * FROM feedback";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['occupation']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['rating']; ?></td>
                    <td>
                        <a class='button' id='btn2' href='managefeedbacks.php?delete_id=<?php echo $row['id']; ?>' onclick="return confirm('Are you sure you want to delete this feedback?');">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='8'>No record found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>