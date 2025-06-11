<?php

echo "<h1>Date</h1>";
// to display date we use date() function

/*
    d - Represents the day of the month (01 to 31)
    m - Represents a month (01 to 12)
    Y - Represents a year (in four digits)
    l (lowercase 'L') - Represents the day of the week
*/

echo "Today is ".date("Y/m/d/l");
echo "<br/>";
echo "<br/>";

echo "<h1>Real world usecase </h1>";

//Use the date() function to automatically update the copyright year on your website:

echo "&copy; 2004-".date("Y");
echo "<br/>";

echo "<h1>Time</h1>";
echo "<br/>";

/*
Here are some characters that are commonly used for times:

    H - 24-hour format of an hour (00 to 23)
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)

*/

echo "time is ".date("h:i:sa");
//above time shows time where the server is located
echo "<br/>";
//set time zone
date_default_timezone_set("Asia/Kolkata");
echo "time is ".date("h:i:sa");
echo "<br/>";
echo "<br/>";

/*
CREATING date with mktime
The PHP mktime() function returns the Unix timestamp for a date. 
The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
*/
// syntax --> mktime(hour, minute, second, month, day, year)

$d =mktime(1,23,30,6,11,2025);
echo "Created date is ".date("Y-m-d h:i:sa",$d);
echo "<br/>";

echo $d;

// Creating a date from a string with strtotime()
/*
The PHP strtotime() function is used to convert a human readable date string into 
a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT)
*/
echo "<br/>";
echo "<br/>";

$d=strtotime("1:30am June 11 2025");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br/>";
echo "<br/>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "<br/>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "<br/>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "<br/>";
?>