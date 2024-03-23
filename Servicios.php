<?php

class Servicios {
    public function Post($data) {
        $data_json = json_encode($data);
        //consulta
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => $data_json,
            ),
        ));
        $response = file_get_contents('https://sheetdb.io/api/v1/qhqe9m47zucdh', false, $context);
        return $response;
    }

    public function Get() {
        $response = file_get_contents("https://sheetdb.io/api/v1/qhqe9m47zucdh");
        $newdata = json_decode($response, true);
        return $newdata;
    }
}
?>
