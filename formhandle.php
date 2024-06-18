<?php
    // var_dump($_SERVER["REQUEST_METHOD"])


    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        $firstname = htmlspecialchars($_POST["firstname"]);
        $secondname = htmlspecialchars($_POST["secondname"]);
        $favouritepet = htmlspecialchars($_POST["favouritepet"]);

        echo "These are the data";
        echo "<br>";
        echo $firstname;
        echo "<br>";
        echo $secondname;
        echo "<br>";
        echo $favouritepet;

       

    }


?>