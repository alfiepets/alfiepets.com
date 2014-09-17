<?php
	require_once('lib/Stripe.php');
	define('STRIPE_PRIVATE_KEY', 'sk_test_OGKg4GgcJrCcnDOQX90V51tM');
	define('STRIPE_PUBLIC_KEY', 'pk_test_4GrL4RHpInhsP37uiKzx958Z');
	define('AMOUNT', '5000');//amount you want to charge, in cents. 1000 = $10.00, 2000 = $20.00 ...
?>