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

      session_start();


      if (empty ($_SESSION ['Refresh'])) {
          $_SESSION ['Refresh'] = 0;
          echo 'Вы еще не обновляли страницу.';

      } elseif
          ($_SESSION ['Refresh'] >= 2 && $_SESSION ['Refresh'] <= 4) {
          echo 'Вы  обновили страницу: ' . $_SESSION ['Refresh'] . ' раза';

      } else {
          echo 'Вы обновили страницу: ' . $_SESSION ['Refresh'] . ' раз ';
      }

      $_SESSION['Refresh']++;

    }
}