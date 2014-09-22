<?php
require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_4QWrH8aWkMhSbMYi2nksO8zO",
  "publishable_key" => "pk_test_4QWrE0SGm6sb0Za9UhYN4NqX"
);

Stripe::setApiKey($stripe['secret_key']);
?>