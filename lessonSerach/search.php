<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $userSearch = $_POST["usersearch"];
  //changeeeeeeee
  

    try {
        require_once "./includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":userSearch", $userSearch);
       

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //14:27
        $pdo = null;
        $stmt = null;

       die();

        } catch (PDOException $e) {
       die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../lessonOne.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>