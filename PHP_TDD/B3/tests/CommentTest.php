<?php

require_once __DIR__ . '/../src/Comment.php';
require_once __DIR__ . '/../src/connection.php';

class CommentTest extends PHPUnit_Extensions_Database_TestCase {

    public function getConnection() {
        $conn = new PDO($GLOBALS["DB_DSN"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWD"]);
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS["DB_NAME"]);
    }

    public function getDataSet() {
        return $this->createFlatXmlDataSet(__DIR__ . '/../datasets/Comments.xml');
    }
    
    public function testCreateCommentReturnsComment() {
        $comment = Comment::CreateComment(1, "name1", 1, "comment");
        $this->assertInstanceOf('Comment', $comment);
    }
    
    public function testDeleteComment() {
        $this->assertTrue(Comment::DeleteComment(3));
    }
    
    public function testIsGetAllTweetCommentsReturnsArray() {
        $this->assertInternalType("array", Comment::GetAllTweetComments(1, $limit = 0));
    }
    
    public function testConstruct() {
        $comment = new Comment(6, 6, "w", 6, "n");
        $this->assertInstanceOf('Comment', $comment);
        
    }
    
    public function testIsIdIsNumeric() {
        $comment = new Comment(6, 6, "w", 6, "n");
        $this->assertInternalType('int', $comment->getId());       
    }
    
    public function testIsUserIdIsNumeric() {
        $comment = new Comment(6, 6, "w", 6, "n");
        $this->assertInternalType('int', $comment->getUserId());       
    }
    
    public function testIsTweetIdIsNumeric() {
        $comment = new Comment(6, 6, "w", 6, "n");
        $this->assertInternalType('int', $comment->getTweetId());       
    }
    
    public function testIsCommentTextIsString() {
        $comment = new Comment(6, 6, "w", 6, "n");
        $this->assertInternalType('string', $comment->getCommentText());       
    }
    
    

}
