<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
</head>
<body>
    <h2>Verificação de Média</h2>
    <form method="post" action="">
        <label for="valor1">valor1:</label>
        <input type="number" name="valor1" id="valor1" required><br>
        <label for="valor2">valor 2:</label>
        <input type="number" name="valor2" id="valor2" required><br>
        <label for="valor3">valor 3:</label>
        <input type="number" name="valor3" id="valor3" required><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        $resultado = ($valor1 + $valor2 + $valor3) / 3 ;
         echo "A media das notas $valor1, $valor2, $valor3 é igual a $resultado <br>";


         if ($resultado >= 7 ) {
            echo "acima do esperado";
        } else {
            echo "abaixo do esperado";
        }
    }


    ?>
    
</body>
</html>


