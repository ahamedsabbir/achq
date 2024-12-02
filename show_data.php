<?php
$client_id = "6709b3cf040495001a6f0921";
$secret = "81a67e21c60e9974ab8b2bb4348a25";

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://sandbox.plaid.com/link/token/get",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json'
    ],
    CURLOPT_POSTFIELDS => json_encode([
        "client_id" => $client_id,
        "secret" => $secret,
        "link_token" => "link-sandbox-bd964420-eed0-4bbd-8cbc-81a1c2d2dc37"
    ]),
]);

$response = curl_exec($curl);

curl_close($curl);

print_r($response);