-<?php 
    $as="<a href='https:www.jlasf.com'>want</a>";
    echo $as."<br/>";   
    echo htmlentities($as)."<br/>";//all<> ""will be null
?>

<?php 
    $as="<a href='https:www.jlasf.com'>want</a>";
    echo htmlspecialchars($as,)."<br/>";//all<> ""will be null
?>

//to decode
<?php 
    $as="<a href='https:www.jlasf.com'>want</a>";
    $a=htmlspecialchars($as,)."<br/>";//all<> ""will be null
    echo $a;
    echo htmlspecialchars_decode($a);
?>


//ent working
<?php 
    $as="<a href='https:www.jlasf.com'>want</a>";
    echo htmlspecialchars($as,ENT_QUOTES)."<br/>";//all<> ""will be null
?>