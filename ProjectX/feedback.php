<?php require_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>

     <div class="main">
        <div class="header">
          <h1>FEEDBACK?</h1> 
        </div>

          <div class="Feedback">
            <form action="feedback" method="post">
                <div class="form-group">
                    <label for="How do you rate Us">level of rate:</label>
                    <input type="text" id="How do you rate Us" name="How do you rate Us" required><br>
                    <br>
                    <label for="what one thing do you want us to improve on ">what one thing do you want us to improve on:</label>
                    <input type="what one thing do you want us to improve on" id="what one thing do you want us to improve on" name="what one thing do you want us to improve on" required><br>
                    <br>
                    <label for="How do you feel shopping with us">How do you feel shopping with us:</label>
                    <input type="How do you feel shopping with us" id="How do you feel shopping with us" name="How do you feel shopping with us" required><br>

                    <br>
                    <label for="What are some experience or skills have you learnt from WEX restaruant ">What are some experience or skills have you learnt from WEX restaruant:</label>
                    <input type="What are some experience or skills have you learnt from WEX restaruant" id="What are some experience or skills have you learnt from WEX restaruant" name="What are some experience or skills have you learnt from WEX restaruant" required><br>
                    <P>THANKS FOR YOU FEEDBACK</P>
                    <br>
                </div>
                <div class="button">
                    <button type="submit">submit</button><br>
                 </div>
            </form>
          </div>
     </div>
    
</body>
   