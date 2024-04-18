<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item to Menu</title>
    <head>
        <meta charset="utf-8">
        <title>ROASTUP</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding-top: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label, input, button, select {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="file"], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
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

    <div class="container">
        <h2>Add Item to Menu</h2>
        <form action="update_menu.php" method="POST" enctype="multipart/form-data">
            <label for="item_name">Item Name:</label>
            <input type="text" id="item_name" name="item_name" required>
            
            <label for="item_type">Item type:</label>
            <select id="item_type" name="item_type" required>
                <option value="veg">Veg</option>
                <option value="nonveg">Non-Veg</option>
            </select>
            
            <label for="item_price">Item Price:</label>
            <input type="text" id="item_price" name="item_price" required>

            <label for="item_description">Description:</label>
            <textarea id="item_description" name="item_description" rows="4"></textarea>

            <label for="item_image">Item Image:</label>
            <input type="file" id="item_image" name="item_image" accept="image/*" required>
            
            <button type="submit" name="submit">Add to Menu</button>
        </form>
    </div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Define target directory to store uploaded images
    $targetDir = "menu/";

    // Get the file name and create the file path
    $targetFile = $targetDir . basename($_FILES["item_image"]["name"]);
    
    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        exit;
    }

    // Check if the file was uploaded without errors
    if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["item_image"]["name"])) . " has been uploaded.";

        // Get other form data
        $itemType = $_POST["item_type"];
        $itemName = $_POST["item_name"];
        $itemPrice = $_POST["item_price"];
        $itemDescription = $_POST["item_description"];

        // Database connection
        $conn = new mysqli("localhost", "root", "", "roastup");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO menu (itemtype, itemname, description, cost, itemimage) VALUES (?, ?, ?, ?, ?)");
        
        // Bind parameters
        $stmt->bind_param("sssss", $itemType, $itemName, $itemDescription, $itemPrice, $targetFile);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Item added successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</body>
</html>
