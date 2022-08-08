<?php

namespace Zaghrat\ConvertImages\Services;

class ConvertImage
{
    public function convertJpegToWebp(): void
    {
        header('Content-Type: image/webp');

        $im = imagecreatefromjpeg('/var/www/html/convert-images/images/unity.jpg');

        $length = imagesx($im);
        $height = imagesy($im);

        $text_color = imagecolorallocate($im,  rand(0, 255),  rand(0, 255), rand(0, 255));

        imagestring($im, 5,$length - 200 , $height - rand(100, 200),  'WebP with PHP', $text_color);

        imagewebp($im, null, 100);

        imagedestroy($im);

    }
}