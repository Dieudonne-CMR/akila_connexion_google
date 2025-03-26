<?php 

// Remplacez ces valeurs par vos informations
$accessToken = 'YOUR_ACCESS_TOKEN'; // Votre token d'accès API
$phoneNumber = 'PHONE_NUMBER_TO_CHECK'; // Le numéro de téléphone à vérifier

$url = "https://graph.facebook.com/v13.0/PHONE_NUMBER_ID";
$headers = [
    'Authorization: Bearer ' . $accessToken,
    'Content-Type: application/json'
];

$data = [
    'messaging_product' => 'whatsapp',
    'to' => $phoneNumber,
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Erreur cURL : ' . curl_error($ch);
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $responseData = json_decode($response, true);

    if ($httpCode == 200) {
        if (isset($responseData['status']) && $responseData['status'] == 'valid') {
            echo 'Le numéro est enregistré sur WhatsApp.';
        } else {
            echo 'Le numéro n\'est pas enregistré sur WhatsApp.';
        }
    } else {
        echo 'Erreur HTTP : ' . $httpCode;
        print_r($responseData);
    }
}

curl_close($ch);


//================================example 2===============================================================


function verifyWhatsAppNumber($accessToken, $phoneNumber) {
    $url = 'https://graph.facebook.com/v16.0/' . $your_whatsapp_business_account_id . '/phone_numbers';
    $params = [
        'access_token' => $accessToken,
        'phone_number' => $phoneNumber,
    ];

    // Initialize curl
    $ch = curl_init();

    // Set curl options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute curl request and fetch response
    $response = curl_exec($ch);

    // Check for curl errors
    if ($response === false) {
        $error = curl_error($ch);
        curl_close($ch);
        return ['success' => false, 'error' => $error];
    }

    // Close curl session
    curl_close($ch);

    // Decode the JSON response
    $result = json_decode($response, true);

    // Return the result
    if (isset($result['data']) && !empty($result['data'])) {
        return ['success' => true, 'data' => $result['data']];
    } else {
        return ['success' => false, 'error' => 'Number not found on WhatsApp'];
    }
}

// Example usage
$accessToken = 'YOUR_ACCESS_TOKEN';
$phoneNumber = 'PHONE_NUMBER_TO_CHECK';
$result = verifyWhatsAppNumber($accessToken, $phoneNumber);

if ($result['success']) {
    echo 'The number is associated with a WhatsApp account.';
} else {
    echo 'The number is not associated with a WhatsApp account. Error: ' . $result['error'];
}
?>

