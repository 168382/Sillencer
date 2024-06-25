<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="demo"></div>
    <script>
        document.getElemntById("demo").innerHTML= "My first JS code";

    </script>
    <br>
    <br>
    <button onclick="document.getElemntById('myImg').src='images/img/xxx.webp'">Turn on</button>
    <img src="img/xxx.webp"alt="" id="myImg" width="200px">

    <button onclick="document.getElemntById('myImg').src='images/img/xxx.webp'">Turn off</button>

    <br>
    <br>
    <a href="" onclick="return confirm('Are you sure')">delete</a>
    <br>
    <br>

    <script>
        document.write(15+23);
    
    </script>
    <br>
    <br>

    <script>
        //window.alert('record created')
    </script>
    <br>
    <br>

    <script>
        console.log(45-42);
    </script>
    <br>
    <br>

    <button onclick="window.print();">print this page</button>
    <br>
    <br>
    <script>
        let myAge=45;
        const fullname='Alex Okama'
        document.write(fullname + 'is' +myAge + 'years old');
    </script>
    <br>
    <br>
    <script>
       // var firstname = prompt('what is your first name?');
       // document.write(firstname);
    </script>
<?php
print date_default_timezone_set("Africa/Nairobi");
print "Static timer:" . date("H:i:s");
?>
<script>
    var today=new Date();
    var today=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();

    h=addzero(h);
    m=addzero(m);
    s=addzero(s);

    document.getElementById('txt').innerHTML= h + ":" + m + ":" + s + "";
    t=setTimeout('startTime()',500);

function addZero(){
    if(i<10){
        i="0" +i;
    }
    return i;
}
</script>
    <span></span>
</body>
<html>