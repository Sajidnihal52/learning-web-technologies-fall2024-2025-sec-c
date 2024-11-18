<?php
$elements = array(7,8,4,11,12,10,17,6);
$search = 12;
$found = false;
for ($i = 0; $i <= 8; $i++) 
{
    if ($elements[$i] == $search) 
    {
        echo "$search"." found the number .";
        $found= true;
        break;
        
    }
}
if($found == false)
{
    echo "$search"." not found the number .";
}
?>