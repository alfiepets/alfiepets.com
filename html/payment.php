<?php
require_once('config.inc.php');

	$error = '';
	$success = '';
	  if ($_POST) {
		Stripe::setApiKey(STRIPE_PRIVATE_KEY);
		$error = '';
		$success = '';
		try {
		  if (!isset($_POST['stripeToken']))
			throw new Exception("The Stripe Token was not generated correctly");
			Stripe_Charge::create(array("amount" => AMOUNT,
			"currency" => "usd",
			"card" => $_POST['stripeToken']));
			$success = 'Your payment was successful.';
		  }
			catch (Exception $e) {
			$error = $e->getMessage();
		}
	  }
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alfie Pets - Payment</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" /><![endif]-->
    <!--[if IE]>
	<style type="text/css">
		#contact_form label {
			display: block;
		}
	</style>
	<![endif]-->

    <!--##################### STRIPE #####################-->
    <script type="text/javascript" src="https://js.stripe.com/v1/"></script>
    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript">
    // this identifies your website in the createToken call below
    Stripe.setPublishableKey('<?php echo STRIPE_PUBLIC_KEY; ?>');
     
    function stripeResponseHandler(status, response) {
    if (response.error) {
    // re-enable the submit button
    $('.submit-button').removeAttr("disabled");
    // show the errors on the form
    $(".payment-errors").html(response.error.message);
    } else {
    var form$ = $("#payment-form");
    // token contains id, last4, and card type
    var token = response['id'];
    // insert the token into the form so it gets submitted to the server
    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
    // and submit
    form$.get(0).submit();
    }
    }
     
    $(document).ready(function() {
    $("#payment-form").submit(function(event) {
    // disable the submit button to prevent repeated clicks
    $('.submit-button').attr("disabled", "disabled");
    var chargeAmount = <?php echo AMOUNT; ?>; //amount you want to charge, in cents. 1000 = $10.00, 2000 = $20.00 ...
    // createToken returns immediately - the supplied callback submits the form if there are no errors
    Stripe.createToken({
    number: $('.card-number').val(),
    cvc: $('.card-cvc').val(),
    exp_month: $('.card-expiry-month').val(),
    exp_year: $('.card-expiry-year').val()
    }, chargeAmount, stripeResponseHandler);
    return false; // submit from callback
    });
    });
    </script>
    <!--##################### STRIPE #####################-->

    </head>
    <body class="contentpage">
<!-- Navigation -->
<div class="navbar navbar-default navbar-fixed-top affix inner-pages" role="navigation">
      <div class="container">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <h1><a class="navbar-brand" href="index.html"><strong>Alfie</strong>LLC<br />
            <span data-hover="Kennels">Dog Walking</span> </a></h1>
        </div>
    <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
        <li class="active"> <a href="index.html" title="Home"><span data-hover="Home">Home</span></a> </li>
        <li> <a href="services.html" title="Services"><span data-hover="Services">Services</span></a> </li>
        <li> <a href="about.html" title="About us"><span data-hover="About us">About us</span></a> </li>
        <li><a href="payment.php" title="Payment"><span data-hover="Payment">Payment</span></a></li>
        <!--						<li class="dropdown">
							<a href="services.html" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Services">Services</span> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="adoption.html" title="Adoption centre">Adoption centre</a>
								</li>
								<li>
									<a href="services.html" title="Dog boarding kennels">Dog boarding kennels</a>
								</li>
								<li>
									<a href="services-single.html" title="Dog walking">Dog walking</a>
								</li>
								<li>
									<a href="services.html" title="Home boarding">Home boarding</a>
								</li>
								<li>
									<a href="services.html" title="Puppy crèche">Puppy crèche</a>
								</li>
							</ul>
						</li> --> 
        <!--<li>
							<a href="contact.html" title="Contact us"><span data-hover="Contact us">Contact us</span></a>
						</li>-->
        <li class="purchase-btn" class="active">
        <form method="get" action="contact.html">
              <button type="submit" class="btn btn-default">Contact Us</button>
            </form>
        </li>
      </ul>
        </div>
  </div>
    </div>
<!-- Navigation end --> 

<!-- Contact -->
<div class="container">
      <div class="row">
    <div class="col-md-12 centered">
          <h3><span>Payment</span></h3>
        </div>
  </div>
    </div>
<!-- Contact end --> 
<!-- Content -->
<div class="container content">
      <div class="row">
    <div class="col-md-16">
      <h4><center><span>Payment Charge $50</span></center></h4>
      <form action="" method="POST" id="payment-form" class="form-horizontal" >
		<!--///////// Mesages /////////-->
         <div class="form-group">
           <label class="col-lg-4 control-label" for="inputStandard">&nbsp;</label>
           <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
             <label  class="error"><span class="payment-errors"><?= $error ?></span></label>
			 <label  class="error"><span class="payment-success"><?= $success ?></span></label>
           </div>
         </div>
        <!--///////// Mesages /////////-->  
        <div class="form-group">
         <label class="col-lg-4 control-label" for="inputStandard">Card Number</label>
         <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
         <input type="text" class="form-control card-number" size="20" autocomplete="off" placeholder="Card Number" />
         </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label" for="inputStandard">CVC</label>
          <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
          <input type="text" class="form-control card-cvc" size="4" autocomplete="off" placeholder="card-cvc" />
         </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label" for="inputStandard">Expiration (MM/YYYY)</label>
          <div class="col-lg-1" style="margin-top:0px; margin-bottom:0px;" >
          <input type="text" class="form-control card-expiry-month" size="2" placeholder="00" />
          </div>
          <div class="col-lg-2" style="margin-top:0px; margin-bottom:0px;" >
          <input type="text" class="form-control card-expiry-year" size="4" placeholder="0000" />
         </div>
        </div>
        <div class="form-group">
         <label class="col-lg-4 control-label" for="inputStandard">&nbsp;</label>
         <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
         <button type="submit" class="submit-button btn btn-default btn-green" placeholder="Send Message" >Submit Payment</button>
        </div>
        </div>
      </form>
    </div>
  </div>
    </div>
<!-- Content end --> 
<!-- Map -->
<div id="map" data-stellar-background-ratio=".3"> </div>
<!-- Map end --> 
<!-- Purchase -->
<div class="purchase">
      <div class="container">
    <div class="row">
          <div class="col-md-9">
        <p><strong>Alfie</strong> LLC is Atlanta's most pawsome dog walking company.<br />
              <span>Reach out to learn more about our services!</span></p>
      </div>
          <div class="col-md-2 purchase-button">
        <form method="get" action="contact.html">
              <button type="submit" class="btn btn-default btn-green">Request An Appointment</button>
            </form>
      </div>
        </div>
  </div>
    </div>
<!-- Purchase end --> 
<!-- Footer -->
<div class="footer">
      <div class="container">
    <div class="row">
          <div class="col-md-3 contact-info">
        <h6>A Little About Us</h6>
        <p><strong>The Alfie team formed in 2014 from a group of Atlanta's best and most experienced dog walkers and pet sitters. Bonded, insured, passionate and proven, you can rest assured that Alfie will take the very best care of you, your pup, and your home.</strong></p>
      </div>
          <!--					<div class="col-md-3 blog">
						<h6>Freshly blogged</h6>
						<p class="title"><a href="#" title="">Eodem modo typi, qui nunc nobis</a></p>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
						<p><a href="#" title="">Read this post&hellip;</a></p>
					</div>
					<div class="col-md-3">
						<h6>You may need this</h6>
						<ul>
							<li><a href="#" title="">Home</a></li>
							<li><a href="#" title="">Contact us</a></li>
							<li><a href="#" title="">FAQ</a></li>
							<li><a href="#" title="">Terms &amp; conditions</a></li>
							<li><a href="#" title="">Privacy policy</a></li>
						</ul>
					</div> -->
          <div class="col-md-3 contact-info">
        <h6>Keep in touch</h6>
        <p>Follow Alfie for all the latest news, and special offers.</p>
        <p class="social"> <a href="http://www.facebook.com/alfiepets" class="facebook" target="_blank"></a> <a href="http://www.instagram.com/alfiepets" class="instagram" target="_blank"></a> <a href="http://www.twitter.com/alfiepets" class="twitter" target="_blank"></a> </p>
        <p class="c-details"> <span>Email</span> <a href="mailto:info@alfiepets.com" title="">info@alfiepets.com</a><br >
              <span>Phone</span> (770) 712 0871 </p>
      </div>
        </div>
    <div class="row">
          <div class="col-md-12 copyright">
        <p>&copy; Copyright 2014. All rights reserved. Alfie LLC</p>
      </div>
        </div>
  </div>
    </div>
<!-- Footer end --> 
<!-- Javascript plugins --> 
<script src="https://code.jquery.com/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carouFredSel.js"></script> 
<script src="js/jquery.stellar.min.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> 
<script src="js/gmap3.min.js"></script> 
<script src="js/custom.js"></script> 
<script src="js/jquery-ui.min.js"></script>
</body>
</html>