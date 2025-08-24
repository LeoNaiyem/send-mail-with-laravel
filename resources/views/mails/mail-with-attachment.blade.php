
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Invoice</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 600px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 32px;
        }
        .header {
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 16px;
            margin-bottom: 24px;
        }
        .header h1 {
            margin: 0;
            color: #2d3748;
            font-size: 28px;
        }
        .content {
            color: #4a5568;
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 32px;
            font-size: 14px;
            color: #a0aec0;
            text-align: center;
        }
        .btn {
            display: inline-block;
            margin-top: 24px;
            padding: 12px 24px;
            background: #3182ce;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Purchase Invoice</h1>
        </div>
        <div class="content">
            <p>Dear Customer,</p>
            <p>Thank you for your purchase! Please find your invoice attached to this email.</p>
            <p>If you have any questions or need further assistance, feel free to reply to this email.</p>
            <a href="#" class="btn">View Invoice</a>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>
</html>