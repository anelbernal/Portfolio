<?php 
	if(!isset($_SESSION)) {
	session_start();
	}

	$nameErr = $emailErr = $contBackErr = "";
	$name = $email = $contBack = $comment = "";
	$formErr = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["name"])) {
			$nameErr = "Name is required.";
			$formErr = true;
		} else {
			$name = cleanInput($_POST["name"]);
			//Use REGEX to accept only letters and white spaces
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "Only letters and standard spaces allowed.";
				$formErr = true;
			}
		}
		
		if (empty($_POST["email"])) {
			$emailErr = "Email is required.";
			$formErr = true;
		} else {
			$email = cleanInput($_POST["email"]);
			// Check if e-mail address is formatted correctly
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Please enter a valid email address.";
				$formErr = true;
			}
		}
		
		if (empty($_POST["contact-back"])) {
			$contBackErr = "Please let us know if we can contact you back.";
			$formErr = true;
		} else {
			$contBack = cleanInput($_POST["contact-back"]);
		}
		
		$comment = cleanInput($_POST["comments"]);
	}
//here line56 form
	function cleanInput($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) {

		$hostname = "php-mysql-exercisedb.slccwebdev.com";
		$username = "phpmysqlexercise";
		$password ="mysqlexercise";
		$databasename ="php_mysql_exercisedb";

    try {
        // creating NEW PDO with connections parameters
        $conn = new PDO("mysql: host=$hostname; dbname=$databasename, $username, $password");

        // set PDO error mode to exception
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
       //Variable containing SQL command
        $sql = "INSERT INTO MODEL(model_id, first_production_year)
        VALUES (:model_id, :first_production_year);";
        
        //Create prepared statement
        $stmt = $conn->prepare($sql);

        // Bind Parameters to variables
        $stmnt ->bindParam(':model_id', $model_id, PDO::PARAM_STR);
        $stmnt ->bindParam(':first_production_year', $first_production_year, PDO::PARAM_STR);

        // Execute SQL statement on server
        $stmt-> execute();

		// create thank you message
		$_SESSION['Message'] = '<p class="font-weight-bold">Thank you for your submission!</p><p class="font-weight-light">Your request has been sent.</p>';

		$_SESSION['complete'] = true;

		// Redirect
		header('location: ' . $_SERVER['Request_URI']);
		return;

   	} catch (PDOException $error) {

        //create error message
        $_SESSION['message'] = '<p>We apologize, the form was not submitted successfully. Please try again later.</p>';

		$_SESSION['complete'] = true;

	// Redirect
	header('location: ' . $_SERVER['Request_URI']);
	return;
	}

    $conn = null;

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
	<!-- Website Title -->
	<title>Create a PHP Form Filtering Solution</title>
	
</head>
	<!-- Website Title -->
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    </head>
    <body style="background-color:  rgb(241, 239, 221);" font-weight="" onload="askName()">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <header>
            <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <a href="#" class="navbar-brand">Anel's Website</a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav>
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item active"><a href="WEEK2.PHP" class="nav-link">Home|</a></li>
            <li class="navbar-item"><a href="about.php" class="nav-link">About me|</a></li>
            <li class="navbar-item"><a href="AmbgResume.pdf" class="nav-link">Resume|</a></li>
            <li class="navbar-item"><a href="portfolio.php" class="nav-link">Portfolio|</a></li>
            <li class="navbar-item"><a href="contact.php" class="nav-link">Contact me|</a> </li>  
        </ul>
    </nav>
        </header>
<body>
	<?php
		
	?>

	<!-- Contact Form Section -->
	<section id="contact">
		<div class="container py-5">
			<!-- Section Title -->
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<h2 class="display-4 font-weight-bold">Contact Me</h2>
					<hr />
				</div>
			</div>
			<!-- Contact Form Row -->
			<div class="row justify-content-center">
				<div class="col-6">
				
					<!-- Contact Form Start -->
					<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>
						
						<!-- Name Field -->
						<div class="form-group">
							<label for="name">Full Name:</label>
							<span class="text-danger">*<?php echo $nameErr; ?></span>
							<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" />
							
						</div>
						
						<!-- Email Field -->
						<div class="form-group">
							<label for="email">Email address:</label>
							<span class="text-danger">*<?php echo $emailErr; ?></span>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" />
						</div>
						
						<!-- Radio Button Field -->
						<div class="form-group">
							<label class="control-label">Can we contact you back?</label>
							<span class="text-danger">*<?php echo $contBackErr; ?></span>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes"  />
								<label class="form-check-label" for="yes">Yes</label>
							</div>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" />
								<label class="form-check-label" for="no">No</label>
							</div>
						</div>
						
						<!-- Comments Field -->
						<div class="form-group">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"></textarea>
						</div>

						<!-- Required Fields Note-->
						<div class="text-danger text-right">* Indicates required fields</div>
						
						<!-- Submit Button -->
						<button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
					</form>
					
				</div>
			</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="thankYouModalLabel">Thank You</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $_SESSION['message']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</section>

<!-- show modal -->
<?php
	if(isset($_SESSION['complete']) && $_SESSION['complete']){
		echo "<script>$('#thankYouModal').modal('show');</script>";
	}
?>
</body>
<!-- Footer -->
<footer class="py-4 bg-dark">
<div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
