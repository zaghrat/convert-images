<?php

namespace Zaghrat\ConvertImages;

use Exception;
use Zaghrat\ConvertImages\Services\ConvertImage;
use Zaghrat\ConvertImages\Services\ImageStorage;

class App
{
    private ImageStorage $imageStorage;
    private ConvertImage $convertImage;

    public function __construct()
    {
        $this->imageStorage = new ImageStorage();
        $this->convertImage = new ConvertImage();
    }

    public function displayUploadForm(): void
    {
        $error = null;
       if (array_key_exists('error', $_SESSION)) {
           $error = $_SESSION['error'];
           unset($_SESSION['error']);
       }

        $page = 'upload.html.php';
        require 'View/base.html.php';
    }


    /**
     * @throws Exception
     */
    public function start(array $file, int $quality = 50): void
    {
       $filename =  $this->imageStorage->uploadImage($file);

        $webpImage = match ($file['type']) {
            'image/jpeg' => $this->convertImage->convertJpegToWebp($filename, $quality),
            'image/png' => $this->convertImage->convertPngToWebp($filename, $quality),
            default => throw new Exception('Please upload only JPEG or PNG images!'),
        };

        $page = 'converted-image.html.php';
        require 'View/base.html.php';
    }
}

