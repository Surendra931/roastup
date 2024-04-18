<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <meta charset="utf-8">
        
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Paste the CSS styles here */
        .styled-table {
            width: 80%;
            border-collapse: collapse;
            margin: 0 auto;
            font-size: 0.9em;
            font-family: Arial, sans-serif;
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        /* Logout button style */
        .logout-button {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="admin.php" class="navbar-brand"><span>ROASTUP</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                <a href="logout.php" class="logout-button">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <?php
    $con = new mysqli("localhost", "root", "", "roastup");

    if ($con) {
        $sel = "SELECT * FROM admin";
        $que = mysqli_query($con, $sel);

        if (mysqli_num_rows($que) != 0) {
            echo "<h3 style='text-align: center;'>Admin Page</h3>";
            echo "<table class='styled-table' align='center'>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Item Details</th>
                        <th>Total Cost</th>
                        <th>Date&Time</th>
                    </tr>
                </thead>
                <tbody>";

            while ($data = mysqli_fetch_assoc($que)) {
                echo "<tr>
                    <td>".$data['user']."</td>
                    <td>".$data['item_details']."</td>
                    <td>&#8377; ".$data['totalcost']."</td>

                    <td>".$data['date_time']."</td>
                </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<strong><font color='red'><center>No details</center></font></strong>";
        }
    }
    ?>

    
</body>
</html>
