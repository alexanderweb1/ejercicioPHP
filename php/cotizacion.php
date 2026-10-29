<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cotizacion</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <div class="contenedor">
       <form method="post" class="formulario">
           <fieldset>
               <legend>Cotización Euro Dolar</legend>
               <div class="campos euros">
                   <label for="euros">Cantidad en euros</label>
                   <input type="number" step="any" name="euros">
               </div>
               <div class="campos dolares">
                   <label for="dolares">Cantidad en dolares</label>
                   <input type="number" step="any" name="dolares">
               </div>

               <button type="submit" class="btn-calcular">Calcular</button>

               <div class="resultado-div">
                   <label for="resultado-lbl">El resultado es:</label>
                   <?php if (
                       isset($_POST["euros"]) &&
                       isset($_POST["dolares"])
                   ) {
                       $euros = (float) $_POST["euros"];
                       $dolares = (float) $_POST["dolares"];

                       $cotizacion = $euros * $dolares;

                       echo "<p>$cotizacion</p>";
                   } ?>
               </div>
           </fieldset>
       </form>

    </div>
</body>
</html>
