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


    public function insert($table, $parameters)
    {

        $sql = sprintf(
         'insert into %s (%s) values (%s);', 
         $table,
         implode(', ', array_keys($parameters)), //implode turns array into a string and adds separator ', ' in between
         ':' . implode(', :', array_keys($parameters))
        );



        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters); //not clear why we use $parameters in this line

        } catch (Exception $e) {
            die('Whoops, something went wrong.'); //we could print mysql error message here - $e->getMessage()
        }
    }
}