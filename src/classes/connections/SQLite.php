<?php
namespace App\Core\Classes\Connections;

use App\Core\Classes\Connection;
use App\Core\Interfaces\ConnectionInterface;

class SQLite extends Connection {
    protected ?\PDO $pdo = null;
    protected string $dsn = 'sqlite:' . __DIR__ . '/../../../database/database.sqlite';
    protected array $attributes = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ];
}