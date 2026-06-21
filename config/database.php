<?php
    class Database{
        public function getConnection(){

            $conn = new PDO("mysql:host=localhost; dbname=loja_pws; charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
    }
?>

