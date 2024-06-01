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
        .download-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }
        .download-link:hover {
            background-color: #005F6B;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kaspersky License Generator</h2>
        <form method="post">
            <input type="password" name="password" placeholder="Enter Password" required>
            <br>
            <button type="submit" name="login">Login</button>
        </form>

        <?php
        if (isset($_POST['login'])) {
            $password = $_POST['password'];
            if ($password === 'hackme@112233') {
                // Generate a random activation code
                function generateActivationCode() {
                    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                    $activationCode = '';
                    for ($i = 0; $i < 25; $i++) {
                        $activationCode .= $characters[rand(0, strlen($characters) - 1)];
                    }
                    return $activationCode;
                }

                // Get remaining days (set to 730 for 2 years)
                $remaining_days = 730;

                // Generate activation code
                $activation_code = generateActivationCode();

                // Calculate expiration date
                $expiration_date = date('m/d/Y', strtotime("+730 days"));

                // Create the content for LICENSE.DAT
                $fileContent = "-----BEGIN KASPERSKY LICENSE KEY-----\n";
                $fileContent .= "$activation_code\n";
                $fileContent .= "Expiration Date: $expiration_date\n";
                $fileContent .= "-----END KASPERSKY LICENSE KEY-----\n";

                // Write content to LICENSE.DAT file
                $filename = 'LICENSE.DAT';
                file_put_contents($filename, $fileContent);

                // Provide download link for LICENSE.DAT file
                echo "<a class='download-link' href='$filename' download>Download LICENSE.DAT</a>";
            } else {
                echo "<p style='color: red;'>Incorrect password. Please try again.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
