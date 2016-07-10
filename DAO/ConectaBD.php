<?php

/**
 * Created by PhpStorm.
 * User: handyc
 * Date: 10/07/16
 * Time: 12:26
 */
    include  '../DAO/VAR/Vars.php';
    Abstract class ConectaBD
    {
        private static $instance = null;

        private static function Conectar()
        {
                if(self::$instance == NULL){
                    try {
                        self::$instance = new PDO('pgsql:host=localhost;dbname='.database,user,password);
                        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }catch (PDOException $error) {
                        echo $error->getMessage();
                    }
                    return self::$instance;
                }
        }

        public function GetConection(){
            return self::Conectar();
        }
}