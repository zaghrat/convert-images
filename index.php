<?php
// Create a blank image and add some text
header('Content-Type: image/webp');

$im = imagecreatefromjpeg("images/unity.jpg");

// Save the image
imagewebp($im);

// Free up memory
imagedestroy($im);
