<?php
echo "<h3>Users </h3><br>";
foreach ($x as $user) {
    echo $user->name ;
    echo " ";
    echo $user->amount_in_bag ;
    echo " ";
    echo $user->b_type ;
    echo "<br>";

}

?>