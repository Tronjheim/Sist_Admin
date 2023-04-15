<?php
if (isset($_SESSION["rol"])){
    if($_SESSION["rol"]!="A"){
        header("location:index.php?op=PROHIBIDO");
        exit();
    }  
}
?>