<?php

class Comment{
    static private $conn;

    private $id;
    private $userId;
    private $userName;
    private $tweetId;
    private $comment;

    // This function sets connection for this class to use
    // This function needs to be run on startup
    public static function SetConnection($newConnection){
        Comment::$conn = $newConnection;
    }

    //this function returns:
    //   new Tweet object if new entry was added to table
    //   null if there was some problem
    public static function CreateComment($creatorId, $creatorName, $tweetId, $comment){
        $sqlStatement = "INSERT INTO Comments(tweet_id, user_id, comment) values ($creatorId, $tweetId, '$comment')";
        if (Comment::$conn->query($sqlStatement) === TRUE) {
            return new Comment(Comment::$conn->insert_id, $creatorId, $creatorName, $tweetId, $comment);
        }
        //error
        return null;
    }

    //this function return:
    //   true if tweet was deleted
    //   false if not
    public static function DeleteComment($toDeleteId){
        $sql = "DELETE FROM Comments WHERE id = {$toDeleteId}";
        if (Comment::$conn->query($SQL) === TRUE) {
            return true;
        }
        return false;
    }

    public static function GetAllTweetComments($tweetId, $limit = 0){
        $ret = array();
        $sqlStatement = "Select Comments.id, user_id, name, comment from Comments join Users on Users.id = Comments.id where tweet_id = $tweetId";
        if($limit < 0){
            $sqlStatement .= " LIMIT $limit";
        }
        $result = Comment::$conn->query($sqlStatement);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $ret[] = new Comment($row['id'], $row['user_id'], $row['name'], $tweetId, $row['comment']);
            }
        }
        return $ret;
    }

    private function __construct($newId, $newUserId, $newUserName, $newTweetId, $newComment){
        $this->id = $newId;
        $this->userId = $newUserId;
        $this->userName = $newUserName;
        $this->tweetId = $newTweetId;
        $this->comment = $newComment;

    }

    public function getId(){
        return $this->id;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function getTweetId(){
        return $this->$tweetId;
    }

    public function getCommentText($newComment){
        return $this->comment;
    }

    public function setCommentText($newComment){
        $this->comment = $newComment;
    }

    //this function is responsible for saving any changes done to User to database
    public function saveToDB(){
        $sql = "UPDATE Comments SET comment='{$this->comment}' WHERE id={$this->id}";
        return Comment::$conn->query($sql);
    }
}