<h1>LOOPS</h1>


<?php

//while loop

$init = 0;

while ($init < 10){
   
    print "<h6>Hello World</h6>";

    $init ++ ;
}

//do-while loop


do{
    print "<h3>Welcome to the world of php</h3>";
    $init--;
}while($init > 3);


// for loop

for ($i = 0; $i<10; $i++){

    print "<p>I'm kind of good</p>";

}

// foreach loop



// foreach($color AS $color){
//     print "<h2>". $color. "</h2>";
// }




?>


<select name="" id="">

    <option value="">--Color--</option>

    <?php
    $color = array("black", "blue", "white", "green");

    foreach($color AS $color){
        echo "<option value-''> $color </option>";
    }
    
    ?>

</select>