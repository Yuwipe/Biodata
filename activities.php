<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9fafc;
            padding: 40px;
            line-height: 1.6;
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
        }
        pre {
            background: #eef3f7;
            padding: 10px;
            border-radius: 6px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>
<body>

<h1>PHP Activities</h1>

<?php
// 1. Introduce Yourself
$name = "John";
$age = 20;
$favColor = "blue";
echo "<h2>1. Introduce Yourself</h2>";
echo "Hi, I'm $name, I am $age years old, and my favorite color is $favColor.<br><br>";

// 2. Simple Math
$a = 10;
$b = 5;
echo "<h2>2. Simple Math</h2>";
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br><br>";

// 3. Area and Perimeter of a Rectangle
$length = 8;
$width = 4;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "<h2>3. Area and Perimeter of a Rectangle</h2>";
echo "Area: $area<br>Perimeter: $perimeter<br><br>";

// 4. Temperature Converter
$celsius = 30;
$fahrenheit = ($celsius * 9/5) + 32;
echo "<h2>4. Temperature Converter</h2>";
echo "$celsius °C = $fahrenheit °F<br><br>";

// 5. Swapping Variables
$x = 10;
$y = 20;
$temp = $x;
$x = $y;
$y = $temp;
echo "<h2>5. Swapping Variables</h2>";
echo "After swapping: x = $x, y = $y<br><br>";

// 6. Salary Calculator
$basic_salary = 20000;
$allowance = 5000;
$deduction = 3000;
$net_salary = $basic_salary + $allowance - $deduction;
echo "<h2>6. Salary Calculator</h2>";
echo "Net Salary: ₱$net_salary<br><br>";

// 7. BMI Calculator
$weight = 70; // kg
$height = 1.75; // meters
$bmi = $weight / ($height * $height);
echo "<h2>7. BMI Calculator</h2>";
echo "BMI: " . number_format($bmi, 2) . "<br><br>";

// 8. String Manipulation
$sentence = "Learning PHP is fun and useful.";
echo "<h2>8. String Manipulation</h2>";
echo "Sentence: $sentence<br>";
echo "Number of characters: " . strlen($sentence) . "<br>";
echo "Number of words: " . str_word_count($sentence) . "<br>";
echo "Uppercase: " . strtoupper($sentence) . "<br>";
echo "Lowercase: " . strtolower($sentence) . "<br><br>";

// 9. Bank Account Simulation
$balance = 1000;
$deposit = 500;
$withdraw = 200;
$balance = $balance + $deposit - $withdraw;
echo "<h2>9. Bank Account Simulation</h2>";
echo "Final Balance: ₱$balance<br><br>";

// 10. Simple Grading System
$math = 85;
$english = 90;
$science = 88;
$average = ($math + $english + $science) / 3;
if ($average >= 90) $grade = "A";
elseif ($average >= 80) $grade = "B";
elseif ($average >= 70) $grade = "C";
else $grade = "F";
echo "<h2>10. Simple Grading System</h2>";
echo "Average: " . number_format($average, 2) . "<br>Grade: $grade<br><br>";

// 11. Currency Converter
$php = 1000;
$usd_rate = 0.018;
$eur_rate = 0.016;
$jpy_rate = 2.65;
echo "<h2>11. Currency Converter</h2>";
echo "₱$php in USD = $" . ($php * $usd_rate) . "<br>";
echo "₱$php in EUR = €" . ($php * $eur_rate) . "<br>";
echo "₱$php in JPY = ¥" . ($php * $jpy_rate) . "<br><br>";

// 12. Travel Cost Estimator
$distance = 150; // km
$fuel_consumption = 12; // km per liter
$fuel_price = 70; // per liter
$travel_cost = ($distance / $fuel_consumption) * $fuel_price;
echo "<h2>12. Travel Cost Estimator</h2>";
echo "Estimated Travel Cost: ₱" . number_format($travel_cost, 2) . "<br><br>";
?>

<a href="biodata.php">← Back to Biodata</a>

</body>
</html>
