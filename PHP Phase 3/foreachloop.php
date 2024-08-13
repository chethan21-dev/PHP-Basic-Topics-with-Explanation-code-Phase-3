<?php
//foreach loop is uses based on array elements. That means according to array count, array base.  
//syntax is
foreach($arraya as $val) //here first foreach function will gave array name as reference is key pair value.
{
    executable code
}
//example 
$cars = array("Audi","BMW"."Ford","ferrari");

foreach($cars as $names)
{
    echo $names . "<br>"; //Now it will print one by one name of cars. 
}

//associate arrays in foreach loop is defined as
$age = array("Mahesh"=>"28","Nani"=>"29");
foreach($age is $x =>$val) //here we just declare the variable and its value.
{
    echo "$x = $val <br>"
}
?>