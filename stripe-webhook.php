<?php

// Be sure to replace this with your actual test API key (switch to the live key later)
\Stripe\Stripe::setApiKey("sk_test_your_key");


// Retrieve the request's body and parse it as JSON
$input = @file_get_contents("php://input");
$event_json = json_decode($input);

// MY SECRET ENDPOINT
$endpoint_secret = "whsec_your_endpoint_key";

$sig_header = $_SERVER["HTTP_STRIPE_SIGNATURE"];
$event = null;

try {
  $event = \Stripe\Webhook::constructEvent(
    $input, $sig_header, $endpoint_secret
  );
} catch(\UnexpectedValueException $e) {
  http_response_code(400);
  exit();
} catch(\Stripe\Error\SignatureVerification $e) {
  http_response_code(400);
  exit();
}

if (isset($event)) {
  $customer = \Stripe\Customer::retrieve($event->data->object->customer);
  $stripe_email = $customer->email;

$user = get_user_by( 'email', $stripe_email );
	$user_id = $user->user_id;
	$new_value = 1000;
	add_user_meta( $user_id, '_your_level', $new_value);
	
	
}
?>
