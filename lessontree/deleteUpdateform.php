<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Update</h2>
    <form action="../includes/userupdate.inc.php" method="post">
       
        <input   type="text" name="username" placeholder="Username">
        <input  type="password" name="pwd" placeholder="Pasword">
        <input  type="text" name="email" placeholder="E-mail">

        <button type="sumbit">Update</button>
    </form>

    <h2>Delate</h2>
    <form action="../includes/userdelate.inc.php" method="post">
       
       <input   type="text" name="username" placeholder="Username">
       <input  type="password" name="pwd" placeholder="Pasword">

       <button type="sumbit">Delate</button>
   </form>
</body>
</html>