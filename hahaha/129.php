<!DOCTYPE html>
<html>
<head>
    <title>Sequência de Números</title>
</head>
<body>
    <form method="post">
        <label for="inicio">Selecione o valor inicial:</label>
        <input type="number" name="inicio" id="inicio" required>

        <br><br>

        <label for="fim">Selecione o valor final:</label>
        <input type="number" name="fim" id="fim" required>

        <br><br>

        <label for="opcao">Mostrar:</label>
        <select name="opcao" id="opcao">
            <option value="todos">Todos</option>
            <option value="pares">Apenas os pares</option>
            <option value="impares">Apenas os ímpares</option>
        </select>

        <br><br>

        <input type="submit" value="Mostrar sequência">
    </form>

    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inicio = $_POST['inicio'];
        $fim = $_POST['fim'];
        $opcao = $_POST['opcao'];

        function exibirTodosNumeros($inicio, $fim) {
            for ($i = $inicio; $i <= $fim; $i++) {
                echo $i . " ";
            }
        }

        function exibirPares($inicio, $fim) {
            for ($i = $inicio; $i <= $fim; $i++) {
                if ($i % 2 === 0) {
                    echo $i . " ";
                }
            }
        }

        function exibirImpares($inicio, $fim) {
            for ($i = $inicio; $i <= $fim; $i++) {
                if ($i % 2 !== 0) {
                    echo $i . " ";
                }
            }
        }

        echo "Sequência selecionada: ";

        if ($opcao === 'todos') {
            exibirTodosNumeros($inicio, $fim);
        } elseif ($opcao === 'pares') {
            exibirPares($inicio, $fim);
        } elseif ($opcao === 'impares') {
            exibirImpares($inicio, $fim);
        }
    }
    ?>
</body>
</html>
