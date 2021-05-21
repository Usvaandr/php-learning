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
    // public function insertData($table, $value)
    // {
    //     $statement1 = $this->pdo->prepare("insert into {$table} (description, completed) values ({$value}, true)");

    //     $statement1->execute();

    //     return $tasks = $statement1->fetchAll(PDO::FETCH_CLASS);
    // }


    public function insert($table, $parameters)
    {

        $sql = sprintf(
         'insert into %s (%s) values (%s);', 
         $table,
         implode(', ', array_keys($parameters)),
         ':' . implode(', :', array_keys($parameters))
        );



        try {
            
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {
            die('Whoops, something went wrong.');
        }


        // die(var_dump($sql));

        // $statement=>execute(['name' => 'Joe', 'email' => 'j@gmail.com'])
    }
}