<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seg_totales</title>
 <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <div class="contenedor">
        <form method="post" action="#" class="formulario">
            <fieldset>
                <legend>Salario Neto</legend>
                <div class="campos nombre">
                    <label for="nombre">Nombre del trabajador</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="campos horas">
                    <label for="horas">Horas de trabajo</label>
                    <input type="number" name="horas" required>
                </div>

                <div class="campos precio">
                    <label for="precio">Precio de hora de trabajo</label>
                    <input type="number" name="precio" required>
                </div>

                <button type="submit" class="btn-calcular">Calcular</button>

                <div class="resultado-div">
                    <?php if (
                        isset($_POST["nombre"]) &&
                        isset($_POST["horas"]) &&
                        isset($_POST["precio"])
                    ) {
                        $nombre = $_POST["nombre"];
                        $horas = $_POST["horas"];
                        $precio = $_POST["precio"];

                        $salariobruto = $horas * $precio;
                        $impuesto = $salariobruto * 0.1;
                        $salarioneto = $salariobruto - $impuesto;
                    } ?>

                    <p>
                        <strong>Nombre del trabajador: </strong>
                        <output>
                            <?php if (isset($nombre)) {
                                echo $nombre;
                            } ?>
                        </output>
                    </p>
                    <p>
                        <strong>Salario bruto: </strong>
                        <output>
                            <?php if (isset($salariobruto)) {
                                echo $salariobruto;
                            } ?>
                        </output>
                    </p>
                    <p>
                        <strong>Slario neto: </strong>
                        <output>
                            <?php if (isset($salarioneto)) {
                                echo $salarioneto;
                            } ?>
                        </output>
                    </p>
                </div>
            </fieldset>
        </form>



    </div>

</body>
</html>
