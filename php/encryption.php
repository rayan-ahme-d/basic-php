<?php 
    $en="Hello";
    echo $en."<br>";
    echo md5($en)."<br/>";

    echo md5($en,true);//binary number
    //hard encrypted system
    echo "<br/>";
    $hn="hello";
    echo sha1($hn);//very hard;
    echo "<br/>";
    echo sha1($hn,true);//very hard;
?>
<?php 
    $en="Hello";

    if(md5($en) == "8b1a9953c4611296a827abf8c47804d7" ){
        echo "password match";
    };
?>