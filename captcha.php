<?php
session_start();

// Define possible characters
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

// Generate random CAPTCHA text
$captcha_text = '';
for ($i = 0; $i < 6; $i++) {
    $captcha_text .= $characters[rand(0, strlen($characters) - 1)];
}

// Set session variable
$_SESSION['captcha'] = $captcha_text;

// Create image
$image = imagecreatetruecolor(120, 40);
$background_color = imagecolorallocate($image, 255, 255, 255); // White background
imagefill($image, 0, 0, $background_color);

// Set font
$font_path = './ttfher/Amagra.ttf'; // Replace with the actual path to your font file
$font_size = 20;
$font_color = imagecolorallocate($image, 0, 0, 0); // Black text

// Write text on image
$text_x = 5;
$text_y = 25;
imagettftext($image, $font_size, 0, $text_x, $text_y, $font_color, $font_path, $captcha_text);

// Add noise (optional)
for ($i = 0; $i < 50; $i++) {
    imagesetpixel($image, rand() % 120, rand() % 40, rand(0, 255));
}

// Output image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
