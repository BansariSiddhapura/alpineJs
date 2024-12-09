<?php
// Configuration for the request
$url = 'https://campaigns.corbitaltech.dev/api/v1/subscribers?api_token=HjEYsKhd1ulldg7Vil1RHzjQMD1y1g1p9fdHublfx0P8NITKFeKqwraQ04a6';
$params = [
    'api_token' => 'HjEYsKhd1ulldg7Vil1RHzjQMD1y1g1p9fdHublfx0P8NITKFeKqwraQ04a6',
    'list_uid' => '', // Replace with the actual list_uid
    'EMAIL' => 'test@gmail.com',
    'tag' => 'envato,',
    'status' => 'subscribed',
];

header('Content-Type: application/json');

try {
    // Initialize cURL session
    $ch = curl_init();

    if ($ch === false) {
        throw new Exception('Failed to initialize cURL session.');
    }

    // Build query string from parameters
    $queryString = http_build_query($params);

    // Set cURL options
    curl_setopt_array($ch, [
        CURLOPT_URL => $url . '?' . $queryString,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
        ],
        CURLOPT_CUSTOMREQUEST => 'POST',
    ]);

    // Execute cURL request
    $response = curl_exec($ch);

    if ($response === false) {
        throw new Exception('cURL Error: ' . curl_error($ch));
    }

    // Get HTTP status code
    $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close cURL session
    curl_close($ch);

    // Handle response based on status code
    if ($httpStatusCode >= 200 && $httpStatusCode < 300) {
        $responseData = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Error decoding JSON response: ' . json_last_error_msg());
        }

        // Success - Return response data as JSON
        echo json_encode([
            'success' => true,
            'data' => $responseData,
        ]);
    } else {
         echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
    ]);
        throw new Exception("HTTP Error: " . $httpStatusCode . " - Response: " . $response);
    }
} catch (Exception $e) {
    // Return error response as JSON
    jsonResponse()
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
    ]);
}

function jsonResponse($success = true, $message = '', $data = null, $errors = [], $code = 200)
    {
        echo json_encode([
            'success' => $success,
            'message' => $message,
            'data'    => $data,
            'errors'  => $errors
        ]);
        http_response_code($code);
    }

?>
