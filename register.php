<!DOCTYPE html>

<html lang = "en">
<head>
<meta charset = "utf-8">
<link rel="stylesheet" type="text/css" href="login.css"> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src = "login.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Register</p>
                <form class="login">
                <input type="text" id = "ID" placeholder="ID Number" />
                <input type="password" id = "password" placeholder="Password" />
                <input type="text" id = "email" placeholder="Email Address" />
                <input type="text" id = "first" placeholder="First Name" />
                <input type="text"id = "last" placeholder="Last Name" />
                <label for="sel2">Select Degree:</label>
      <select multiple class="form-control" id="sel">
        <option>Information Technology(Special)</option>
        <option>Computer Science</option>
        <option>Information Technology and Management</option>
      </select>
      <br>
      <label for="sel2">Year:</label>
      <select multiple class="form-control" id="sel2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4+</option>
      </select>
                <input type="submit"id = "signupBtn" value="Register" class="btn btn-success btn-sm" />
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div>
</div>
</html>
