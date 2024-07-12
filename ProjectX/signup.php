
<?php
require_once("Database/db_connect.php");
include_once("templates/header.php");
include_once("templates/nav.php");



if(isset($_POST["sign_up"])){
        $_SESSION["Username"] = $Username = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["Username"])));
        $_SESSION["Email"] = $Email = mysqli_real_escape_string($conn, strtolower($_POST["email_address"]));
        $_SESSION["Password"] = $Password = mysqli_real_escape_string($conn, strtolower($_POST["passphrase"]));
        $_SESSION["ConfirmPassword"] = $ConfirmPassword = mysqli_real_escape_string($conn, $_POST["ConfirmPassword"]);
       

        unset($_SESSION["error"]);
        // verify that the full name contains only letters, space and single quotation
        if(ctype_alpha(str_replace(" ", "", str_replace("\'", "", $Username))) === FALSE){
            $_SESSION["nameLetter_err"] = "wrong name format";
            $_SESSION["error"] = "";
        }
         //verify that the email has the correct format
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $_SESSION["wrong_email_format"] = "wrong email format";
            $_SESSION["error"] = "";
        }
        
        // verify that the email address domain is authorized (strathmore.edu, gmail.com, yahoo.com, etc)
       $val_dom = ["strathmore.edu", "gmail.com", "yahoo.com"];
         $em_arr = explode("@", $Email);
         $spot_dom = end($em_arr);
       if(!in_array($spot_dom, $val_dom)){
           $_SESSION["invalid_dom"] = "Invalid email domain " . $spot_dom ;
            $_SESSION["error"] = "";
        }

        // verify that the new email address does not exist already in the database
        $spot_em_ex = "SELECT `Email` from `tom` WHERE `email` = '$Email' LIMIT 1";
        $spot_em_ex_res = $conn->query($spot_em_ex);
       if($spot_em_ex_res->num_rows > 0){
           $_SESSION["email_exists"] = "email exists";
            $_SESSION["error"] = "";
         }
        // verify that the new username does not exist already in the database
        $spot_un_ex = "SELECT `Username` from `tom` WHERE `Username` = '$Username' LIMIT 1";
        $spot_un_ex_res = $conn->query($spot_un_ex);
        if($spot_un_ex_res->num_rows > 0){
            $_SESSION["username_exists"] = "username exists";            $_SESSION["error"] = "";
                 }
 // verify that the password is identical to the repeat password
         if(strcmp($ConfirmPassword, $Password) != 0){
     $_SESSION["matching_pass"] = "Passwords not matching";
     $_SESSION["error"] = "";
}


 // verify that the password length is between 4 and 8 characters
 if(strlen($ConfirmPassword) < 4 OR strlen($ConfirmPassword) > 8){
     $_SESSION["error_pass_len"] = "password length should be between 4 and 8 characters";
     $_SESSION["error"] = "";
 }

if(!isset($_SESSION["error"])){

    
$hash_pass = PASSWORD_HASH($Password, PASSWORD_DEFAULT);


$insert_user = "INSERT INTO tom (Username, email,Password) VALUES ('$Username', '$Email','$hash_pass')";

if ($conn->query($insert_user) === TRUE) {
    header("Location: signup.php");
        // remove all session variables
    session_unset();
    $_SESSION["success"] = "";
    exit();
} 
else {
    echo "Error: " . $insert_user . "<br>" . $conn->error;
}
}
}

?>

?>

<div class="header">
    <h1>Sign Up</h1>
</div>
        
<div class="row">
    <div class="content">
    <h1>Sign Up</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form" autocomplete="off">
        <?php if(isset($_SESSION["success"])){ print '<span class="success_form">Record Created successfully</span>'; unset($_SESSION["success"]); } ?><br>
        <label for="Fn">Username:</label><br>
        <input type="text" name="Username" id="Fn" maxlength="50" placeholder="Username:" required <?php if(isset($_SESSION["Username:"])){?> value="<?php print $_SESSION["Username:"]; unset($_SESSION["Username:"]); ?>" <?php } ?> autofocus><br>
        <?php if(isset($_SESSION["nameLetter_err"])){ print '<span class="error_form">'.$_SESSION["nameLetter_err"].'</span>'; unset($_SESSION["nameLetter_err"]); } ?>
        <br>

        <label for="Email">Email Address:</label><br>
        <input type="Email" id="Email" name="email_address" maxlength="50" placeholder="Email address" required <?php if(isset($_SESSION["Email"])){?> value="<?php print $_SESSION["Email"]; unset($_SESSION["Email"]); ?>" <?php } ?>><br>
        <?php if(isset($_SESSION["wrong_email_format"])){ print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?>
        <?php if(isset($_SESSION["invalid_dom"])){ print '<span class="error_form">'.$_SESSION["invalid_dom"].'</span>'; unset($_SESSION["invalid_dom"]); } ?>
        <?php if(isset($_SESSION["email_exists"])){ print '<span class="error_form">'.$_SESSION["email_exists"].'</span>'; unset($_SESSION["email_exists"]); } ?>
        <br>
        
        
        <label for="password">Password: </label><br>
        <input type="password" id="password" name="passphrase" placeholder="Password" required <?php if(isset($_SESSION["passphrase"])){?> value="<?php print $_SESSION["passphrase"]; unset($_SESSION["passphrase"]); ?>" <?php } ?> ><br>
        <?php if(isset($_SESSION["error_pass_len"])){ print '<span class="error_form">'.$_SESSION["error_pass_len"].'</span>'; unset($_SESSION["error_pass_len"]); } ?>
        <br>

        
        <label for="ConfirmPassword">ConfirmPassword: </label><br>
        <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="ConfirmPassword" required <?php if(isset($_SESSION["ConfirmPassword"])){?> value="<?php print $_SESSION["ConfirmPassword"]; unset($_SESSION["ConfirmPassword"]); ?>" <?php } ?> ><br>
        <?php if(isset($_SESSION["matching_pass"])){ print '<span class="error_form">'.$_SESSION["matching_pass"].'</span>'; unset($_SESSION["matching_pass"]); } ?>
        <br>
        
        <?php ?>
        </select>

        <br><br>
    <input type="submit" name="sign_up" value="Sign Up" >
</form>