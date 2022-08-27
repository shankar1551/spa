<?php
    header("ACCESS-CONTROL-ALLOW-ORIGIN: *");
    header('Content-Type: application/json');

    include_once("../database/connect.php");
    include_once("../database/endpoint.php");
    // include_once("./middleware.php");

    // checkAutorization();

    $data = json_decode(file_get_contents("php://input"),true);
    
    
    
    //VERIFYING INPUT FIELDS
    if(empty($data)) response(json_encode("nodata"),400);
   
    $object = new query();
    
    //FILTERING STRING
    // $table = $object->FilterString($data);

    //fetching All the data required in the hope page
    $info = $object-> GetHomePageInfo($data);

    response(json_encode($info),200);

    function response($message,$code) {
        http_response_code($code);
        print_r($message);
        exit();
    }
    
?>