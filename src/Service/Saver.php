<?php
/**
 * Created by PhpStorm.
 * User: kateryna
 * Date: 14.01.19
 * Time: 13:59
 */

namespace App\Service;


use App\Storage\StorageInterface;

class Saver
{
    /**
     * @var StorageInterface
     */
    private $storage;

    /**
     * Saver constructor.
     * @param $storage
     */
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function doIt () {
        $this ->storage ->save('Данные для сохранения');
    }
}