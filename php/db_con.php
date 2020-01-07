<?php
    @session_start();
    $host="localhost";
    $_SESSION['link']=mysqli_connect($host,'root','9527','my_db');
    if($_SESSION['link'])
    {
        mysqli_query($_SESSION['link'],"SET NAMES utf8");
    
    }
    else
    {
      echo "錯誤",mysqli_connect_error();
    }




 ?>
