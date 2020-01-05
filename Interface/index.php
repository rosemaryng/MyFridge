<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {

        }

        h1 {
            font-family: helvetica;
            text-align: center;
            font-size: 50px;
        }

        p1 {
            font-family: helvetica;
            font-size: 20px;
        }
    </style>
</head>
<body>
<h1>Welcome to MyFridge</h1>
<p1>MyFridge is a website designed to connect students from the same community to share food and recipes so as to
    <ol>
        <li>Reduce food waste</li>
        <li>Provide a platform for students to interact and share cooked food and ingredients with others </li>
        <li>Reduce time for food preparation</li>
    </ol>
    So what are you waiting for? Connect with your community now!
</p1>
<br>

<div class="center inside_inline">

    <form method="POST" action="home.php">
        Username:
        <input class="login_input" type="text" name="username" /><br /><br/>

        Password:
        <input class="login_input" type="password" name="password" /><br /><br />
        <input type="submit" name="Login" value="Login" class="myButton" /><br /><br />
    </form>
    <center>
<button id="button1" class="myButton">Register</button>
    </center>
</div>
</body>
</html>
