
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>longituAreacir</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <form method="post" class="formulario">
            <fieldset>
                <legend>Longitud y área de circunferencia</legend>

                <div class="campos radio">
                    <label for="radio">Introduce el radio</label>
                    <input type="number" step="any" name="radio" id="radio" required>
                </div>

                <button class="btn-calcular">Calcular</button>

                <?php if (isset($_POST["radio"])) {
                    $radio = $_POST["radio"];

                    $longitud = 2 * M_PI * $radio;
                    $area = M_PI * pow($radio, 2);
                } ?>

                <div class="resultado-div">

                    <p>
                        <strong>La longitud es:</strong>
                        <output>
                            <?php if (isset($longitud)) {
                                echo $longitud;
                            } ?>
                        </output>
                    </p>

                    <p>
                        <strong>El área es:</strong>
                        <output>
                            <?php if (isset($area)) {
                                echo $area;
                            } ?>
                        </output>
                    </p>

                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
