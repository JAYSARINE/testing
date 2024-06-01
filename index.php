<!DOCTYPE html>
<html>
<head>
    <title>Kaspersky License Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #FFD700, #FFA07A);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="password"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kaspersky License Generator</h2>
        <form method="post" action="welcome.php">
            <input type="password" name="password" placeholder="Enter Password" required>
            <br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
