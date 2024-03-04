<?php
    class Client{
        var $name;
        var $age;
        var $city;
        public function __construct(){}
    }

    #objeto a json
    $client = new Client();
    $client->name = "Lolo";
    $client->age = 19;
    $client->city = "Fernando de la Mora";

    $code_json = json_encode($client);

    echo $code_json;
?>