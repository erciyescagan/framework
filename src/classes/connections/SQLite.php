<?php
namespace App\Core\Classes\Connections;

use App\Core\Classes\Connection;

class SQLite extends Connection {
    protected ?\PDO $pdo = null;
    protected string $dsn = '';
    protected array $attributes = [];

    public function __construct()
    {
        $this->dsn = $_ENV['DB_HOST'] . __DIR__ . $_ENV['DB_PATH'] . $_ENV['DB_NAME'];
        $this->attributes = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];
    }
 
}