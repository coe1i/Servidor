<?php
    function nombrecomprobar($nombre):string{
        $nombre=trim($nombre);
        return $nombre;
    }
    function compras($fruta,$cantidad){
        if (!isset($_SESSION["frutas"])) {
            $_SESSION["frutas"]=[];
        }
        if (!isset($_SESSION["frutas"][$fruta])) {
            $_SESSION["frutas"][$fruta]=0;
        }
        $_SESSION["frutas"]["$fruta"]+=$cantidad;
    }
    function frutascarrito($cantidad){
        $cantidad=intval($cantidad);
        if (!empty($cantidad) && is_int($cantidad) && $cantidad>0){
            return true;
        }
        else
            return false;
    }
?>
