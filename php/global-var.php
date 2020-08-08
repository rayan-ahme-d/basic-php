//global variable

$x=0;
functin a{
global $x;//ok 
echo $x;
}

//or 

$x=0;
function glbl(){
$a=$_GLOBAL['X'];
echo $a;//may be 
}