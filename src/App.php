<?php

namespace Zaghrat\ConvertImages;

use Zaghrat\ConvertImages\Services\ConvertImage;

class App
{
    public function __construct()
    {
    }

    public function start()
    {
        $convertor = new ConvertImage();
       var_dump( $convertor->convertJpegToWebp());

        // TODO use of OOP design pattern
        // TODO upload image + convert it + show both images

    }
}

