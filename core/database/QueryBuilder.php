<?php

class QueryBuilder {

    protected $pdo;

    public function __construct ( $pdo ) {

        $this->pdo = $pdo;
    }

    public function selectAll ( $table ) {

        $statement = $this->pdo->prepare("SELECT * FROM {$table};");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectById ( $table, $id ) {

        $sql = "SELECT * FROM {$table} WHERE id=:id;";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(['id' => $id]);


        return $statement->fetch(PDO::FETCH_OBJ);

    }

    public function insert ( $table, $parameters ) {

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)),
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch ( Exception $e ) {

            die($e->getMessage());

        }

    }

    public function update ( $table, $id, $parameters ) {

        $sql = sprintf(
            'UPDATE %s SET %s WHERE id=:id',
            $table,
            implode(', ', array_map(fn ($key) => "{$key}=:{$key}", array_keys($parameters))),
        );

        try {

            $statement = $this->pdo->prepare($sql);
            $placeholdersValues = $parameters;
            $placeholdersValues['id'] = $id;
            $statement->execute($placeholdersValues);

        } catch ( Exception $e ) {

            die($e->getMessage());

        }

    }

    public function delete ($table, $id){
        $sql = "DELETE FROM {$table} WHERE id=:id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(['id' => $id]);
    }

}
