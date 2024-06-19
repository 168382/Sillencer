<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  
     <?php include_once("templates/nav.php");?>
     <div class="signin">
        <form action="signin" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <br>
                <label for="password">password:</label>
                <input type="text" id="password" name="password" required><br>
                <br>
            </div>
            <div class="button">
            <button type="submit">Signin</button><br>
         </div>
     </form>
</body>
</html>