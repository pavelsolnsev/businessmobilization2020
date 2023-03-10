<?php
$file = dirname(__FILE__) . '/content.json';

$request = $_REQUEST;

$out = function ($outv)  {
	if(is_object($outv)) {
		if ($outv->error == null) {
			return $outv->response;
		}
	} else {
		if ($outv["error"] == null) {
			return $outv["response"];
		}
	}
};

$getPartners = function ($eventId, $file) use ($request,$out) {
	$response = cURLsend("https://syn.su/api/", json_encode(["token" => "a202dfb21d529c783e8c4851be62fb77", "model" => "Partners", "method" => "getPartnersByCRMEventId", "eventId" => $eventId]));
	if(array_key_exists("update",$request)) {
		var_dump('getPartners');
		echo "<pre>"; var_dump($response);echo "</pre>";
	}
	return $out($response);
};

$getPrices = function ($eventId, $file) use ($request,$out) {
	$response = cURLsend("https://syn.su/api/", json_encode(["token" => "a202dfb21d529c783e8c4851be62fb77", "model" => "Prices", "method" => "getPricesByCRMEventId", "eventId" => $eventId]));
	if(array_key_exists("update",$request)) {
		var_dump('getPrices');
		echo "<pre>"; var_dump($response);echo "</pre>";
	}
	return $out($response);
};

$getVersions = function ($eventId, $file) use ($request,$out) {
	$response = cURLsend("https://syn.su/api/", json_encode(["token" => "a202dfb21d529c783e8c4851be62fb77", "model" => "Versions", "method" => "getVersionsByCRMEventId", "eventId" => $eventId]));
	if(array_key_exists("update",$request)) {
		var_dump('getVersions');
		echo "<pre>"; var_dump($response);echo "</pre>";
	}
	return $out($response);
};

$getProducts = function ($products_id) use ($request,$out) {
	$query = [
		"query" => [
			"bool" => [
				"must"=> [
					[
						"terms" => [
							"id" => $products_id
						]
					]
				]
			]
		]
	];

	$response_corp = cURLsend( "https://corp-search.synergy.ru/api/search/product", json_encode($query) );

	$response['error'] = null;
	$response['response'] = $response_corp;

	if(array_key_exists("update",$request)) {
		var_dump('getProducts');
		echo "<pre>"; var_dump($response);echo "</pre>";
	}

	return $out($response);
};

$updateData = function ($eId, $file) use ($getVersions,$getPartners,$getPrices,$getProducts) {
	$prices = $getPrices($eId, $file);
	$products_id = array_column($prices, 'productId');

	$content = [
		"Versions" => $getVersions($eId, $file),
		"Partners" => $getPartners($eId, $file),
		"Prices" => $prices,
		// "Products" => $getProducts( $products_id )
	];

	$fp = fopen($file, "w+");
	fwrite($fp, json_encode($content));
	fclose($fp);
};

if (file_exists($file)) {
	if ((time() - filemtime($file)) > (60 * 60 * 3)) { // ?????????? ?????????????????? 60 ????????????
		$updateData($_REQUEST['eId'], $file);
	}
} else {
	$updateData($_REQUEST['eId'], $file);
}

if (array_key_exists("update", $_REQUEST)) {
	if ($_REQUEST['update'] == 1) {
		var_dump($_REQUEST);
		$updateData($_REQUEST['eId'], $file);
	}
}

function cURLsend($url, $postData) {
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	if ($postData != false) {
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
	}
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

	$response = curl_exec($curl);
	curl_close($curl);
	return json_decode($response,true);
}
