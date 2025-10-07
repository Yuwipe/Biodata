<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            padding: 40px;
            line-height: 1.6;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }
        h2 {
            color: #2c3e50;
            margin-top: 40px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 15px;
            width: 400px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        input, select {
            width: 95%;
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background: #2980b9;
        }
        .result {
            background: #eef3f7;
            padding: 10px;
            border-radius: 6px;
            margin-top: 10px;
        }
        a {
            display: inline-block;
            margin-top: 40px;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>
<body>

<h1>PHP Activities</h1>

<?php
$name = "Carl";
$age = 27;
$favColor = "black";
echo "<h2>1. Introduce Yourself</h2>";
echo "Hi, I'm $name, I am $age years old, and my favorite color is $favColor.<br>";
$a = 10;
$b = 5;
echo "<h2>2. Simple Math</h2>";
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br><br>";
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

<?php
echo "<h2>5. Swapping Variables</h2>";
$x = 10; $y = 20; $temp = $x; $x = $y; $y = $temp;
echo "After swapping: x = $x, y = $y<br><br>";
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
