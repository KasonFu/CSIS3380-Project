<?php

class RestClient    {

    static function call($method, $callData)    {

        $requestHeader = array('requesttype' => $method);

        $data = array_merge($requestHeader, $callData);

        $options = array(
            'http' => array(
                'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
                'method' => $method,
                'content' => http_build_query($data)
            )
        );

        //Create the Stream
        $context = stream_context_create($options);
        $result = file_get_contents(API_URL, false, $context);

        //Returnt he results
        return $result;
    }
    
}

?>