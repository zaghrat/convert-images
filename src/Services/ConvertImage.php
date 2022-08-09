<?php

namespace Zaghrat\ConvertImages\Services;

class ConvertImage
{
    private const WORKING_DIR =  '/var/tmp/';

    public function convertJpegToWebp($input, $quality): string
    {
        $filename = md5(rand()) . '.webp';
        $output = self::WORKING_DIR . $filename;

        $im = imagecreatefromjpeg(self::WORKING_DIR . $input);
        imagewebp($im, $output, $quality);
        imagedestroy($im);

        return $filename;
    }

    public function convertPngToWebp($input, $quality): string
    {
        $filename = md5(rand()) . '.webp';
        $output = self::WORKING_DIR . $filename;

        $im = imagecreatefrompng(self::WORKING_DIR . $input);
        imagepalettetotruecolor($im);
        imagealphablending($im, true);
        imagesavealpha($im, true);

        imagewebp($im, $output, $quality);
        imagedestroy($im);

        return $filename;
    }
}