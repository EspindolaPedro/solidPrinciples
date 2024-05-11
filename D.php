<?php

/*Quando temos que lidar com varias dependências no mesmo código é fundamental que criamos uma interface para que seja feito a conexão da menira correta.*/
interface DBConnection {
    public function connect();
}
class MySqlConnection implements DBConnection{
    public function connect() {

    }
}

class UserDAO {
    private $db;

    public function __construct(DBConnection $dbCon) {
        $this->db = $dbCon;
    }
}

$dbCon = new MySqlConnection();
$userDAO = new UserDAO( $dbCon );