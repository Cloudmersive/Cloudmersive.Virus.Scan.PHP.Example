<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/vendor/cloudmersive/cloudmersive_virusscan_api_client/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'f199b121-4d0d-495c-a6c2-44b83f12dce2');



$apiInstance = new Swagger\Client\Api\ScanApi(
    
    
    new GuzzleHttp\Client(),
    $config
);
$input_file = "C:\\temp\\invoice_diag28.png"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->scanFile($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanApi->scanFile: ', $e->getMessage(), PHP_EOL;
}
?>