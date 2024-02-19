<?php

$inc = include("Connection.php");

if ($inc)
{
    $conexion = new \PDO("mysql:host=$server; dbname=$database", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = "SELECT * FROM tiendas";
    $resultado = $conexion->query($consulta);

    if($resultado)
    {
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC))
        {
            $producto = $row['producto'];
            $cantidad = $row['cantidad'];
            $precio = $row['precio'];
            $cliente = $row['cliente'];
            $telefono = $row['telefono'];
            ?>
            <div>
                <h2><?php echo $producto; ?></h2>
                <div>
                    <p>
                        <b>Cantidad: </b> <?php echo $cantidad; ?> <br>
                        <b>Precio: </b> <?php echo $precio; ?> <br>
                        <b>Cliente: </b> <?php echo $cliente; ?> <br>
                        <b>Telefono: </b> <?php echo $telefono; ?> <br>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}

?>