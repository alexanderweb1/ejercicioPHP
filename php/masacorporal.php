<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IMC</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <form method="post" class="formulario">
            <fieldset>
                <legend>Calculo Masa Corporal</legend>
                <div class="campos pesokg">
                    <label for="pesokg">Introduzca el peso en Kg</label>
                    <input type="number" step="any" id="pesokg" name="pesokg" required>
                </div>

                <div class="campos altura">
                    <label for="altura">Introduzca la altura</label>
                    <input type="number" step="any" id="altura" name="altura" required>
                </div>

                <button class="btn-calcular">Calcular</button>

                <div class="resultado-div">
                    <p>
                        <strong>Tu IMC es: </strong>
                        <output>
                            <?php if (
                                isset($_POST["pesokg"]) &&
                                isset($_POST["altura"])
                            ) {
                                $pesokg = $_POST["pesokg"];
                                $altura = $_POST["altura"];

                                $IMC = $pesokg / ($altura * $altura);

                                echo "$IMC";
                            } ?>
                        </output>
                    </p>
                </div>
            </fieldset>

        </form>
    </div>
</body>
</html>
