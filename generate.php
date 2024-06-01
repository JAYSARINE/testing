<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: index.php');
    exit();
}

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

// Force download of the file
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
readfile($filename);

// Destroy the session and redirect back to login
session_destroy();
exit();
?>
