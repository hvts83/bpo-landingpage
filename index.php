<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$services = implode(', ', $_POST['service'] );
		$from = 'The Doctors BPO Contact Form';
		$to = 'rodrigo.colorado@thedoctorsbpo.com;marissa.campos@thedoctorsbpo.com';
		$subject = 'BPO Website - Contact Form Message';
		$body ="From: $name\n E-Mail: $email\n Services Checked: $services";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Message Sent! Thank You</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Doctors Business Process Outsource">
<meta name="author" content="The Doctors BPO">
<title>The Doctors BPO - Business Process Outsource</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/bpo.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29624893-6', 'auto');
  ga('send', 'pageview');

</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href="#page-top"> <img class="img-responsive" src="img/bpo-all-white.png"/> </a> </div>
  </div>
  <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <h1 class="brand-heading text-center">OPTIMIZE, ENJOY AND GROW YOUR PRACTICE</h1>
      </div>
      <form class="form-inline" role="form" method="post" action="index.php">
        <div class="col-lg-6">
          <div class="panel panel panel-primary panel panel-transparent">
            <div class="panel-heading">
              <h3 class="text-center">PATIENT SERVICES</h3>
            </div>
            <div class="panel-body">
              <div class="checkbox">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="service[]" id="service[]" value="PS Benefit Reporting and Follow Up">
                    Benefit Reporting and Follow Up </label>
                </div>
                <br/>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="service[]" id="service[]" value="PS Claims Follow Up and Resolution">
                    Claims Follow Up and Resolution</label>
                </div>
                <br/>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="service[]" id="service[]" value="PS Pre-Authorization Follow Up with Patient">
                    Pre-Authorization Follow Up with Patient</label>
                </div>
                <br/>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="service[]" id="service[]" value="PS Rescheduling Services">
                    Rescheduling Services</label>
                </div>
                <br/>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="service[]" id="service[]" value="PS Patient Appointment Confirmation">
                    Patient Appointment Confirmation</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel panel panel-primary panel panel-transparent">
            <div class="panel-heading">
              <h3 class="text-center">PATIENT SUPPORT</h3>
            </div>
            <div class="panel-body">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="service[]" id="service[]" value="PatSup Inbound Calls for Patient Solutions">
                  Inbound Calls for Patient Solutions </label>
              </div>
              <br/>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="service[]" id="service[]" value="PatSup Post Operation Call">
                  Post Operation Call</label>
              </div>
              <br/>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="service[]" id="service[]" value="PatSup Treatment Plan Acceptance Follow Up">
                  Treatment Plan Acceptance Follow Up</label>
              </div>
              <br/>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="service[]" id="service[]" value="PatSup Hygiene Reactivation Process">
                  Hygiene Reactivation Process </label>
              </div>
              <br/>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="service[]" id="service[]" value="Collections Follow Up">
                  Collections Follow Up</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="padding-top:20px;">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group form-group-lg">
              <label for="name" class="control-label">
              <h4>Name</h4>
              </label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
               </div>
            <div class="form-group form-group-lg">
              <label for="email" class="control-label">
              <h4>Email</h4>
              </label>
              <input type="email" class="form-control" required id="email" name="email" placeholder="Email">
               </div>
            <div class="form-group form-group-lg">
              <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary btn-lg">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2"><?php echo "<p class='text-danger'>$errName</p>";?><?php echo "<p class='text-danger'>$errEmail</p>";?> <?php echo $result; ?> </div>
        </div>
      </form>
    </div>
  </div>
</header>

<!-- Footer -->
<footer>
  <div class="container text-center">
    <p><a href="mailto:info@thedoctorsbpo.com">info@thedoctorsbpo.com</a></p>
    <p>Copyright &copy; The Doctors BPO 2016</p>
  </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom Theme JavaScript -->
<script src="js/grayscale.js"></script>
</body>
</html>
