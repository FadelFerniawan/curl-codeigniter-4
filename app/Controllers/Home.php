<?php

namespace App\Controllers;

use Config\Services;


class Home extends BaseController
{
    public function index()
    {
        $curl = service('curlrequest');
        // OR $curl = \Config\Services::curlrequest();

        $apiData = "https://prodev-api.ilcs.co.id/ibis_api_external_dev_v2/index.php/SingleBilling/getSppBDoc";

        $posts_data = $curl->request("get", $apiData, [
            "headers" => [
                "Accept" => "application/json"
            ]
        ]);

        echo $posts_data->getReason();
        echo $posts_data->getStatusCode();
        print_r($posts_data->getBody());
    }
}
