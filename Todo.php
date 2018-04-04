<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 02/03/2017
 * Time: 11:06 PM
 */
class Todo
{
    //Class attributes
    var $id;
    var $text;
    var $time;
    var $userId;

    //Contructor
    public function __construct($text, $userId)
    {
        //set object attributes
        $this->text = $text;
        $this->time = new DateTime();//time todo was created
        $this->userId = $userId;
    }


    public static function get($id, $userId){
        global $conn;

        $res = $conn->query("SELECT * FROM `todo` WHERE `ID` = $id");
        $data = $res->fetch_assoc();
        $todo = new self($data['text'], $userId);
        $todo->time = $data['time'];
        $todo->id = $id;

    }

    //Class methods
    public function insert(){
        global $conn;
        //run query to insert the object into the database
        $conn->query("
            INSERT INTO `todo` (`ID`, `text`, `time`, `userid`) 
            VALUES (NULL, '{$this->text}', '{$this->time->format('Y-m-d H:i:s')}', {$this->userId});
        ");
        return $conn->insert_id;
    }

    public function update(){
        global $conn;
        //updates the corresponding database record with the curent state of the object
        $res = $conn->query("UPDATE `todo` SET `text` = {$this->text}, `time`= {$this->time->format('Y-m-d H:i:s')}, `userid` = {$this->userId}  WHERE `todo`.`ID` = {$this->id}");
        return $res;
    }

    public function delete(){
        global $conn;
        $res = $conn->query("DELETE FROM `todo` WHERE `todo`.`ID` = {$this->id}");
        return $res;
    }

}