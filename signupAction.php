<?php
    require '../lib.php';
	// echo(var_dump($_POST)); // var_dump special developer function to see the internals of anything in PHP
    echo signUpUser($_POST['ID,'], $_POST['email'], $_POST['password'], $_POST['first'], $_POST['last'], $_POST['sel'], $_POST['sel2']);

