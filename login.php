<?php
//Makes the $_SESSION global variable available
session_start();

//This allows requests to be made to across that do not share the same location
header("Access-Control-Allow-Origin: *");

/**
 * Lab 7 03/03/2017
 *
 * 1. Simple Login
 * 2. Displaying Data From The Database
 * 3. Inserting Data Into The Database
 */
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="login.css"> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src = "login.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter your student ID number</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login">
                <input type="text" id = "ID" placeholder="ID Number" />
                <input type="password" id = "password" placeholder="Password" />
                <input type="submit" id= "LoginBtn" value="Sign In" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                        </div>
                        <br>
                        <br>
                        <a class="btn btn-lg btn-primary btn-block" href="register.html">Sign Up</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div>
</div>
<body>
</html>
