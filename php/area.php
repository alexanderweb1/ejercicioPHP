<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de un rectangulo</title>
    <link rel="stylesheet" href="../css/area.css">
</head>
<body>
    <h2 align="center">Calcular el area de un retangulo</h2>
    <div class="contenedor">
        <form method="post" class="formulario">
            <div class="base">
                <label for="base">Base: </label>
                <input type="number" step="any" name="base"  required>
            </div>

            <div class="altura">
                <label for="altura">Altura: </label>
                <input type="number" step="any" name="altura" required>
            </div>

            <button type="submit" id="calcular" class="calcular" >Calcular</button>

        </form>

        <div class="resultado-div">
            <label for="resultado-label" class="resultado-label">Resultado:</label>
                <?php if (isset($_POST["base"]) && isset($_POST["altura"])) {
                    $base = (float) $_POST["base"];
                    $altura = (float) $_POST["altura"];
                    $area = $base * $altura;

                    echo "$area";
                } ?>
        </div>
    </div>

</body>
</html>
