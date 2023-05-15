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
            <div class= "wadah-judul"> <a href = "/home"><img class = "link_home" src="/images/home.png" alt=""></a> <h2>Management Discount</h2> </div>  
            <div class= "wadah-aksi"> 
                <a href="/discount/add"> Add </a> |
                <a href="/discount/edit"> Edit </a> |
                <a href= "/discount/delete"> Delete </a> 
            </div>

        </div>

        <div class= "wadah-data"> 

        <table>
            <tr> <th>#</th> 
                 <th> nama_discount </th>    
                 <th> jumlah_potongan </th> 
            </tr>
          

            <?php
            $data = $query;
            foreach($query as $row){
                echo "<tr>";
              
                    echo "<td>" . ($row['id']) . "</td>";
                    echo "<td>" . ($row['nama_discount']) . "</td>";
                    echo "<td>" . ($row['jumlah_potongan']) . "</td>";
                        
            echo "</tr>";

               
            }
            ?>

        </table>

        </div>
    </div>

    
</body>
</html>