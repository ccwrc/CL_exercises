<?php

class Tweet{
    static private $conn;

    private $id;
    private $userId;
    private $userName;
    private $tweet;

    // This function sets connection for this class to use
    // This function needs to be run on startup
    public static function SetConnection($newConnection){
        // error $conn = $newConnection;
        Tweet::$conn = $newConnection;
    }

    //this function returns:
    //   new Tweet object if new entry was added to table
    //   null if there was some problem
    public static function CreateTweet($creatorId, $creatorName, $tweet){
        // error $sqlStatement = "INSERT INTO Tweets(user_id, tweet) values ($creatorId, '$Tweet')";
        $sqlStatement = "INSERT INTO Tweets(user_id, tweet) values ($creatorId, '$tweet')";
        if (Tweet::$conn->query($sqlStatement) === TRUE) {
            return new Tweet(Tweet::$conn->insert_id, $creatorId, $creatorName, $tweet);
        }
        //error
        return null;
    }

    //this function return:
    //   true if tweet was deleted
    //   false if not
    public static function DeleteTweet($toDeleteId){
        $sql = "DELETE FROM Tweets WHERE id = {$toDeleteId}";
        if (Tweet::$conn->query($sql) === TRUE) {
            // error return false;
            return true;
        }
        // error return true;
        return false;
    }

    public static function GetAllUserTweets($creatorId, $creatorName, $limit = 0){
        $ret = array();
        // error $sqlStatement = "Select Tweets.id, tweet from Tweets where user_id = $creatorId";
        $sqlStatement = "Select * from Tweets where user_id = $creatorId";
        if($limit > 0){
            $sqlStatement .= " LIMIT $limit";
        }
        $result = Tweet::$conn->query($sqlStatement);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $ret[] = new Tweet($row['id'], $row['user_id'], $creatorName, $row['tweet']);
            }
        }
        return $ret;
    }

    public static function GetTweet($id){
        // error $sqlStatement = "Select user_id, name, tweet from Tweets join Users on Users.id = Tweets.id where id=$id";
        $sqlStatement = "Select user_id, name, tweet from Tweets join Users on Users.id = Tweets.id where user_id=$id";
        $result = Tweet::$conn->query($sqlStatement);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Tweet($id, $row['user_id'], $row['name'], $row['tweet']);
        }
        return null;
    }

    // error private function __construct($newId, $newUserId, $userName, $newTweet){
    public function __construct($newUserId, $userName, $newTweet){
        // error $this->id = $newId+1;
        $this->id = -1;
        $this->userId = $newUserId;
        $this->userName = $userName;
        $this->tweet = $newTweet;
    }

    public function getId(){
        return $this->id;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function getTweetText(){
        return $this->tweet;
    }

    public function setTweetText($newTweet){
        $this->tweet = $newTweet;
    }

    //this function is responsible for saving any changes done to User to database
    public function saveToDB(){
        $sql = "UPDATE Tweets SET tweet='{$this->tweet}' WHERE id={$this->id}";
        return Tweet::$conn->query($sql);
    }
}