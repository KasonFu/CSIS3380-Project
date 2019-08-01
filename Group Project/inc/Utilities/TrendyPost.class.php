<?php

class TrendyPost {
	static function GetTrendyPost() {
		$queryData = array(
			'IMGURPLATFORM' => 'web',
			'IMGURUIDJAFO' => 'c29f47914531cf5602261b5a50d7bf6e406801229299b1af4e7a353d39aeeda2',
			'SESSIONCOUNT' => '3',
			'client_id' => '546c25a59c58ad7',
			'realtime_results' => 'false',
			'showViral' => 'true'
		);

		$result = RestClient::call("GET", $queryData);
		if($result == null) return null;

		// var_dump(json_decode($result)->data);

		return json_decode($result)->data;
	}
}