<?php
if (isset($_POST['subbtn'])) {
    $to = $_POST['receiver'];
    $from = $_POST['sender'];
    $sub = $_POST['txtsub'];
    $msg = $_POST['txtmsg'];

    // Validate email addresses
    if (!filter_var($to, FILTER_VALIDATE_EMAIL) || !filter_var($from, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit;
    }

    $to_email = $to;
    $subject = $sub;
    $body = $msg;
    $headers = "From: $from\r\n";

    try {
        if (mail($to_email, $subject, $body, $headers)) {
            echo "<script>alert('Email successfully sent to $to_email...');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";

        } else {
            throw new Exception("Email sending failed");
        }
    } catch (Exception $e) {
        echo "Email sending failed: " . $e->getMessage();
    }
}
?>