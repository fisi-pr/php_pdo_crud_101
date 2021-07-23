<?php

    include_once("config.php");

    $result = $db->query("SELECT * FROM schueler ORDER BY id DESC ")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    
    <table>

        <tr>
            <td>Firstname</td>
            <td>LastName</td>
            <td>Class</td>

        </tr>

        <?php
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                
                echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['class'] . "</td>";
                echo "<tr>";    

            }

    <script src="js/script.js"></script>
</body>
</html>