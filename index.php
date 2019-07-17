<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/vendor/cloudmersive/cloudmersive_virusscan_api_client/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');



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