<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-management.css" />
    <title>Management_order System Resto</title>

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
    <div class= "wadah-judul"> <h2>Management Orderr</h2> </div>  
    <div class= "wadah-aksi"> 
        <a href="/order/add"> Add </a> |
        <a href="/order/edit"> Edit </a> |
        <a href= "/order/delete"> Delete </a> 
    </div>

</div>

<div class= "wadah-data"> 

<table>
    <tr> <th>#</th> 
         <th> name </th>    
         <th> quantity </th> 
         <th> price </th> 
    </tr>
  

    <?php
    $data = $query;
    foreach($query as $row){
        echo "<tr>";
      
            echo "<td>" . ($row['id']) . "</td>";
            echo "<td>" . ($row['name']) . "</td>";
            echo "<td>" . ($row['quantity']) . "</td>";
            echo "<td>" . ($row['price']) . "</td>";
                
    echo "</tr>";

       
    }
    ?>

</table>

</div>
</div>


</body>
</html>