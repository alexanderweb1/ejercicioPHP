<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seg_totales</title>
 <link rel="stylesheet" href="../css/convertirHMS.css">
</head>
<body>

    <div class="contenedor">
        <h2 class="convertir_title">
            Convertir Horas, M y S a segudos totales
        </h2>
        <form method="post" action="#" class="formulario">
            <div class="horas">
                <label for="horas">Valor en horas</label>
                <input type="number" name="horas" required>
            </div>

            <div class="minutos">
                <label for="minutos">Valor en minutos</label>
                <input type="number" name="minutos" required>
            </div>

            <div class="segundos">
                <label for="segundos">Valor en segundos</label>
                <input type="number" name="segundos" required>
            </div>

            <button type="submit" class="btn_calcular">Calcular</button>
        </form>

        <div class="resultado_div">
            <p for="resultado" class="resultado_label">
                El resultado es:
            </p>

            <?php
           if(isset($_POST['horas']) && isset($_POST['minutos']) && isset($_POST['segundos'])){
               $horas = (int) $_POST['horas'];
               $minutos = (int) $_POST['minutos'];
               $segundos = (int) $_POST['segundos'];

               $seg_totales = ($horas * 3600) + ($minutos + 60) + $segundos;

               echo "$seg_totales" ;

           }
            ?>
        </div>

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
