<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-management.css" />
    <title>Management_food System Resto</title>

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
            <div class= "wadah-judul"> <h2>Management Food</h2> </div>  
            <div class= "wadah-aksi"> 
                <a href="/food/add"> Add </a> |
                <a href="/food/edit"> Edit </a> |
                <a href= "/fodd/delete"> Delete </a> 
            </div>

        </div>

        <div class= "wadah-data"> 

        <table>
            <tr> <th>#</th> 
                 <th> name </th>    
                 <th> price </th> 
                 <th> rating </th> 
            </tr>
          

            <?php
            $data = $query;
            foreach($query as $row){
                echo "<tr>";
              
                    echo "<td>" . ($row['id']) . "</td>";
                    echo "<td>" . ($row['name']) . "</td>";
                    echo "<td>" . ($row['price']) . "</td>";
                    echo "<td>" . ($row['rating']) . "</td>";
                        
            echo "</tr>";

               
            }
            ?>

        </table>

        </div>
    </div>


</body>
</html>