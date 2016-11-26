<?php 

function deliver_response($response){
	// Define HTTP responses
	$http_response_code = array(
		403 => 'Forbidden',  
		404 => 'Not Found',  
		500 => 'Internal Server Error',  
		505 => 'HTTP Version Not Supported'
		);

	// Set HTTP Response
	header('HTTP/1.1 '.$response['status'].' '.$http_response_code[ $response['status'] ]);
	// Set HTTP Response Content Type
	header('Content-Type: application/json; charset=utf-8');
	// Format data into a JSON response
	$json_response = json_encode($response['data']);
	// Deliver formatted data
	echo $json_response;

	exit;
}

$response['status'] = 404;
$response['data'] = NULL;

deliver_response($response);

 ?>