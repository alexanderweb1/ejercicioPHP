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
                <legend>Convertir Horas, M y S a segudos totales
                </legend>
                <div class="campos horas">
                    <label for="horas">Valor en horas</label>
                    <input type="number" name="horas" required>
                </div>

                <div class="campos minutos">
                    <label for="minutos">Valor en minutos</label>
                    <input type="number" name="minutos" required>
                </div>

                <div class="campos segundos">
                    <label for="segundos">Valor en segundos</label>
                    <input type="number" name="segundos" required>
                </div>

                <button type="submit" class="btn_calcular">Calcular</button>

                <div class="resultado-div">
                    <strong for="resultado" class="resultado_label">
                        El resultado es:
                    </strong>

                    <output>
                        <?php if (
                            isset($_POST["horas"]) &&
                            isset($_POST["minutos"]) &&
                            isset($_POST["segundos"])
                        ) {
                            $horas = (int) $_POST["horas"];
                            $minutos = (int) $_POST["minutos"];
                            $segundos = (int) $_POST["segundos"];

                            $seg_totales =
                                $horas * 3600 + ($minutos + 60) + $segundos;

                            echo "$seg_totales";
                        } ?>
                    </output>
                </div>
            </fieldset>
        </form>



    </div>


    <!--<script>
    const boton = document.querySelector("button");

    document.addEventListener("mousemove", function(event) {
        const rect = boton.getBoundingClientRect();

        const centroX = rect.left + rect.width / 2;
        const centroY = rect.top + rect.height / 2;

        const distanciaX = event.clientX - centroX;
        const distanciaY = event.clientY - centroY;

        const distancia = Math.sqrt(
            distanciaX ** 2 + distanciaY ** 2
        );

        if (distancia < 100) {
            const moverX = distanciaX > 0 ? -60 : 60;
            const moverY = distanciaY > 0 ? -40 : 40;

            boton.style.transform =
                `translate(${moverX}px, ${moverY}px) scale(1.2)`;
        } else {
            boton.style.transform = "translate(0, 0) scale(1)";
        }
    });
    </script>-->

</body>
</html>
