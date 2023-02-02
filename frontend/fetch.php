<?php

include_once("../backend/backend.demo.php");
if(isset($_POST['position']) && isset($_POST['team']) && isset($_POST['foot'])  && isset($_POST['searchBar'])){
    $position = $_POST['position'];
    $team = $_POST['team'];
    $foot = $_POST['foot'];
    $searchBar = $_POST['searchBar'];

    $wheres = [];
    $query;
    
    
        if (!empty($position)) {
            // escape etc
            $wheres[] = "position = '$position'";
        }
        if (!empty($team)) {
            // escape etc
            $wheres[] = "team = '$team'";
        }
        if (!empty($foot)) {
            // escape etc
            $wheres[] = "foot = '$foot'";
        }
        if (!empty($searchBar)) {
            // escape etc
            $wheres[] = "name LIKE '{$searchBar}%' OR lastname LIKE '{$searchBar}%'";
        }

        if (!empty($position) && !empty($team) && !empty($foot)) {
            // escape etc
            $wheres[] = "id >= 1";
        }
    
        $wheress = implode(" AND ", $wheres);
    
        
    
        if (empty($position) && empty($team) && empty($foot) && empty($searchBar)) {
            // escape etc
            $query = "SELECT * FROM players";
        }else{
            $query = "SELECT * FROM players WHERE $wheress";
        }

    
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result)
    

?>

<table class="table">
    <?php
    if(mysqli_num_rows($result)){
       
    ?>
    
    <thead>
        <tr>
            <th></th>
            <th>Jugador</th>
            <th>Edad</th>
            <th>Equipo</th>
            <th>Posicion</th>
            <th>Nacionalidad</th>
            <th>PJ</th>
            <th>Pie</th>
        </tr>

        <?php

    }else{
        echo "Perdon, no hay registros.";
       
    }

        ?>
    </thead>

    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){

            ?>

                <tr>
                    <td><img class="player_img" src="../img/<?php echo $row['lastname']; ?>.jpg" alt=""></td>
                    <td><?php echo $row['name'] ." ". $row['lastname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['team']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td><?php echo $row['nacionality']; ?></td>
                    <td><?php echo $row['gamesPlayed']; ?></td>
                    <td><?php echo $row['Foot']; ?></td>   
                </tr>
                <?php
        }
        
        
                ?>
    </tbody>

</table>

<?php }else{
    echo "error";
} ?>