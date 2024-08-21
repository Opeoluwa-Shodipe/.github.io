<?php
// Check if POST data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the POST data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["msg"];

    // Set email parameters
    $EmailTo = "opeoluwashodipe94@gmail.com";
    $Title = "New Message Received";

    // Prepare email body text
    $Fields = "Name: " . $name . "\n";
    $Fields .= "Email: " . $email . "\n";
    $Fields .= "Message: " . $message . "\n";

    // Set the headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    $success = mail($EmailTo, $Title, $Fields, $headers);

    // Check if the mail was successfully sent
    if ($success) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
}
?>
