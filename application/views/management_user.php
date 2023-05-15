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
            <div class= "wadah-judul"> <a href = "/home"><img class = "link_home" src="/images/home.png" alt=""></a> <h2>Management user</h2>  
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
                 <th> - </th>
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
                $link = "<a href='/user/delete?id=>" . ($row['id']) .
                        "'>Delete</a>";
                echo "<td>" . $link ."</td>";
            echo "</tr>";

               
            }
            ?>

        </table>

        </div>
    </div>

    
</body>
</html>