<?php
    session_start();
    require 'vendor/autoload.php';

    $app = new \Zaghrat\ConvertImages\App();

    if (!isset($_FILES['fileToUpload'])) {
        $app->displayUploadForm();
    } else {

        try {
            $app->start($_FILES['fileToUpload'], $_POST['quality']);
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();

            $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            header('Location: ' . $url);

        }
    }

