<?php
  date_default_timezone_set("Africa/Nairobi");
  print '<br>';
  print "This is the first lesson";
  print "<br>";
  echo  'Today is Moday'; 
  print "<br>";
  print 1586;
  print "<br>";
  print '4564';
  print '<br>';

  print "15 + 45";

  print "<br>";
  print 15+45;
  print '<br>';
  print date ('1');
  print '<br>';
  print date ('1', strtotime("tomorrow"));
  print '<br>';
  print date ('js F Y, 1');
  print '<br>';
  print date (' 1 , js F Y H:i:S ');
  print '<br>';
  PRINT "Today is: ". date ('js F Y, 1');

  $Fname= "Alex Okama";

  $yob= 2005;
  

print $Fname;
print '<br>';

print $yob;
print '<br>';
$age =date("Y") - $yob;
print $Fname . "is" .$age. "years old";

$adult_age= 18;

if( $age>=$adult_age){
  print $Fname. "is  an adult";
}else{
  print $Fname. "is not an  adult";

  
}

























?>