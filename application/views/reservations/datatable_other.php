<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin: 25px;
        }

        .icon {
            font-size: 50px;
            color: #4caf50;
            margin-bottom: 20px;
        }

        .message {
            font-size: 24px;
            color: #333;
            font-weight: 600;
        }

        .subtext {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .submit-button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .submit-button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .submit-button:active {
            transform: translateY(1px);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="icon">😊</div>
        <div class="message">Thank you for your reservation <?= $user['name'] ?>!</div>
        <div class="subtext">We look forward to welcoming you soon.</div>
        <button class="submit-button" onclick="window.location.href='<?= base_url('auth/logout') ?>'">Done</button>
    </div>

</body>

</html>