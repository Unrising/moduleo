<?php 
require '../vendor/autoload.php';
use Medoo\Medoo;

class Database {
    private static $instance = null;

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new Medoo([
                'database_type' => 'mysql',
                'database_name' => 'moduleo',
                'server'        => 'localhost',
                'username'      => 'root',
                'password'      => '',
                'charset'       => 'utf8'
            ]);
        }
        return self::$instance;
    }
}

global $database;
$database = Database::getInstance();

?>