
<?php
// Check if session is not already started
if (session_status() == PHP_SESSION_NONE) {
    // Start the session
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 20px;
        }
        h3 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .no-details {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Admin Page</h3>
        <h3>Customer's Orders Details</h3>
        
        <?php
        // Your PHP code here
        $con=new mysqli("localhost","root","","roastup");
				if(!$con)
				{
					echo "There is an error while connection";
				}
				$sel="select * from admin";
				$que=mysqli_query($con,$sel);
        echo "<table>
            <tr>
                <th>User Id</th>
                <th>Item Details</th>
                <th>Total Cost</th>
                <th>Ordered Date</th>
            </tr>";
        
        while ($data = mysqli_fetch_assoc($que)) {
            echo "<tr>
                <td>".$data['user']."</td>
                <td>".$data['item_details']."</td>
                <td>".$data['totalcost']."</td>
                <td>".$data['date_time']."</td>
            </tr>";
        }
        
        echo "</table>";
        
        if (mysqli_num_rows($que) == 0) {
            echo "<p class='no-details'>No details</p>";
        }
        ?>
    </div>
</body>
</html>
