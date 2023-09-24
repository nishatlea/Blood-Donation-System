<?php
echo "<h3>Users </h3><br>";
foreach ($users as $user) {
    echo $user->name;
    echo " ";
    echo $user->blood_group;
    echo "<br>";

}

?>