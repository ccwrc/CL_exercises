<?php

require_once __DIR__ . '/../src/Tweet.php';
require_once __DIR__ . '/../src/connection.php';

class TweetTest extends PHPUnit_Extensions_Database_TestCase {

    public function getConnection() {
        $conn = new PDO($GLOBALS["DB_DSN"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWD"]);
        $conn->query("set foreign_key_checks=0");
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS["DB_NAME"]);
    }

    public function getDataSet() {
        return $this->createFlatXmlDataSet(__DIR__ . '/../datasets/Tweets.xml');
    }
    
    public function testTrue() {
        $this->assertTrue(true);
    }
 
    
}