<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-management.css" />
    <title>Management User System Resto</title>

</head>
<body>
<?php
        $this->load->view('_template_navigasi');
    ?>

    <div class= "wadah-utama-kanan"> 

        <div class="wadah-utama-atas">
            <div class= "wadah-judul"> <a href = "/home"><img class = "link_home" src="/images/home.png" alt=""></a> <h2>Management Drink</h2>
            <div class= "wadah-aksi"> 
                <a href="/drink/add"> Add </a> |
                <a href="/drink/edit"> Edit </a> |
                <a href= "/drink/delete"> Delete </a> 
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