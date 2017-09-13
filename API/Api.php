<?php
	require __DIR__ . '/vendor/autoload.php';

	use Automattic\WooCommerce\Client;


	$woocommerce = new Client(
		'http://localhost:20970', 
		'ck_3c849614d0c8fc820dc4d0bdf30f2da239bf9cf3', 
		'cs_bc3345cdc202f67bed2e46476b91e0192772e399',
		[
			'wp_api' => true,
			'version' => 'wc/v1',
		]
	);

	try {

		$data = [];


		$response = $woocommerce->get('products');

		$lastRequest = $woocommerce->http->getResponse();

		$headers = $lastRequest->getHeaders();

		$totalPages = $headers['X-WP-TotalPages'];

		print_r($totalPages);


		for ($i=1; $i < $totalPages; $i++) { 
			$params = [
				'page' => $i,
				'timeout' => 1500000
			];

			$response = $woocommerce->get('products', $params);
		}

		/*do {
			

			print_r($response);
			
			array_push($data, $response);

			$count = Count($response);

			$i++;

			print_r('   i:' . $i);
		} while ($count > 0);*/



		


	} catch (Exception $e) {
		print_r($e);
	}


?>