<?php

require_once __DIR__ . '/../src/Message.php';
require_once __DIR__ . '/../src/connection.php';

class CommentTest extends PHPUnit_Extensions_Database_TestCase {

    public function getConnection() {
        $conn = new PDO($GLOBALS["DB_DSN"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWD"]);
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS["DB_NAME"]);
    }

    public function getDataSet() {
        return $this->createFlatXmlDataSet(__DIR__ . '/../datasets/Messages.xml');
    }
    
    
    
    
    
}