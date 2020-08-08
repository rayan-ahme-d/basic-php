<?php

echo date("h:i:sa")
?> 
//php date 
echo date("D/M/Y");

//currect time in my country
<?php
date_default_timezone_set('asia/dhaka');//default timezone in bangladesh
echo date("h:i:sa");
?> 


//date_default_time_in_usa_new_york
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>