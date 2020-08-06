<?php

class Terms extends Dbh {
    protected function getAllTerms(){
        $statement = 'SELECT * FROM glossary';
        
        $sth = $this->connect()->prepare($statement);
        $sth->execute();
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}
?>