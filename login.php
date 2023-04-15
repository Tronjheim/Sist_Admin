<?php
session_start();
if(isset($_POST["usuario"]) and isset($_POST["pass"])){
    $usuario=trim(strtolower($_POST["usuario"]));
    $pass=$_POST["pass"];
    $sql=sprintf("SELECT usuario_id, usuario, estado, rol FROM usuarios WHERE usuario='%s'  AND pass='%s' LIMIT 1", $usuario, $pass); //%s estoy esperando texto, sprintf funcion de filtrado 
    include "conexion.php";

    $res=mysqli_query($link, $sql);
    if (@mysqli_num_rows($res)){
        $u=mysqli_fetch_array($res);
        if ($u["estado"]==0) {
            header("location:index.php?op=INACTIVO");
            exit();
        }
        $_SESSION["usuario"]=ucfirst($u["usuario"]);
        $_SESSION["usuario_id"]=$u["usuario_id"];
        $_SESSION["rol"]=$u["rol"];
        $sql="UPDATE usuarios SET ultlogin=NOW() WHERE usuario_id=" . $u["usuario_id"];
        mysqli_query($link, $sql);
        header("location:principal.php");
        exit();
    }else{
        header("location:index.php?op=ERROR");
        exit();
        }
}
header("location:index.php");
?>