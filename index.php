<?php
require_once(__DIR__ . '/vendor/autoload.php');

// die(phpinfo());

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format


$jayParsedAry = [
    "consumerPii" => [
        "primaryApplicant" => [
            "name" => [
                "lastName" => "CANN",
                "firstName" => "JOHN",
                "middleName" => "N"
            ],
            "dob" => [
                "dob" => "1955"
            ],
            "ssn" => [
                "ssn" => "111111111"
            ],
            "currentAddress" => [
                "line1" => "510 MONDRE ST",
                "city" => "MICHIGAN CITY",
                "state" => "IN",
                "zipCode" => "46360"
            ]
        ]
    ],
    "requestor" => [
        "subscriberCode" => "2222222"
    ],
    "permissiblePurpose" => [
        "type" => "08"
    ],
    "resellerInfo" => [
        "endUserName" => "CPAPIV2TC21"
    ],
    "vendorData" => [
        "vendorNumber" => "072",
        "vendorVersion" => "V1.29"
    ],
    "addOns" => [
        "directCheck" => "",
        "demographics" => "Only Phone",
        "clarityEarlyRiskScore" => "Y",
        "liftPremium" => "Y",
        "clarityData" => [
            "clarityAccountId" => "0000000",
            "clarityLocationId" => "000000",
            "clarityControlFileName" => "test_file",
            "clarityControlFileVersion" => "0000000"
        ],
        "renterRiskScore" => "N",
        "rentBureauData" => [
            "primaryApplRentBureauFreezePin" => "1234",
            "secondaryApplRentBureauFreezePin" => "112233"
        ],
        "riskModels" => [
            "modelIndicator" => [
                ""
            ],
            "scorePercentile" => ""
        ],
        "summaries" => [
            "summaryType" => [
                ""
            ]
        ],
        "fraudShield" => "Y",
        "mla" => "",
        "ofacmsg" => "",
        "consumerIdentCheck" => [
            "getUniqueConsumerIdentifier" => ""
        ],
        "joint" => "",
        "paymentHistory84" => "",
        "syntheticId" => "N",
        "taxRefundLoan" => "Y",
        "sureProfile" => "Y",
        "incomeAndEmploymentReport" => "Y",
        "incomeAndEmploymentReportData" => [
            "verifierName" => "Experian",
            "reportType" => "ExpVerify-Plus"
        ]
    ],
    "customOptions" => [
        "optionId" => [
            "COADEX"
        ]
    ]
];



// try {
    $result = $apiInstance->creditReports($content_type, $jayParsedAry, $client_reference_id, $accept);
    header('Content-Type: application/json; charset=utf-8');
    echo $result;
// } catch (Exception $e) {
//     echo 'Exception when calling ConsumerServicesApi->creditReports: ', $e->getMessage(), PHP_EOL;
// }