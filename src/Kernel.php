<?php

namespace App;


use App\Service\Mailer;
use App\Service\Saver;
use App\Storage\Database;
use App\Storage\File;

class Kernel
{
    public function run ()
    {
       // $mailer = new Mailer();
       // $mailer ->send('test@test.com');

        $database = new Database();
        $files = new File();

        $databaseSaver = new Saver($database);
        $fileSaver = new Saver($files);

        $databaseSaver -> doIt ();
        $fileSaver -> doIt ();
    }
}