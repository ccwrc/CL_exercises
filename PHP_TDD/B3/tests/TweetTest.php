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

    public function testCreateTweet() {
        $tweet = new Tweet(2, "creatorName", "22tweet");
        $tweet->CreateTweet(2, "creatorName2", "22tweet");
        $this->assertInstanceOf('Tweet', $tweet);
    }

    public function testDeleteTweet() {
        $tweet = new Tweet(2, "creatorName", "22tweet");
        $this->assertTrue(Tweet::DeleteTweet($tweet->getId()));
    }

    public function testGetAllUserTweets() {
        $tweets = Tweet::GetAllUserTweets(2, "creatorName", 2);
        $this->assertInternalType("array", $tweets);
        $this->assertInstanceOf('Tweet', $tweets[1]);
    }

    public function testGetTweet() {
        $this->assertInstanceOf('Tweet', Tweet::GetTweet(2));
    }

    public function testSetTweetTextAndSaveToDB() {
        $tweet = Tweet::GetTweet(2);
        $tweet->setTweetText("3newTweet");
        $this->assertTrue($tweet->saveToDB());
    }

}
