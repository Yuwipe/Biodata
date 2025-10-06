<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$name = "Carl Jacob Chua";
$dob = "June 25";
$gender = "Male";
$address = "Baguio City, Philippines";
$nationality = "Filipino";
$education = "BS Information Technology, University of the Cordilleras";
$hobbies = "Watching Anime, Online Games, Trading Card Games";
?>

<div class="biodata-card">
    <img src="./Pic.jpg" alt="Profile Picture" class="profile-pic">
    <h2><?php echo $name; ?></h2>
    <table>
        <tr><td>Date of Birth:</td><td><?php echo $dob; ?></td></tr>
        <tr><td>Gender:</td><td><?php echo $gender; ?></td></tr>
        <tr><td>Address:</td><td><?php echo $address; ?></td></tr>
        <tr><td>Nationality:</td><td><?php echo $nationality; ?></td></tr>
        <tr><td>Education:</td><td><?php echo $education; ?></td></tr>
        <tr><td>Hobbies:</td><td><?php echo $hobbies; ?></td></tr>
    </table>

    <a href="activities.php" class="btn">View PHP Activities</a>
</div>

</body>
</html>