<?php 
// QueryBuilder filel is responsible for building sql queries. 
// in this case we have one case to select everyting from particular table. 
// in order for this to work, we need PDO instance
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
        
        return $tasks = $statement->fetchAll(PDO::FETCH_CLASS);
    }
}