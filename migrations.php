<?php
namespace app\core;

class Database
{
        public \PDO $pdo;

        public function __construct(array $config) 
        {
            $dsn = $config[''] ?? '';
            $user = $config[''] ?? '';
            $password = $config[''] ?? '';
            $this->pdo = new \PDO($dsn, $user, $password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        }
}

