<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de un rectangulo</title>
    <style>
    .contenedor{
        background: -webkit-linear-gradient(90deg, #2c486a,#365f7d,#46bfab);background: linear-gradient(90deg, #2c486a,#365f7d,#46bfab);
        border-radius: 5px;
        padding: 20px;
        width: 400px;
        margin: 0 auto;
    }
    .formulario{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 17px;
    }

    .formulario input{
        background: ghostwhite;
        border: 1px solid green;
        padding: 5px;
        border-radius: 5px;
    }

    .base, .altura{
        display: grid;
        gap: 8px;
        color: white;
        font-weight: bold;
        font-size: 17px;
    }

    .formulario input:focus{
        border: 2px solid red;
        outline: none;
    }

    .formulario button{
        padding: 10px 15px;
        border-radius: 5px;
        border: none;
        font-weight: bold;
        background: grey;
        color: white;
        cursor: pointer;
        margin: 20px 0;

    }

    .formulario button:hover{
        background: greenyellow;
        color: black;
    }

    .resultado-div{
        /*background: steelblue;*/
        margin: 20px;
        font-weight: bold;
        color: white;
        border-radius: 5px;
        text-align: center;
    }


    </style>
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
