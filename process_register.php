<?php
$serverName = getenv('DB_HOST') ?: "tcp:mycardiffmet.database.windows.net,1433";
$database = getenv('DB_NAME') ?: "myDatabase";
$dbUser = getenv('DB_USER') ?: "myadmin";
$dbPassword = getenv('DB_PASS') ?: "oA_4)3Zm";

$connectionOptions = array(
    "Database" => $database,
    "Uid" => $dbUser,
    "PWD" => $dbPassword,
    "Encrypt" => 1,
    "TrustServerCertificate" => 0
);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: register.php");
    exit();
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($name === '' || $email === '' || $password === '') {
    header("Location: register.php?error=" . urlencode("Please fill all fields"));
    exit();
}

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    $errors = sqlsrv_errors();
    $message = "Database connection failed: ";

    if ($errors !== null) {
        foreach ($errors as $error) {
            $message .= $error['message'] . " ";
        }
    }

    header("Location: register.php?error=" . urlencode(trim($message)));
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO shopusers (name, email, password) VALUES (?, ?, ?)";
$params = array($name, $email, $hashedPassword);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    $errors = sqlsrv_errors();
    $message = "Database error: ";

    if ($errors !== null) {
        foreach ($errors as $error) {
            $message .= "SQLSTATE: " . ($error['SQLSTATE'] ?? 'N/A') . ", ";
            $message .= "Code: " . ($error['code'] ?? 'N/A') . ", ";
            $message .= "Message: " . ($error['message'] ?? 'Unknown error') . "; ";
        }
    }

    sqlsrv_close($conn);
    header("Location: register.php?error=" . urlencode(trim($message)));
    exit();
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

header("Location: success.php");
exit();
