<?php

session_start();
if($_SESSION['mail']==''|| $_SESSION['log']==false)
	header("Location:login.php");

  $mail=$_SESSION['mail'];
  $con=new mysqli("localhost","root","","roastup");
  if(!$con)
  {
    echo "There is an error while connection";
  }
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Assuming $con is your database connection

    // Loop through each item's quantity to update
    foreach ($_POST['qty'] as $item_id => $quantity) {
        // Sanitize inputs to prevent SQL injection
        $item_id = mysqli_real_escape_string($con, $item_id);
        $quantity = mysqli_real_escape_string($con, $quantity);

        // Update the quantity of the item in the database
        $update_query = "UPDATE temp SET qty='$quantity' WHERE id='$item_id' AND userid='$mail'";
        mysqli_query($con, $update_query);
    }

    // Redirect back to the cart page or display a success message
    header("Location: form.php");
    exit(); // Make sure to exit after a header redirect
}
?>
