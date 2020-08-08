//array 1

<?php

$gv=[
    [1,"kalu","manager",70000],
    [2,"patali","worker",50000],
    [3,"hamari","selsman",30000],
    [4,"fucking","fuckingman",2000]
];
for($col=0;$col<4;$col++){
for($row=0;$row<4;$row++){
echo $gv[$col][$row]." ";
};
echo "<br/>";
};
?> 


//array 2 using foreach loop result will be same

    <?php

    $gv=[
        [1,"kalu","manager",70000],
        [2,"patali","worker",50000],
        [3,"hamari","selsman",30000],
        [4,"fucking","fuckingman",2000],
        [4,"fucking","fuckingman",2000],
        [4,"fucking","fuckingman",2000],
        [4,"fucking","fuckingman",2000],
        [4,"fucking","fuckingman",2000],

    ]; 	
    echo "<table border='1px' cellpadding='10' cellspacing='3'>";
    echo "<tr>
    <th>Id</th>
    <th>Name</th>
    <th>position</th>
    <th>salary</th>

    </tr>";
    foreach($gv as $v1){
        echo "<tr>";
        foreach($v1 as $v2){
        echo "<td>".$v2. "</td>";
        };
        echo "</tr>";
    };
    echo "</table>"
    ?> 