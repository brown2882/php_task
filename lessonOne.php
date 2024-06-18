<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="includes/formhandle.inc.php" method="post">
        <label for="username">Firstname?</label>
        <input required="" id="username" type="text" name="username" placeholder="Lastname...">

        <label for="pwd">Secondname?</label>
        <input id="pwd" type="text" name="pwd" placeholder="Secondname...">

        <label for="email">Secondname?</label>
        <input id="email" type="text" name="email" placeholder="email...">


        <!-- <label for="favouritpet">Favourite Pet?</label> -->
        <!-- <select id="favouritepet" name="favouritepet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
        </select> -->

        <button type="sumbit">Sumbit</button>
    </form>

<?php
    // echo $_GET["name"];
    // echo $_GET["surname"]
?>


    
</body>
</html>