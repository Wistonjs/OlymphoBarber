<?php 
    $nombCor=$_POST['nombre'];
    $precCor=$_POST['precio'];   
    $detFin=$_POST['detalleFinal'];
    $fecCor=$_POST['fecha'];
    $barber=$_POST['barbero'];

            $sql="insert into factura(nombreCortes,precioCortes,detalleFinalCortes,fechaCorte,barberoCorte)values('".$nombCor."',".$precCor.",'".$detFin."','".$fecCor."','".$barber."')";
            if(mysqli_query($conexion, $sql)){
                echo "Agendamiento agendado exitosamente";
                header("location:confirmación-agendamiento.php");
            } else{
                echo "Hay un error" .$sql."<br>".mysqli_error($conexion);
            }   
?>