<?php
class Dbh {
    private $HOST;
    private $DBNAME;
    private $USER;
    private $PASSWORD;

    protected function connect(){
        $this->HOST = $_ENV['HOST'];
        $this->DBNAME = $_ENV['DBNAME'];
        $this->USER = $_ENV['USER'];
        $this->PASSWORD = $_ENV['PASSWORD'];
        $this->DSN = 'mysql:host='.$this->HOST.';dbname='.$this->DBNAME;
        
        $pdo= new PDO($this->DSN, $this->USER, $this->PASSWORD);
        
        return $pdo;

    }
}
?>