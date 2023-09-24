<?php
echo "<h3>Users </h3><br>";
foreach ($y as $user) {
    echo $user->name;
    echo " ";
    echo $user->amount_in_bag;
    echo "<br>";

}

?>