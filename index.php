<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop - Welcome</title>
    <style>
        :root {
            --primary: #2c3e50;
            --accent: #007bff;
            --accent-hover: #0056b3;
            --text: #555;
            --bg: #f4f4f4;
            --white: #fff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        .header {
            background-color: var(--primary);
            color: var(--white);
            padding: 20px 0;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .welcome-text {
            text-align: center;
            margin-top: 60px;
            font-size: 1.2em;
        }

        .welcome-text h2 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .signup-link {
            display: inline-block;
            background-color: var(--accent);
            color: var(--white);
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 18px;
            margin-top: 20px;
        }

        .signup-link:hover {
            background-color: var(--accent-hover);
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>MyShop</h1>
            <p>Your one-stop destination for amazing products</p>
        </div>
    </div>

    <div class="container">
        <div class="welcome-text">
            <h2>Welcome to MyShop</h2>
            <p>Join our community today to access exclusive deals and features!</p>
            <a href="register.php" class="signup-link">Create Your Account</a>
        </div>
    </div>
</body>
</html>
