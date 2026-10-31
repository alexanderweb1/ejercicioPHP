<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NumDoble</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<div class="contenedor">
    	<form method="post" class="formulario">
        	<fieldset>
             <legend>Calcular número doble</legend>
             <div class="campos num1">
                 <label for="num1">Introduzca un número entero</label>
                 <input type="number" step="any" id="num1" name="num1" required>
             </div>
             <button class="btn-calcular">Calcular</button>

             <div class="resultado-div">
                 <p>
                     <strong>El doble es: </strong>
                     <output>
                         <?php if (isset($_POST["num1"])) {
                             $num1 = $_POST["num1"];

                             $numdoble = $num1 * 2;

                             echo $numdoble;
                         } ?>
                     </output>
                 </p>
             </div>

        	</fieldset>
    	</form>
	</div>
</body>
</html>
