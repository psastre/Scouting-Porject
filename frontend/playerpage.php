<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
  //include_once("../backend/players.back.php");
  if(isset($_GET["id"])){ 
    include_once("../backend/backend.demo.php");

    $playerid = $_GET["id"];

    $query= "SELECT * FROM players WHERE id = $playerid"; 

    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result)
            
        ?>

    <img src="" alt="">
    <h4>Nombre: <?php echo $row["name"]; ?></h4>
    <h4>Apellido: <?php echo $row["lastname"]; ?></h4>
    <h4>Edad:  <?php echo $row["age"]; ?></h4>
    <h4>Equipo</h4>
    <h4>Posicion</h4>
    <h4>Nacionalidad</h4>
    <h4>PJ</h4>

  <?php }else{echo "no se encontro registro";}; ?>
</body>
</html>