<?php
    require "../lib.php";
    //we can pass data into the $_GET server global by putting it in there url
    //eg index.php?name=bob&email=bob@mail.com => $_GET[name] = bob, $_GET[email] = bob@mail.com
    prettyPrintTodos(getUserTodos($_GET['userid']));