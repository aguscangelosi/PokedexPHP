<?php


if($_POST['userr']){
    session_unset();
    session_destroy();
    header('location: /PokedexPHP/index.php');
}