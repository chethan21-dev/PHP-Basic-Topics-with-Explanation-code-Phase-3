<?php
//loops are presented only when code was run at repeatedly.
//suppose some condition was going to give TRUE means. It will continously print the result when the output gets TRUE.
//otherwise when condition gets false means. again it has check condion and run untils it gets TRUE.
//syntax demo
while (condition is true)
{
    code executed;
}

//Example
$x = 1;

while ($x <= 10) //Here we are checking x value less than or equal to 10.
{
    echo "The number is : $x <br>"; //if the x value less than or equal to 10 means. It will print 1,2,3,....10.
    $x++; //this is increment to another value of x. Suppose x value not less than 10 means. It will add another number. and again check the condition.

}

?>