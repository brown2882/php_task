<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $userSearch = $_POST["usersearch"];
  
  

    try {
        require_once "./includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);
       

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        var_dump($result);
        die();
        
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
    
    <h3>Serach result:</h3>
    <?php
    if (empty($result)) {
        echo "<div>";
        echo "<p>There were no result</p>";
        echo "</div>";
    }
    else {
       foreach ($result as $row) {
            echo htmlspecialchars($row["username"]) ;
            echo htmlspecialchars($row["comment_text"]);
            echo htmlspecialchars($row["created_at"]);
       }
    }

    ?>
</body>
</html>