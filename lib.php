<?php

require 'models/Todo.php';
session_start();

$conn = new mysqli("localhost", "admin2", "adminpass", "mydb");

function createUser($studentID, $email, $password, $firstname, $lastname, $degree, $year){
    global $conn;
    $password = sha1($password);
    $insql = "INSERT INTO user(`studentID`, `email`, `password`, 'firstname', 'lastname' , 'degree', 'year') values ('$studentID', '$email', '$password', '$degree', '$year')";

    $conn->query($insql);
    $val = $conn->insert_id;

    $_SESSION["userData"] = array(
        "userid"=>$val,
        "studentID"=>$studentID
    );
    $conn->close();
    return $val;
}

function loginUser($studentID, $password){
    global $conn;
    $password = sha1($password);
    $sql = "SELECT `uid`, `studentID` FROM `user` WHERE `studentID` = \"{$studentID}\" AND `password` = \"{$password}\"";
    $res = $conn->query($sql);
    if($res->num_rows == 0){
        return json_encode(array("status"=>"failure"));
    }else{
        $user = $res->fetch_assoc();

        $_SESSION["userData"] = array(
            "userid"=> $user['uid'],
            "studentID"=> $user['studentID']
        );
        return json_encode(array("status"=>"success", "userid"=> $user['uid']));
    }

}

function signUpUser($studentID, $email, $password, $firstname, $lastname, $degree, $year){
    $res = createUser($studentID, $email, $password, $firstname, $lastname, $degree, $year );

    if ($res > 0){
        $msg = array("status"=>"success", 'userid'=>$res);
        return json_encode($msg);
    }else{
        $arr = array("status"=>"error", "message"=>"Unable to create a new user");
        return  json_encode($arr);
    }
}

function insertTodo($text, $userId){
    $todo = new Todo($text, $userId);
    return $todo->insert();
}

function deleteTodo($todoId, $userId){
    $todo = Todo::get($todoId, $userId);
}

function updateTodo($todo, $text){

}

//gets the data for todo
function getUserTodos($userId){
    global $conn;
    $res = $conn->query("SELECT * FROM `todo` WHERE `todo`.`userid` = {$userId}");
    $data = array();
    while($row = $res->fetch_assoc()){
        array_push($data, $row);
    }
    return $data;
}

//presents the todo data in table
function prettyPrintTodos($todos){
    $html =
    "
    <table class='table'>
            <thead>
                <tr><th>Text</th><th>Created</th></tr>
            </thead>
            <tbody>
    ";
    foreach ($todos as $todo){
        $html .= "
                <tr>
                    <td>{$todo['text']}</td><td>{$todo['time']}</td>
                </tr>
                ";
    }
    $html .= "
        </tbody>
    </table>
    ";
    echo $html;
}