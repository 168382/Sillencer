<?php require_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>
<?php require_once("Database/db_connect.php"); ?>

if(isset($_POST["sign_up"])){
        $_SESSION["fullname"] = $fullname = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["fullname"])));
        $_SESSION["email"] = $email = mysqli_real_escape_string($conn, strtolower($_POST["email_address"]));
        $_SESSION["username"] = $username = mysqli_real_escape_string($conn, strtolower($_POST["username"]));
        $_SESSION["passphrase"] = $passphrase = mysqli_real_escape_string($conn, $_POST["passphrase"]);
        $_SESSION["rep_pass"] = $rep_pass = mysqli_real_escape_string($conn, $_POST["rep_pass"]);

        unset($_SESSION["error"]);
        // verify that the full name contains only letters, space and single quotation
        if(ctype_alpha(str_replace(" ", "", str_replace("\'", "", $fullname))) === FALSE){
            $_SESSION["nameLetter_err"] = "wrong name format";
            $_SESSION["error"] = "";
        }
    }
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
<!--Footer-->
    <footer @WEX RESTARUANT>
     <p>Call us (+) 234 342677</p>
            <br>
     <p>email @www.wexitalian@gmail</p>
        </footer>
</body>
</html>
