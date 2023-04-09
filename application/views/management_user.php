<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-management.css" />
    <title>Management User System Resto</title>

</head>
<body>
    <div class = "navigasi-kiri">
        <center>
        <img src ="/images/user.png"/>

        <span> Username : Ade Arya Ilham </span>

        <hr/>
        <a href="/order/management">Management Order</a>

        <hr/>
        <a href="/user/management">Management User </a>

        <hr/>
        <a href="/food/management">Management Food </a>

        <hr/>
        <a href="/settings">Settings </a>

        <hr/>
        <a href="/logout">Logout </a>

        <hr/>
        </center>
    </div>

    <div class= "wadah-utama-kanan"> 

        <div class="wadah-utama-atas">
            <div class= "wadah-judul"> <h2>Management User</h2> </div>  
            <div class= "wadah-aksi"> 
                <a href="/user/add"> Add </a> |
                <a href="/user/edit"> Edit </a> |
                <a href= "/user/delete"> Delete </a> 
            </div>

        </div>

        <div class= "wadah-data"> 

        <table>
            <tr> <th>#</th> 
                 <th> username </th>    
                 <th> password </th> 
                 <th> email </th> 
                 <th> address </th> 
            </tr>
          

            <?php
            $data = $query;
            foreach($query as $row){
                echo "<tr>";
              
                    echo "<td>" . ($row['id']) . "</td>";
                    echo "<td>" . ($row['username']) . "</td>";
                    echo "<td>" . ($row['pass']) . "</td>";
                    echo "<td>" . ($row['email']) . "</td>";
                    echo "<td>" . ($row['address']) . "</td>";
                        
            echo "</tr>";

               
            }
            ?>

        </table>

        </div>
    </div>

    
</body>
</html>