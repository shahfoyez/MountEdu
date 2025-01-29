<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Contacting Us</title>
</head>
<body>
<h2>Thank you for reaching out to us!</h2>
<p>Hi {{ $mailData['name'] }},</p>
<p>We have received your message with the following details:</p>
<p><strong>Email: </strong>{{ $mailData['email'] }}</p>
<p><strong>Subject: </strong>{{ $mailData['subject'] }}</p>
<p><strong>Message: </strong></p>
<p>{{ $mailData['message'] }}</p>
<p>We will get back to you soon.</p>
</body>
</html>
