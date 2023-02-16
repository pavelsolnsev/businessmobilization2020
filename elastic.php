<?php

function getProducts($invoice) {

    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/invoice/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$invoice);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;

}

function getProduct($id) {

    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/product/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$id);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;

}

function ElasticPriceFormat($price) {
	return number_format($price, 0, '', ' ');
}

function ElasticDateFormat($date) {
	$months = [
		"01" => "января",
		"02" => "февраля",
		"03" => "марта",
		"04" => "апреля",
		"05" => "мая",
		"06" => "июня",
		"07" => "июля",
		"08" => "августа",
		"09" => "сентября",
		"10" => "октября",
		"11" => "ноября",
		"12" => "декабря"
	];
	$mouth = date("m", strtotime($date));

	return 'C ' . date("d", strtotime($date)) . ' ' . $months[$mouth];
}

function getElasticCurrPrice($row) {
	$n = -1;
	if (is_array($row)) {
		foreach ($row as $price) {

			if (time() >= strtotime($price->active_from)) {
				$n++;
			}
		}
	}
	return $n;
}

// Запрос продуктов, переменные хранятся в config.php

$invoice = getProducts($invoiceId);
$invoice_devforum = getProducts($invoiceId_devForum);
$invoice_legalforum = getProducts($invoiceId_legalforum);
$invoice_mainprice = getProducts($invoiceId_mainPrice);
$invoice_brain2021 = getProducts($invoiceId_brain2021);
$invoice_brain2021 = getProducts($invoiceId_brain2021);
$invoice_brain2021_online = getProducts($invoiceId_brain2021_online);

try {

    if($invoice && $invoice->products != null) {

        foreach($invoice->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $product_standard:
                    $standard_isActive = $row->active;
                    $standard_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $standard_price    = $row->base_price->price;

                    $standard_price_next           = $row->additional_prices[$num]->price;
                    $standard_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $standard_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_business:
                    $business_isActive = $row->active;
                    $business_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $business_price    = $row->base_price->price;

                    $business_price_next           = $row->additional_prices[$num]->price;
                    $business_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $business_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_vip:
                    $vip_isActive = $row->active;
                    $vip_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $vip_price    = $row->base_price->price;

                    $vip_price_next           = $row->additional_prices[$num]->price;
                    $vip_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $vip_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_express:
                    $express_isActive = $row->active;
                    $express_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $express_price    = $row->base_price->price;

                    $express_price_next           = $row->additional_prices[$num]->price;
                    $express_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $express_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;
            }

        }


    }

    if($invoice_devforum && $invoice_devforum->products != null) {

        foreach($invoice_devforum->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $product_id_offline:
                    $offline_isActive = $row->active;
                    $offline_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $offline_price    = $row->base_price->price;

                    $offline_price_next           = $row->additional_prices[$num]->price;
                    $offline_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $offline_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;
            }

        }

    }

    if($invoice_legalforum && $invoice_legalforum->products != null) {

        foreach($invoice_legalforum->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $product_legalforum_id_offline:
                    $legalforum_offline_isActive = $row->active;
                    $legalforum_offline_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $legalforum_offline_price    = $row->base_price->price;

                    $legalforum_offline_price_next           = $row->additional_prices[$num]->price;
                    $legalforum_offline_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $legalforum_offline_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_legalforum_id_offline_standard:
                    $legalforum_offline_standard_isActive = $row->active;
                    $legalforum_offline_standard_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $legalforum_offline_standard_price    = $row->base_price->price;

                    $legalforum_offline_standard_price_next           = $row->additional_prices[$num]->price;
                    $legalforum_offline_standard_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $legalforum_offline_standard_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_legalforum_id_offline_business:
                    $legalforum_offline_business_isActive = $row->active;
                    $legalforum_offline_business_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $legalforum_offline_business_price    = $row->base_price->price;

                    $legalforum_offline_business_price_next           = $row->additional_prices[$num]->price;
                    $legalforum_offline_business_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $legalforum_offline_business_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_legalforum_id_offline_vip:
                    $legalforum_offline_vip_isActive = $row->active;
                    $legalforum_offline_vip_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $legalforum_offline_vip_price    = $row->base_price->price;

                    $legalforum_offline_vip_price_next           = $row->additional_prices[$num]->price;
                    $legalforum_offline_vip_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $legalforum_offline_vip_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;
            }

        }

    }

    if($invoice_mainprice && $invoice_mainprice->products != null) {

        foreach($invoice_mainprice->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $PRODUCT_ID_MONTH:
                    $PRICE_MONTH    = $row->base_price->price;
                break;
                case $PRODUCT_ID_6_MONTH:
                    $PRICE_6_MONTH    = $row->base_price->price;
                break;
                case $PRODUCT_ID_12_MONTH:
                    $PRICE_12_MONTH    = $row->base_price->price;
                break;
            }

        }

    }

    if($invoice_brain2021 && $invoice_brain2021->products != null) {

        foreach($invoice_brain2021->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $product_brain2021_id_offline_business:
                    $brain2021_offline_business_isActive = $row->active;
                    $brain2021_offline_business_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $brain2021_offline_business_price    = $row->base_price->price;

                    $brain2021_offline_business_price_next           = $row->additional_prices[$num]->price;
                    $brain2021_offline_business_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $brain2021_offline_business_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_brain2021_id_offline_vip:
                    $brain2021_offline_vip_isActive = $row->active;
                    $brain2021_offline_vip_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $brain2021_offline_vip_price    = $row->base_price->price;

                    $brain2021_offline_vip_price_next           = $row->additional_prices[$num]->price;
                    $brain2021_offline_vip_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $brain2021_offline_vip_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_brain2021_id_offline_platinum:
                    $brain2021_offline_platinum_isActive = $row->active;
                    $brain2021_offline_platinum_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $brain2021_offline_platinum_price    = $row->base_price->price;

                    $brain2021_offline_platinum_price_next           = $row->additional_prices[$num]->price;
                    $brain2021_offline_platinum_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $brain2021_offline_platinum_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;
            }

        }

    }

    if($invoice_brain2021_online && $invoice_brain2021_online->products != null) {

        foreach($invoice_brain2021_online->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $product_brain2021_id_online:
                     $brain2021_online_isActive = $row->active;
                     $brain2021_online_isRecurring = isset($row->recurring->type->id) ? true: false;
                     $brain2021_online_price    = $row->base_price->price;

                     $brain2021_online_price_next           = $row->additional_prices[$num]->price;
                     $brain2021_online_price_next_ishidden  = $row->additional_prices[$num]->hide;
                     $brain2021_online_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;
            }

        }

    }      

} catch (Exception $e) {

}

?>