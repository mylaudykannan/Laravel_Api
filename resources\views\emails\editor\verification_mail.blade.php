<!DOCTYPE html>
<html>

<head>
    <title>Career Portal Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .verification-code {
            font-size: 18px;
            font-weight: bold;
            color: #4CAF50;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .footer {
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Welcome to Our Career Portal!</h1>
    <p>Thank you for choosing to advance your career with us. We are excited to have you on board.</p>

    <p>As a registered member of our Career Portal, you gain access to a wide range of job opportunities, career resources, and the chance to connect with leading employers in your industry.</p>

    <p>Your career journey starts here, and we look forward to supporting you every step of the way.</p>

    <p class="verification-code">Email OTP: {{ $mailData['emailOtp'] }}</p>

    <p>
        To complete your registration, click the button below:
        <a class="cta-button" href="{{ env('SITE_URL') . '/email-email-validation?otp='.$mailData['emailOtp'].'&email='.$mailData['email'] }}" target="_blank">Verify Email</a>
    </p>

    <p class="footer">Thank you for choosing our Career Portal. We wish you success in your professional endeavors.</p>
</body>

</html>
