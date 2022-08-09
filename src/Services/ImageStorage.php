<?php

namespace Zaghrat\ConvertImages\Services;

class ImageStorage
{
    private const OUTPUT_DIR =  'images/';

    public function uploadImage(array $file): string
    {
        $filename = basename($file["name"]);
        $target_file = self::OUTPUT_DIR . $filename;

        move_uploaded_file($file["tmp_name"], $target_file);

        return $filename;
    }
}