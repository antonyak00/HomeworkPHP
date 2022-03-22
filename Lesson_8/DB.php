<?php

class DB
{
    public function excute(string $sql): bool
    {
        $dbh = new PDO('mysql:host=localhost:8889;dbname=test', 'root', 'root');
        $sth = $dbh->prepare($sql);
        if ($sth->execute() != null){
            return true;
        }
        return false;
    }

    public function query(string $sql, array $data): array
    {
        $dbh = new PDO('mysql:host=localhost:8889;dbname=test', 'root', 'root');
        $sth = $dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}