<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - MyShop</title>
    <style>
        :root {
            --primary: #2c3e50;
            --accent: #007bff;
            --accent-hover: #0056b3;
            --danger-bg: #f8d7da;
            --danger-border: #f5c6cb;
            --danger-text: #721c24;
            --bg: #f4f4f4;
            --white: #fff;
            --text: #333;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: var(--text);
        }

        .header {
            background-color: var(--primary);
            color: var(--white);
            padding: 20px 0;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .register-form {
            background: var(--white);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-top: 80px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            background-color: var(--accent);
            color: var(--white);
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .btn:hover {
            background-color: var(--accent-hover);
        }

        .error {
            color: var(--danger-text);
            padding: 10px;
            margin: 10px 0;
            background-color: var(--danger-bg);
            border: 1px solid var(--danger-border);
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>MyShop</h1>
        <p>Create Your Account</p>
    </div>

    <div class="register-form">
        <h2>Register</h2>

        <?php if (isset($_GET['error'])): ?>
            <div class="error">
                <?php echo htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <form method="post" action="process_register.php">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <input type="submit" class="btn" value="Register">
            </div>
        </form>

        <p style="text-align:center; margin-top: 20px;">
            <a href="index.php">Back to Home</a>
        </p>
    </div>
</body>
</html>
