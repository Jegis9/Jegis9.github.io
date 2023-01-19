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
    $cnx = mysqli_connect("localhost","root","1234","platzivlog");
    $sql = "select person_id, last_name, first_name, address city from PEOPLE";
    $rta = mysqli_query($cnx,$sql);
    while($mostrar = $mysqli_fetch_row($rta)){
        ?>

    <?php
    <tr>
    <td> <?php? echo $mostrar['0']?> </td>
    </tr>
    
    }
    ?>
</body>
</html>