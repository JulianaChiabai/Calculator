<!DOCTYPE html>
<html>
<head>
    <title>Eenvoudige Rekenmachine</title>
</head>
<body>
    <h1>Eenvoudige Rekenmachine</h1>
    <form method="post" action="">
        Nummer 1: <input type="text" name="num1"><br>
        Nummer 2: <input type="text" name="num2"><br>
        Bewerking: 
        <select name="operation">
            <option value="add">Optellen</option>
            <option value="subtract">Aftrekken</option>
            <option value="multiply">Vermenigvuldigen</option>
            <option value="divide">Delen</option>
        </select><br><br>
        <input type="submit" name="submit" value="Bereken">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Fout: Delen door nul.";
                    }
                    break;
            }
            echo "<h2>Resultaat: $result</h2>";
        } else {
            echo "<h2>Voer alstublieft geldige nummers in.</h2>";
        }
    }
    ?>
</body>
</html>
