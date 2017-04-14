<?php


class Message{
    static private $conn;

    private $id;
    private $senderId;
    private $senderName;
    private $receiverId;
    private $receiverName;
    private $opened;
    private $message;

    // This function sets connection for this class to use
    // This function needs to be run on startup
    public static function SetConnection($newConnection){
        Message::$conn = $newConnection;
    }

    //this function returns:
    //   new Message object if new entry was added to table
    //   null if there was some problem
    public static function CreateMessage($senderId, $senderName, $receiverId, $receiverName, $message){
        $sqlStatement = "INSERT INTO Messages(sender_id, reciever_id, message) values ($senderId, $receiverId, '$message')";
        if (Message::$conn->query($sqlStatement) === TRUE) {
            return new Message(Message::$conn->insert_id, $senderId, $senderName, $receiverId, $receiverName, $message, false);
        }
        //error
        return null;
    }

    //this function return:
    //   true if tweet was deleted
    //   false if not
    public static function DeleteMessage($toDeleteId){
        $sql = "DELETE FROM Messages WHERE id = {$toDeleteId}";
        if (Message::$conn->query($sql) === TRUE) {
            return true;
        }
        return false;
    }

    public static function GetAllRecievedMessages($recieverId, $recieverName, $limit = 0){
        $ret = array();
        $sqlStatement = "select Messages.id, sender_id, name, reciever_id, opened, message from Messages join Users on Messages.sender_id = Users.id where reciever_id = $recieverId";
        if($limit > 0){
            $sqlStatement .= " LIMIT $limit";
        }
        $result = Message::$conn->query($sqlStatement);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $ret[] = new Message($row['id'], $row['reciever_id'], $row['name'], $row['reciever_id'], $recieverName, $row['message'], $row['opened']);
            }
        }
        return $ret;
    }

    public static function GetAllSendMessages($senderId, $senderName, $limit = 1){
        $ret = array();
        $sqlStatement = "select Messages.id, sender_id, name, reciever_id, opened, message from Messages join Users on Messages.reciever_id = Users.id where sender_id = $senderId";
        if($limit > 0){
            $sqlStatement .= " LIMIT $limit";
        }
        $result = Message::$conn->query($sqlStatement);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $ret[] = new Message($row['id'], $row['sender_id'], $senderName, $row['reciever_id'], $row['name'], $row['message'], $row['opened']);
            }
        }
        return $ret;
    }

    private function __construct($newId, $senderId, $senderName, $receiverId, $receiverName, $message, $opened){
        $this->id = $newId;
        $this->senderId = $senderId;
        $this->senderName = $senderName;
        $this->receiverId = $receiverId;
        $this->receiverName = $receiverName;
        $this->message = $message;
        $this->opened = false;
    }

    public function getId(){
        return $this->id;
    }

    public function getSenderId(){
        return $this->senderId;
    }

    public function getSenderName(){
        return $this->senderName;
    }

    public function getReceiverId(){
        return $this->receiverId;
    }

    public function getReceiverName(){
        return $this->senderName;
    }

    public function getMessage(){
        return $this->message;
    }

    public function setMessageText($newMessage){
        $this->message = $newMessage;
    }

    public function openMessage(){
        $this->opened = date("Y-m-d H:i:s");
        $this->saveToDB();
    }

    //this function is responsible for saving any changes done to User to database
    public function saveToDB(){
        $sql = "UPDATE Messages SET opened='{$this->receiverId}' WHERE id={$this->id}";
        return Message::$conn->query($sql);
    }
}