<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primera Lista pro</title>
</head>
<body>
    <?php include'ConexionPro.php';
    $sql = "select * from usuarios";
    $result = mysqli_query($connect,$sql);
    ?>
    <br>
    <p> crea tu : <a href="agregarPro.php" target="_blank">Nuevo Registro</a></p>
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
                <?php while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['IdUsu']?></td>
                    <td><?php echo $row['NombreUsu']?></td>
                    <td><?php echo $row['CorreoUsu']?></td>
                    <td><?php echo $row['ContraseñaUsu']?></td>
                    <td>
                        <a href="EditarPro.php?IdUsu=<?php echo $row['IdUsu'] ?>">editar</a>
                        <a href="EliminarPro.php?IdUsu=<?php echo $row['IdUsu']?>">Eliminar</a> <?php echo "<br>"?>
                    </td>
                </tr>
                <?php } 
                mysqli_close($connect);?>
            </tbody>
        </table>
    </div>
    
</body>
</html>