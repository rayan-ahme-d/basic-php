//use addslase can get some protect form sql injection 
$a="it dosen't matter";
echo $a;
echo addslashes($a);//output willl be it dosen/'t matter
//add or remove slashes
<?php 
    $as="it dosen't matter &^ who are you ";
    echo $as;
    $nstr= addslashes($as);
    echo stripslashes($nstr)
?>