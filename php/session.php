

<?php
session_start();
$_SESSION["favcolor"]="orange";//session start from main page

echo "session variable is set.";
?>

<?php
session_start();
echo "<pre>";
print_r($_SESSION); //session view from other page
echo "</pre>";

?>

<?php
session_start();
echo "<pre>";
print_r($_SESSION); //view session in html 

echo "</pre>";

?>
<html>
</head>
<body>
<?php
echo $_SESSION["favcolor"];

?>
</body>
</html>