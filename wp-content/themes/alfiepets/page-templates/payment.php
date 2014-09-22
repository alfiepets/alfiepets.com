<?php
/**
 * Template Name: Payment
 *
 * @package WordPress
 * @subpackage Alfiepets
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

<?php
//echo get_template_directory_uri();
//echo dirname(__FILE__);
	//require(get_template_directory_uri().'/lib/Stripe.php');
	//echo $_SERVER["DOCUMENT_ROOT"];die;
	require($_SERVER["DOCUMENT_ROOT"].'/wp-content/themes/alfiepets/lib/Stripe.php');
	define('STRIPE_PRIVATE_KEY', 'sk_test_OGKg4GgcJrCcnDOQX90V51tM');
	define('STRIPE_PUBLIC_KEY', 'pk_test_4GrL4RHpInhsP37uiKzx958Z');
	define('AMOUNT', '5000');//amount you want to charge, in cents. 1000 = $10.00, 2000 = $20.00 ...

	$error = '';
	$success = '';
	  if ($_POST) {
		Stripe::setApiKey(STRIPE_PRIVATE_KEY);
		$error = '';
		$success = '';
		try {
		  if (!isset($_POST['stripeToken']))
			throw new Exception("The Stripe Token was not generated correctly");
			
  		  $customer = Stripe_Customer::create(array(
			  //'email' => 'customer4@example.com',
			  'email' => $_POST['email'],
			  'card'  => $_POST['stripeToken']
		  ));
		  //echo'<pre>';print_r($customer);die;
		
		/*Stripe_Charge::create(array(
			"amount" => '0050',
			"currency" => "usd",
			"card" => $_POST['stripeToken']));*/
			$success = 'Your payment was successful.';
		  }
			catch (Exception $e) {
			$error = $e->getMessage();
		}
	  }
 
?>

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
	//alert(chargeAmount);
    // createToken returns immediately - the supplied callback submits the form if there are no errors
    Stripe.createToken({
    email: $('.card-email').val(),
    number: $('.card-number').val(),
    cvc: $('.card-cvc').val(),
    exp_month: $('.card-expiry-month').val(),
    exp_year: $('.card-expiry-year').val()
    }, chargeAmount, stripeResponseHandler);
    return false; // submit from callback
    });
    });
    </script>
	
	<div class="container">
			<div class="row">
				<div class="col-md-12 centered">
					<h3><span>Payment</span></h3>
				</div>
			</div>
		</div>
		
<div class="prices" data-stellar-background-ratio=".3">
			<div class="container">
				<div class="row">
					<div class="col-md-3 costs">
						<div data-stellar-ratio="1.2" data-stellar-vertical-offset="150" data-stellar-horizontal-offset="0">
							
<img width="53" height="45" alt="medium-dog" src="http://localhost/alfiepets/wp-content/uploads/2014/09/small-dog.png" class="alignnone size-full wp-image-38">
							<h4>Leg Stretch</h4>
							<p class="per-night">$18 / visit (purchased individually)</p>
							<p class="per-night">$16 / visit (purchased in packs of 5)</p>
							<p class="per-night">$14 / visit (daily service Mon-Fri)</p>
							<p>A short walk and potty break</p>
							<p>Water and treats as needed</p>
							<p>A great belly rub</p>
							<form method="get" action="contact.html">
								<button type="submit" class="btn btn-default btn-green">Book a Leg Stretch Plan</button>
							</form>
						</div>
					</div>
					<div class="col-md-3 costs">
						<div data-stellar-ratio="1.2" data-stellar-vertical-offset="150" data-stellar-horizontal-offset="0">
							
							
<img width="53" height="45" alt="medium-dog" src="http://localhost/alfiepets/wp-content/uploads/2014/09/medium-dog.png" class="alignnone size-full wp-image-38">
							<h4>The 5K (most popular option)</h4>
							<p class="per-night">$25 / visit (purchased individually)</p>
							<p class="per-night">$22.5 / visit (purchased in packs of 5)</p>
							<p class="per-night">$20 / visit (daily service Mon-Fri)</p>
							<p>At least 20 minutes of solid walking</p>
							<p>Plenty of exercise and play</p>
							<p>Water and treats as needed</p>
							<form method="get" action="contact.html">
								<button type="submit" class="btn btn-default btn-green">Book a 5K Plan</button>
							</form>
						</div>
					</div>
					<div class="col-md-3 costs">
						<div data-stellar-ratio="1.2" data-stellar-vertical-offset="150" data-stellar-horizontal-offset="0">
							
							<img width="53" height="45" alt="medium-dog" src="http://localhost/alfiepets/wp-content/uploads/2014/09/xlarge-dog.png" class="alignnone size-full wp-image-38">
							<h4>The Marathon</h4>
							<p class="per-night">$45 / visit (purchased individually)</p>
							<p class="per-night">$40.5 / visit (purchased in packs of 5)</p>
							<p class="per-night">$36 / visit (daily service Mon-Fri)</p>
							<p>45 minute run/jog/walk combo</p>
							<p>Lots of water and treats as needed</p>
							<p>Plenty of TLC</p>
							<form method="get" action="contact.html">
								<button type="submit" class="btn btn-default btn-green">Book a Marathon Plan</button>
							</form>
						</div>
					</div>
<!--					<div class="col-md-3 costs">
						<div data-stellar-ratio="1.2" data-stellar-vertical-offset="150" data-stellar-horizontal-offset="0">
							<img src="images/xlarge-dog.png" alt="Extra large dog pricing" />
							<h4>Extra large dog</h4>
							<p class="per-night">&pound;18 per day</p>
							<p>Wet/dry food included</p>
							<p>3 walks daily</p>
							<p>Social interaction</p>
							<form method="get" action="index.html">
								<button type="submit" class="btn btn-default btn-green">Book now</button>
							</form>
						</div>
					</div>-->
				</div>
			</div>
		</div>

		
		
<div class="container content">
			<div class="row">
				<div class="col-md-16">
				
				
<form action="" method="POST" id="payment-form" class="form-horizontal" >
     <div class="form-group">
           <label class="col-lg-4 control-label" for="inputStandard">&nbsp;</label>
           <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
             <label  class="error"><span class="payment-errors"><?= $error ?></span></label>
			 <label  class="error"><span class="payment-success"><?= $success ?></span></label>
           </div>
         </div>
<div class="form-group">
      <div class="newtab"><label class="col-lg-4 control-label" for="inputStandard">Email</label></div>
      <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
        <div class="newtab2"><input type="text" class="form-control card-email" name="email" autocomplete="off" placeholder="Email" /></div>
      </div>
    </div>
		<div class="form-group">
      <div class="newtab"><label class="col-lg-4 control-label" for="inputStandard">Card Number</label></div>
      <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
        <div class="newtab2"><input type="text" class="form-control card-number" maxlength="16" autocomplete="off" placeholder="Card Number" /></div>
      </div>
    </div>
	
	<div class="form-group">
      <div class="newtab"> <label class="col-lg-4 control-label" for="inputStandard">CVC</label></div>
      <div class="col-lg-4" style="margin-top:0px; margin-bottom:0px;" >
        <div class="newtab2"><input type="text" class="form-control card-cvc" maxlength="4" autocomplete="off" placeholder="card-cvc" /></div>
      </div>
    </div>
	
	 
	
	 <div class="form-group newform">
       <div class="newtab"><label class="col-lg-4 control-label" for="inputStandard">Expiration (MM/YYYY)</label></div>
     <div class="col-lg-1" style="margin-top:0px; margin-bottom:0px;" >
        <div class="newtab2"> <input type="text" class="form-control card-expiry-month" maxlength="2" placeholder="00" /></div>
       </div>
      <div class="col-lg-2" style="margin-top:0px; margin-bottom:0px;" >
 		 <div class="newtab2"><input type="text" class="form-control card-expiry-year" maxlength="4" placeholder="0000" /> </div>
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
<div id="map" data-stellar-background-ratio=".3">
		</div>

<?php
//get_sidebar();
get_footer();
