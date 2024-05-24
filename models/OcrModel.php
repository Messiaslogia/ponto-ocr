<?php

class OcrModel{
    private $db;

    public function __construct(){
        $dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try{
            $this->db = new PDO($dns, DB_USER, DB_PASS, $options);
        }catch (PDOException $e){
            die("Conexão perdida: " . $e->getMessage());
        }
    }
}