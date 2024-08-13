<?php
//In function 2 main things are there. Creatong Function & Calling Function.
creating function
calling function

//example
function writeMessage()
{
    echo "Hi";
}
echo "hello" //here this one was print first.Because it is presented outside bydefault.
writeMessage(); //whenever we call this function. The whole code will executing here.

//function calling use INT (another example)
function addValue($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "Process of $num1 and $num2 is $sum"
}
addValue(10, 20); //Here we must and should give the parameters value for print result for $sum. also it is resuability. and here we use more operations also perfom here.
?>