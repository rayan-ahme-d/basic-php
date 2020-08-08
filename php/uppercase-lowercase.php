<?php
$str1="TUsjNBlajfmlkafjSFS";
echo strtolower($str1);

echo "<br/>";
$str2="TUsjNBlajfmlkafjSFS";
echo strtoupper($str2);

echo "<br/>";

$str3="Rayan ahmed";
echo lcfirst($str3);//first character will be lowercase

echo "<br/>";

$str4="rayan";
echo ucfirst($str4);//first character will be uppercase

echo "<br/>";
$str5="rayan ahmed";
echo ucwords($str5);//every words first character will be uppercase

?>