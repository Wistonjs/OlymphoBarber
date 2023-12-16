<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segunda lista POO</title>
</head>
<body>
    <?php include 'ConexionPOO.php';
    $sql = "select * from usuarios";
    $result = $conecta->query($sql);
    ?>
    <p>Crea tu registro nuevo:<a href="AgregarPOO.php">"AQUI"</a></p>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row =$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['IdUsu']?></td>
                    <td><?php echo $row['NombreUsu']?></td>
                    <td><?php echo $row['CorreoUsu']?></td>
                    <td><?php echo $row['ContraseñaUsu']?></td>
                    <td>
                        <a href="EditarPOO.php?IdUsu=<?php echo $row['IdUsu'] ?>">editar</a>
                        <a href="EliminarPOO.php?IdUsu=<?php echo $row['IdUsu']?>">Eliminar</a> <?php echo "<br>"?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
</body>
</html>