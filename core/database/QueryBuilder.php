<?php
namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder
{

    protected $pdo;
    protected $tablename;

    public function __construct(PDO $pdo)
    {

        $this->pdo = $pdo;
    }


    public function table(string $name): self {
        $this->tablename = $name;
        return $this;
    }

    public function whereAdmin(string $column, string $value)
    {
        $column = htmlspecialchars($column);
        $value =  htmlspecialchars($value);

        $sql = $sql = "SELECT * FROM {$this->tablename} WHERE " . $column . ' = :value AND admin = 1';

        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':value', $value);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function all()
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$this->tablename}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($parameters)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $this->tablename,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
