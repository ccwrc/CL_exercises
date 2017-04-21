<?php

require_once __DIR__ . '/../src/Message.php';
require_once __DIR__ . '/../src/connection.php';

class MessageTest extends PHPUnit_Extensions_Database_TestCase {

    public function getConnection() {
        $conn = new PDO($GLOBALS["DB_DSN"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWD"]);
        $conn->query("set foreign_key_checks=0");
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS["DB_NAME"]);
    }

    public function getDataSet() {
        return $this->createFlatXmlDataSet(__DIR__ . '/../datasets/Messages.xml');
    }

    public function testCreateMessageIfDataIsCorrect() {
        $message = new Message(1, "senderName", 2, "receiverName", "4message", false);
        $message->CreateMessage(1, "senderName", 2, "receiverName", "4message");
        $this->assertInstanceOf('Message', $message);
    }

    public function testCreateMessageIfDataIsIncorrect() {
        $message = new Message(1, "senderName", 2, "receiverName", "4message", false);
        $this->assertNull($message->CreateMessage(199, "senderName", 2, "receiverName", "4message"));
    }

    public function testDeleteMessage() {
        $this->assertTrue(Message::DeleteMessage(3));
    }

    public function testGetAllRecievedMessages() {
        $messages = Message::GetAllRecievedMessages(1, "recieverName", 2);
        $this->assertInternalType("array", $messages);
        $this->assertInstanceOf('Message', $messages[0]);
    }

    public function testGetAllSendMessages() {
        $messages = Message::GetAllSendMessages(1, "recieverName", 2);
        $this->assertInternalType("array", $messages);
        $this->assertInstanceOf('Message', $messages[0]);
    }

    public function testOpenMessage() {
        $message = new Message(1, "senderName", 2, "receiverName", "4message", false);
        $message->openMessage();
        $this->assertTrue(date("Y-m-d H:i:s") === $message->getOpened());
    }
    
    public function testSaveToDB() {
        $message = new Message(1, "senderName", 2, "receiverName", "4message", false);
        $this->assertTrue($message->saveToDB());
    }

}
