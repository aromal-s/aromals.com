<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $place = $_POST['place'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $message = $_POST['message'];

  // Set up the email recipient and headers
  $to = 'aromals0479@gmail.com';  // Replace with your email address
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";

  // Compose the email body
  $email_body = "Name: $name \n\n";
  $email_body .= "Email: $email \n\n";
  $email_body .= "Message: \n$message";

  // Send the email
  mail($to, $subject, $email_body, $headers);

  // Redirect the user to a thank-you page
  header('Location: index.html');
}
?>