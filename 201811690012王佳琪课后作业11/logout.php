<?php
    session_start();
    $_SESSION["login"]="";
    echo "已退出。[<a href=login.php>重新登陆</a>]";
    exit;
 ?>
