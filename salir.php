<?php 
include "protec.php";
session_destroy();
header("location:index.php?op=SALIO");
?>