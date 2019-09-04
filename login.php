<!doctype html>
<html lang="en">
<head><title>Login</title></head>
    <style type="text/css">
        .login{
            height: 200px; width: 250px;
            margin: auto;
            padding: 10px;
            border: 2px #000000 solid;
        }
        .login input{
            padding: 5px; margin: 5px;
        }
    </style>
    <body>
<form>
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="Username" />
        <input type="password" name="password" size="30" placeholder="Password"/>
        <input type="submit" value="Login"/>
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'tiennam' && $password==='123'){
        echo "<h2>Welcom <span style='color: darkgreen'>$username</span>to this webite</h2>";
    } else{
        echo '<h2>You re<span>prohibited</span> to assces this website!</h2>';
    }
}
?>
</body>
</html>
