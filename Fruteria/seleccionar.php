<form name="seleccionar" method="POST" action="laFruteria.php">
        <h3 style="color:cadetblue"><?="Bienvenido, ".$_SESSION["nombre"]?></h3>
        <p style="color:darkcyan">SELECCIONE LOS PRODUCTOS QUE DESEA:
            <select name="frutas">
                <option value="melon">melón 🍈</option>
                <option value="naranja">naranja 🍊</option>
                <option value="platano">plátano 🍌</option>
                <option value="kiwi">kiwi 🥝</option>
                <option value="uvas">uvas 🍇</option>
            </select>

            cantidad: <input type="number" name="cantidad">
            <input type="submit" name="pedido" value="añadir">
            <input type="submit" name="pedido" value="terminar">
        </p>
</form>
