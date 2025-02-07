<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = "";

    // Check if inputs are numeric
    if (is_numeric($num1) && is_numeric($num2)) {
        // Perform calculation using switch case
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero!";
                break;
            default:
                $result = "Invalid operator!";
        }
    } else {
        $result = "Please enter valid numbers!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        form {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        input, select, button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>Simple Calculator</h2>
    
    <form method="post">
        <input type="number" name="num1" required placeholder="Enter first number">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required placeholder="Enter second number">
        <button type="submit">Calculate</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>
</html>
