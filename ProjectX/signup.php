<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include_once("templates/nav.php");?>
    <div class="main">
        <div class="header">
          <h1>Don't have an account?</h1>
          <p>Create account</p>
          <br>
          <h2>Sign up</h2>
        </div>

        <div class="signup">
            <form action="signup" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>
                    <br>
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required><br>
                    <br>
                </div>
                   <div class="button">
                   <button type="submit">Signup</button><br>
                </div>
            </form>
        </div>
    </div>
         
                     

</body>
</html>