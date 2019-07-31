<?php

class RestClient
{
	static function call($method, $callData)
	{

		//Reference: https://stackoverflow.com/questions/5647461/how-do-i-send-a-post-request-with-php


		// State the request header
		// $requestHeader = array('requesttype' => $method);

		// //We have to merge the two arrays so they are one array in order to have them build properly otherwise we will end up with an embeded k,v inside a k,v, the function can only process one flat k,v array.
		// $data = array_merge($requestHeader,$callData);                    

		// $options = array(
		//     'https	' => array(
		//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		//         'method'  => $method,
		//         'content' => http_build_query($data)
		//     )
		// );

		// $context  = stream_context_create($options);
		// $result = file_get_contents(API_URL, false, $context);

		// return $result;

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.imgur.com/3/gallery/hot/viral/1?IMGURPLATFORM=web&IMGURUIDJAFO=c29f47914531cf5602261b5a50d7bf6e406801229299b1af4e7a353d39aeeda2&SESSIONCOUNT=3&client_id=546c25a59c58ad7&realtime_results=false&showViral=true",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				"Accept: */*",
				"Host: api.imgur.com"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
			return null;
		} else {
			return $response;
		}
	}
}
