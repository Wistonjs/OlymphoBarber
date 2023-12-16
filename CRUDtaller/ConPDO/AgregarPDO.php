<!DOCTYPE html>
<html lang="esp">
    <head>
        <meta charset="utf-8">
        <title>Agregar Registro</title>
    </head>
    <body>
        <style>
            .Entrada{
                display: inline-block;
                margin: 1.5%;
                width: 200px;
                margin-right: 10px;
            }

        </style>
        <div class ="Formulario">
            <form action="AgregarPDO.php" method="post">
                <center>
                    <h2>Ingrese su registro</h2>
                    <label for="Ususario">Nombre de Usuario</label>
                    <br>
                    <input class="Entrada"  type="text" id="Ususario" name="Ususario" required>
                    <br>
                    <label for="Email">Correo</label>
                    <br>
                    <input class="Entrada" type="Email" id="Email" name="Email" required>
                    <br>
                    <label for="Contra">Contraseña</label>
                    <br>
                    <input class="Entrada" type="password" id="Contra" name="Contra" required>
                    <br>
                    <input  type="submit" value="Registrar" name="Registrar" required>
                </center>
            </form> 
        </div>
        <?php
        include ("ConexionPDO.php");
        $Nombre = $_POST["Ususario"];
        $Email = $_POST["Email"];
        $Contra = $_POST["Contra"];

        if($Nombre!=null || $Email !=null || $Contra !=null){
            $sql="insert into  usuarios(NombreUsu,CorreoUsu,ContraseñaUsu) values('".$Nombre."','".$Email."','".$Contra."')";
            if(mysqli_query($connect,$sql)){
                echo "Nuevo Registro Creado";
                header("location:ListaConPDO.php");
            }else{
                echo "Error:".$sql."<br>".mysqli_error($connect);
            }
        }


        ?>
    </body>
</html>