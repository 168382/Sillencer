<?php require_once("templates/header.php");?>
 <?php include_once("templates/nav.php");?>
 

     <div class="signin">
        <form action="signin" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
            
                <br>
                <label for="email">email:</label>
                <input type="text" id="email" name="email" required><br>
                <br>
                <label for="password">password:</label>
                <input type="text" id="password" name="password" required><br>
                <br>
            </div>
            <div class="button">
            <button type="submit">Signin</button><br>
         </div>
     </form>
     
