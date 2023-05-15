<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout.css" />
    <title>Login System Resto</title>

</head>
<body>
    <center>
    <h1> Login </h1>
    <form action="/user/login" method="POST">
    <div class="login"> 
        Username : <input type="text" name = "username" /> <br/>
        Password : <input type="text" name = "password"/> <br/>
        <a href = "/register/"> Register now </a> <br/>
        <input class = "tombol" type = "submit" value="login" />
    </div>
    </form>
    </center>

</body>
</html>