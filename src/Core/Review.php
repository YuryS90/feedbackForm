<?php

namespace Core;

use Core\Config;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;


class Review
{
    private $table;

    /**
     * подключение к БД и работа с таблицей
     */
    public function __construct()
    {
        $this->table = new DbEntity(
            Config::MYSQL_TABLE,
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );
    }
}







// if (!empty($_POST)) {
//   (new DbEntity(
//     Config::MYSQL_TABLE,
//     DB::Link([
//       'host' => Config::MYSQL_HOST,
//       'username' => Config::MYSQL_USER_NAME,
//       'password' => Config::MYSQL_PASSWORD,
//       'dbname' => Config::MYSQL_DATABASE
//     ])
//   ))->add($_POST);
// }