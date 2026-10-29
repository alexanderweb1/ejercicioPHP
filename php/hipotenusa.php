<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>hipotenusa</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="contenedor">
            <form method="post" class="formulario">
                <fieldset>
                    <legend>Calcular hipotenusa</legend>
                    <div class="campos cateto1">
                        <label for="cat1">Primer cateto</label>
                        <input
                            type="number"
                            step="any"
                            id="cat1"
                            name="cat1"
                            required
                        />
                    </div>
                    <div class="campos cateto2">
                        <label for="cat2">Segundo cateto</label>
                        <input
                            type="number"
                            step="any"
                            id="cat2"
                            name="cat2"
                            required
                        />
                    </div>

                    <button type="submit" class="btn-calcular">Calcular</button>

                    <div class="resultado-div">
                        <strong>El resultado es:</strong>
                        <output>
                            <?php if (
                                isset($_POST["cat1"]) &&
                                isset($_POST["cat2"])
                            ) {
                                $cat1 = (float) $_POST["cat1"];
                                $cat2 = (float) $_POST["cat2"];

                                $hipotenusa = hypot($cat1, $cat2);

                                echo "$hipotenusa";
                            } ?>
                        </output>
                    </div>
                </fieldset>
            </form>

        </div>
    </body>
</html>
