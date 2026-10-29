<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de un rectangulo</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h2 align="center"></h2>
    <div class="contenedor">
        <form method="post" class="formulario">
            <fieldset>
                <legend>Calcular el area de un retangulo</legend>
                <div class="campos base">
                    <label for="base">Base: </label>
                    <input type="number" step="any" name="base"  required>
                </div>

                <div class="campos altura">
                    <label for="altura">Altura: </label>
                    <input type="number" step="any" name="altura" required>
                </div>

                <button type="submit" id="calcular" class="btn-calcular" >Calcular</button>
                <div class="resultado-div">
                    <strong>El resultado es: </strong>
                    <output for="resultado-label" class="resultado-label">
                        <?php if (
                            isset($_POST["base"]) &&
                            isset($_POST["altura"])
                        ) {
                            $base = (float) $_POST["base"];
                            $altura = (float) $_POST["altura"];
                            $area = $base * $altura;

                            echo "$area";
                        } ?>
                    </output>
                </div>
            </fieldset>
        </form>
    </div>

</body>
</html>
