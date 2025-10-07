<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities</title>
    <link rel="stylesheet" href="activities_styles.css">
</head>
<body>

<h1>PHP Activities</h1>

<h2>1. Introduce Yourself</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Favorite Color: <input type="text" name="color" required><br>
    <input type="submit" name="intro_submit" value="Show Introduction">
</form>
<?php
if(isset($_POST['intro_submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $color = $_POST['color'];
    echo "<div class='result'>Hi, I'm $name, I am $age years old, and my favorite color is $color.</div>";
}
?>

<h2>2. Simple Math</h2>
<form method="post">
    Number 1: <input type="number" name="num1" step="any" required><br>
    Number 2: <input type="number" name="num2" step="any" required><br>
    <input type="submit" name="math_submit" value="Calculate">
</form>
<?php
if(isset($_POST['math_submit'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    echo "<div class='result'>
        Sum: " . ($a + $b) . "<br>
        Difference: " . ($a - $b) . "<br>
        Product: " . ($a * $b) . "<br>
        Quotient: " . ($b != 0 ? $a / $b : 'Undefined (division by zero)') . "
    </div>";
}
?>

<h2>3. Area and Perimeter of a Rectangle</h2>
<form method="post">
    Length: <input type="number" name="length" step="any" required><br>
    Width: <input type="number" name="width" step="any" required><br>
    <input type="submit" name="rect_submit" value="Calculate">
</form>
<?php
if(isset($_POST['rect_submit'])){
    $length = $_POST['length'];
    $width = $_POST['width'];
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "<div class='result'>Area: $area<br>Perimeter: $perimeter</div>";
}
?>

<h2>4. Temperature Converter</h2>
<form method="post">
    Celsius: <input type="number" name="celsius" step="any" required><br>
    <input type="submit" name="temp_submit" value="Convert to Fahrenheit">
</form>
<?php
if(isset($_POST['temp_submit'])){
    $celsius = $_POST['celsius'];
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<div class='result'>$celsius °C = $fahrenheit °F</div>";
}
?>

<h2>5. Swapping Variables</h2>
<form method="post">
    First Number: <input type="number" name="numA" step="any" required><br>
    Second Number: <input type="number" name="numB" step="any" required><br>
    <input type="submit" name="swap_submit" value="Swap Numbers">
</form>
<?php
if(isset($_POST['swap_submit'])){
    $x = $_POST['numA'];
    $y = $_POST['numB'];
    echo "<div class='result'>";
    echo "Before Swap: x = $x, y = $y<br>";
    $temp = $x; $x = $y; $y = $temp;
    echo "After Swap: x = $x, y = $y";
    echo "</div>";
}
?>

<h2>6. Salary Calculator</h2>
<form method="post">
    Basic Salary: <input type="number" name="basic_salary" required><br>
    Allowance: <input type="number" name="allowance" required><br>
    Deduction: <input type="number" name="deduction" required><br>
    <input type="submit" name="salary_submit" value="Compute Salary">
</form>
<?php
if(isset($_POST['salary_submit'])){
    $basic = $_POST['basic_salary'];
    $allow = $_POST['allowance'];
    $deduct = $_POST['deduction'];
    $net = $basic + $allow - $deduct;
    echo "<div class='result'>Net Salary: ₱" . number_format($net,2) . "</div>";
}
?>

<h2>7. BMI Calculator</h2>
<form method="post">
    Weight (kg): <input type="number" name="weight" step="any" required><br>
    Height (m): <input type="number" name="height" step="any" required><br>
    <input type="submit" name="bmi_submit" value="Compute BMI">
</form>
<?php
if(isset($_POST['bmi_submit'])){
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = $weight / ($height * $height);
    echo "<div class='result'>Your BMI is " . number_format($bmi, 2) . "</div>";
}
?>

<h2>8. String Manipulation</h2>
<form method="post">
    Enter a sentence:<br>
    <input type="text" name="sentence" required><br>
    <input type="submit" name="string_submit" value="Analyze String">
</form>
<?php
if(isset($_POST['string_submit'])){
    $sentence = $_POST['sentence'];
    echo "<div class='result'>";
    echo "Characters: " . strlen($sentence) . "<br>";
    echo "Words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence);
    echo "</div>";
}
?>

<h2>9. Bank Account Simulation</h2>
<form method="post">
    Current Balance: <input type="number" name="balance" step="any" required><br>
    Deposit: <input type="number" name="deposit" step="any" required><br>
    Withdraw: <input type="number" name="withdraw" step="any" required><br>
    <input type="submit" name="bank_submit" value="Compute Balance">
</form>
<?php
if(isset($_POST['bank_submit'])){
    $balance = $_POST['balance'];
    $deposit = $_POST['deposit'];
    $withdraw = $_POST['withdraw'];
    $new_balance = $balance + $deposit - $withdraw;
    echo "<div class='result'>Final Balance: ₱" . number_format($new_balance, 2) . "</div>";
}
?>

<h2>10. Simple Grading System</h2>
<form method="post">
    Math: <input type="number" name="math" required><br>
    English: <input type="number" name="english" required><br>
    Science: <input type="number" name="science" required><br>
    <input type="submit" name="grade_submit" value="Compute Grade">
</form>
<?php
if(isset($_POST['grade_submit'])){
    $math = $_POST['math'];
    $eng = $_POST['english'];
    $sci = $_POST['science'];
    $avg = ($math + $eng + $sci) / 3;
    if($avg >= 90) $grade = "A";
    elseif($avg >= 80) $grade = "B";
    elseif($avg >= 70) $grade = "C";
    else $grade = "F";
    echo "<div class='result'>Average: " . number_format($avg,2) . "<br>Grade: $grade</div>";
}
?>

<h2>11. Currency Converter</h2>
<form method="post">
    Amount in PHP: <input type="number" name="php_amount" step="any" required><br>
    Convert to:
    <select name="currency">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="JPY">JPY</option>
    </select><br>
    <input type="submit" name="currency_submit" value="Convert">
</form>
<?php
if(isset($_POST['currency_submit'])){
    $php = $_POST['php_amount'];
    $currency = $_POST['currency'];
    $rates = ["USD"=>0.018, "EUR"=>0.016, "JPY"=>2.65];
    $converted = $php * $rates[$currency];
    echo "<div class='result'>₱$php = $currency " . number_format($converted,2) . "</div>";
}
?>

<h2>12. Travel Cost Estimator</h2>
<form method="post">
    Distance (km): <input type="number" name="distance" step="any" required><br>
    Fuel Consumption (km per liter): <input type="number" name="consumption" step="any" required><br>
    Fuel Price (₱ per liter): <input type="number" name="price" step="any" required><br>
    <input type="submit" name="travel_submit" value="Estimate Cost">
</form>
<?php
if(isset($_POST['travel_submit'])){
    $distance = $_POST['distance'];
    $consumption = $_POST['consumption'];
    $price = $_POST['price'];
    $cost = ($distance / $consumption) * $price;
    echo "<div class='result'>Estimated Travel Cost: ₱" . number_format($cost,2) . "</div>";
}
?>

<a href="index.php">← Back to Biodata</a>

</body>
</html>
