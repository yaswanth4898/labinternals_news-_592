<?php
  $var1=$_GET['name'];
  $var2=$_GET['email'];
  $c=mysqli_connect("127.0.0.1","root","vishnu123","sai");
  $res=mysqli_query($c,"insert into contact values('$var1','$var2')");
  if($c){
    echo "Email sent!!!!";
  }
  else
  {
    echo "Email not sent!!!!";
   }
    
?>
