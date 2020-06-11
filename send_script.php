<?php 
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $msg = $_POST['msg'];
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>Dear sir , you have a new message from your website contact form</title>
  </head>
  <body>
  	<h1>" . $name . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail('info@oaa-law.com', $name, $email, $number, $msg)) {
   echo "Email sent, your request has been sent successfully.";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>