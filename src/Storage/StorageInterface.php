<?php
/**
 * Created by PhpStorm.
 * User: kateryna
 * Date: 14.01.19
 * Time: 13:57
 */

namespace App\Storage;


interface StorageInterface
{
    public function save ($data);
}