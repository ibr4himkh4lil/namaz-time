<?php
// Start the session
session_start();

// Hard-coded credentials for validation
$validAuthor = 'Ibrahim';
$validPassword = 'khalil';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get input values
    $author = $_POST['author'];
    $password = $_POST['password'];

    // Validate the credentials
    if ($author === $validAuthor && $password === $validPassword) {
        // Set session to authenticate the user
        $_SESSION['authenticated'] = true;

        // Redirect to the upload page
        header('Location: upload.php');
        exit; // Ensure the script stops after redirection
    } else {
        // If credentials are wrong, show an error message
        $errorMessage = "Invalid Author or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERMUX COMMAND STORE</title>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'VT323', monospace;
            background: radial-gradient(circle, #1a1a1a, #0d0d0d);
            color: #32ffa7;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        h1 {
            font-size: 40px;
            text-shadow: 0 0 10px #32ffa7, 0 0 20px #00ffb3;
            margin-bottom: 10px;
            animation: pulse 1.5s infinite alternate;
        }

        h2 {
            font-size: 18px;
            color: #fff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }

        @keyframes pulse {
            from {
                text-shadow: 0 0 10px #32ffa7, 0 0 20px #00ffb3;
            }
            to {
                text-shadow: 0 0 20px #00ffb3, 0 0 40px #32ffa7;
            }
        }

        .box {
            background: rgba(15, 15, 15, 0.95);
            border: 2px solid #32ffa7;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 20px #00ffb3;
            width: 350px;
            max-width: 90%;
            text-align: center;
        }

        .box input {
            width: 90%;
            padding: 10px;
            margin: 12px 0;
            border: none;
            border-radius: 6px;
            background: #2b2b2b;
            color: #00ffb3;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        .box input:focus {
            background: #1a1a1a;
            box-shadow: 0 0 10px #ff007b;
        }

        .box button {
            padding: 12px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 6px;
            background: linear-gradient(45deg, #00ffb3, #ff007b);
            color: white;
            font-size: 18px;
            font-family: inherit;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .box button:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 20px #ff007b, 0 0 30px #00ffb3;
        }

        .links a {
            display: inline-block;
            margin: 15px 5px;
            text-decoration: none;
            font-size: 14px;
            color: #00ffb3;
            transition: color 0.3s ease;
        }

        .links a:hover {
            color: #ff007b;
            text-shadow: 0 0 10px #ff007b, 0 0 20px #00ffb3;
        }

        .particles {
            position: absolute;
            width: 8px;
            height: 8px;
            background: rgba(50, 255, 167, 0.8);
            border-radius: 50%;
            animation: float 8s infinite;
            box-shadow: 0 0 10px rgba(50, 255, 167, 0.8);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
        }

        .particles:nth-child(1) { top: 20%; left: 15%; animation-delay: 1s; }
        .particles:nth-child(2) { top: 50%; left: 70%; animation-delay: 3s; }
        .particles:nth-child(3) { top: 75%; left: 40%; animation-delay: 5s; }
        .particles:nth-child(4) { top: 10%; left: 85%; animation-delay: 7s; }
        .particles:nth-child(5) { top: 60%; left: 25%; animation-delay: 9s; }
    </style>
</head>
<body>
    <div class="particles"></div>
    <div class="particles"></div>
    <div class="particles"></div>
    <div class="particles"></div>
    <div class="particles"></div>

    <h1>Ibrahim Khalil</h1>
    <h2>User: Ibrahim pass: khalil</h2>
    <div class="box">
        <form action="" method="POST">
            <input type="text" name="author" placeholder="Author" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Enter</button>
        </form>

        <!-- Display error message if credentials are wrong -->
        <?php if (isset($errorMessage)): ?>
            <div class="error" style="color: red; margin-top: 10px;">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <div class="links">
            <a href="https://alvo.chat/5GMk" target="_blank">Contact</a>
            <a href="https://alvo.chat/5GMk1" target="_blank">Retrieve Password</a>
        </div>
    </div>
</body>
</html>
