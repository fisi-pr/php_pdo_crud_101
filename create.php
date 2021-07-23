<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //interpretiere einmal
        include_once("config.php");

        if (isset($_POST[Absenden])) {
            
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];            
            $class = $_POST['class'];
        }
        if (empty($lastname) || empty($firstname || empty($class) {

            if (empty($lastname)) {
                echo "Please fill in your Last Name!"
                        }
            if (empty($firstname)) {
                echo "Please fill in your First Name!"
                        }
            if (empty($lclass)) {
                    echo "Please fill in your Class!"
                            }

        }
        else {
            $sql = "INSERT INTO schueler (lastname, firstname, class) VALUES (:lastname, :firstname, :class)";
            $query = $db->prepare($sql);

            $query->bindparam (':lastname', $lastname);
            $query->bindparam (':firstname', $firstname);
            $query->bindparam (':class', $class);

            $query->execute();

            echo "New record created!";
            echo "<a href='index.php'>Check out!</a>";
        
        }

?>
</body>
</html>