<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        require_once("comprobaciones.php");
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Frutería</title>
</head>
<body>
    <h1>🛒 La frutería del siglo XXI 🛒</h1>

    <?php if(isset($_SESSION["nombre"])):?>
        <?php
            if (!isset($_POST["pedido"])) {
                require_once("seleccionar.php");
            }
            else{
                switch ($_POST["pedido"]) {
                    case "añadir":
                    if(isset($_POST["frutas"]) && isset($_POST["cantidad"])){
                        if(frutascarrito($_POST["cantidad"])){
                       compras($_POST["frutas"],$_POST["cantidad"]);
                       require_once("compra.php");
                       require_once("seleccionar.php");
                       break;
                        }else{
                            require_once("compra.php");
                            require_once("seleccionar.php");
                            echo("No has seleccionado nada");
                            break;
                        }
                    }
                    case "terminar":
                        require_once("compra.php");
                        session_destroy();
                        require_once("checkout.php");
                        break;
                }
            }
        ?>
    <?php else:?>
    <form action="laFruteria.php" method="GET">
        Nombre del cliente: <input type="text" name="nombre">
    </form>
    <?php
        if(isset($_GET["nombre"])){
            if (!ctype_space($_GET["nombre"]) && !empty($_GET["nombre"])) {
                $_SESSION["nombre"]=nombrecomprobar($_GET["nombre"]);
                header("location:laFruteria.php");
            }
            else {
                echo("Introduce otro nombre, por favor");
            }
        }
    ?>
    <?php endif ?>
</body>
</html>
