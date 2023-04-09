<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout.css" />
    <title>Login System Resto</title>

</head>
<body>
    <center>
    <h1> Registrasi </h1>
    <form action="/register/submit" method="post">
    <div> 
        Full Name : <input type="text" name="fullname"/> <br/>
        Username : <input type="text" name="username" /> <br/>
        Email : <input type="text" name="email"/> <br/>
        Password : <input type="text" name="pass"/> <br/>
        Re-Password : <input type="text"/> <br/><br/>

        <input class = "tombol" type = "submit" value="REGISTER" />
    </div>
    </form>
    </center>
</body>
</html>