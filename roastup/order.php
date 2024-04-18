<?php
if (session_status() == PHP_SESSION_NONE) {
    // Start the session
    session_start();
}
if($_SESSION['mail']==''|| $_SESSION['log']==false)
	header("Location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ROASTUP-ORDER</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	<script>
		function p()
		{
			var mob=document.getElementById("mobile");
			var add= document.getElementById("address");
			var paym=document.getElementById("pay");
				
			if(mob.value && add.value && paym.value) 
		
			{
				alert('Successfully Ordered');
				
			}
			
				
		}
				
	</script>
	
    </head>
    <body>
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="home.php" class="navbar-brand"><span>ROASTUP</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="home.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="feature.php" class="nav-item nav-link">Feature</a>
                    <a href="menu.php" class="nav-item nav-link">Menu</a>
                    <a href="order.php" class="nav-item nav-link active">Order</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="form.php" class="nav-item nav-link">Cart</a>
                    <a href="ordered_list.php" class="nav-item nav-link">Orders Details</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header mb-0"></div>
    <div class="booking">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="booking-form">
                        
                        <form action="delete.php" method="POST">
                            <h3><strong>ADDRESS FOR DELIVERY</strong></h3><br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mobile" id="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="address"><strong>ADDRESS</strong></label>
                                <textarea class="form-control" name="story" rows="4" id="address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pay"><strong>PAYMENT MODE</strong></label>
                                <select class="form-control" id="pay" required>
                                    <option value="">Select Payment Mode</option>
                                    <option value="UPI">UPI</option>
                                    <option value="ThruCards">ThruCards</option>
                                    <option value="COD">COD</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn custom-btn">PLACE ORDER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

        
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                     <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Srinivasa Center,Nandyal</p>
                                    <p><i class="fa fa-phone-alt"></i>+919618095243</p>
                                    <p><i class="fa fa-envelope"></i>admin@roastup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>SUGGESTIONS</h2>
                            <p></p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn custom-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">ROASTUP</a>, All Right Reserved.</p>
                   
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
