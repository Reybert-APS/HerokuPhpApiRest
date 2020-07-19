<?php
class Database{

    private $db_host = 'bonbfvmxmebaphnprorq-mysql.services.clever-cloud.com';
    private $db_name = 'bonbfvmxmebaphnprorq';
    private $db_username = 'uyrhc7lmifumqn81';
    private $db_password = 'xU7plvXBjPuI07R3QKT2';

    public function dbConnection(){
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage();
            exit;
        }
    }
}
?>