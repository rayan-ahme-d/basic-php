<?php
$myfile = fopen("as.txt", "r") or die("Unable to open file!");//will be open the as.text file
echo fread($myfile,filesize("as.txt"));
fclose($myfile);
?>