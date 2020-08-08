<?php
$name="user";
$value="rayan";
setcookie($name,$value,time()-(86400),"/");

?>
<html>
<head>
    <title>document</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$name])){
echo "cookie is not set";
}else{
    echo $_COOKIE[$name];
}

?>

</body>
</html>
//delete cookie

<?php
setcookie('user','rayan',time()-(86400),"/");

echo $_COOKIE['user'];


?>