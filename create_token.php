<?php

// Your existing credentials
$client_id = "6709b3cf040495001a6f0921";
$secret = "81a67e21c60e9974ab8b2bb4348a25"; // assuming this is the secret
$client_user_id = "6709b3cf040495001a6f0921"; // replace with actual unique user id

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://sandbox.plaid.com/link/token/create",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json'
    ],
    CURLOPT_POSTFIELDS => json_encode([
        "client_id" => $client_id,
        "secret" => $secret,
        "client_name" => "Money Transfer App",
        "user" => [ "client_user_id" => $client_user_id, "phone_number" => "+8801775567493" ],
        "products" => ["auth"],
        "country_codes" => ["US"],
        "language" => "en",
        "webhook" => "https://achq.reigeeky.com/",
        "redirect_uri" => "https://achq.reigeeky.com/make_public_token.html"
    ]),
]);

$response = json_decode(curl_exec($curl));

curl_close($curl);


