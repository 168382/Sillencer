<?php require_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>

     <div class="main">
        <div class="header">
          <h1>YOUR FOOD ORDER?</h1>
          <h2>Place each order type separately</h2>
          <br>
          <h3>Order</h3>
        </div>
          <div class="Order">
            <form action="Order" method="post">
                <div class="form-group">
                    <label for="Food type">Food type:</label>
                    <input type="text" id="Food type" name="Food type" required><br>
                    <br>
                    <label for="Payment Method">Payment method:</label>
                    <input type="Payment Method" id="Payment Method" name="Payment Method" required><br>
                    <br>
                    <label for="Amount">Amount:</label>
                    <input type="Amount" id="Amount" name="Amount" required><br>
                    <br>
                    <label for="Location">Location:</label>
                    <input type="Location" id="Location" name="Location" required><br>
                    <br>
                    <label for="Id Number">Id:</label>
                    <input type="Id Number "id="Id Number" name="Id Number" required><br>
                    <br>
                </div>
                <div class="button">
                    <button type="submit">Order</button><br>
                 </div>
            </form>
          </div>
     </div>
    
</body>
</html>