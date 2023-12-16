<!DOCTYPE html>g
<html lang="esp">
    <head>
        <meta charset="utf-8">
        <title>Tercera lista PDO</title>
    </head>
    <body>
        <?php
            include("ConexionPDO.php");
            $sql = "select * from ususario";
            $result = $conecta->query($sql);
        ?>
        <br>
        <p>Crea un nuevo registro:<a href="agregarPDO.php">AQUI</a> </p>
        <div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    try{
                        while($row = $result->fetch(PDO::FETCH_ASSOC)){?> 
                    <td><?php echo $row["idususario"]?></td>
                    <td><?php echo $row["nombre"]?></td>
                    <td><?php echo $row["correoElectronico"]?></td>
                    <td><?php echo $row["contraseña"]?></td>
                    <td><a href="">Editar</a> <br>
                        <a href="">Eliminar</a></td>
                </tbody>
                   <?php }}
                   catch(PDOException $e){
                        die ("Error de conexion".$e->getmessage());
                    

                   }
                   ?>
            </table>
        </div> 
    </body>
</html>