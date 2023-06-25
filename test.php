<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice en PHP</title>
</head>
<body>
    <h2>Calculatrice en PHP</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="num1" placeholder="Nombre 1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Nombre 2" required>
        <input type="submit" value="Calculer">
    </form>

    <?php
    // Vérifie si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST["num1"]); // Convertit en entier
        $num2 = intval($_POST["num2"]); // Convertit en entier
        $operator = $_POST["operator"];
        $result = "";

        // Effectue le calcul en fonction de l'opérateur sélectionné
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                $result = $num1 / $num2;
                break;
            default:
                $result = "Opérateur invalide";
                break;
        }

        // Affiche le résultat
        echo "<h3>Résultat :</h3>";
        echo "<p>$num1 $operator $num2 = $result</p>";
    }
    ?>

</body>
</html>
