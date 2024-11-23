<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['degree'])&& is_array($_POST['degree']))
    {
        $selectDegree=$_POST['degree'];
        if(count($selectDegree) >=2)
        {
            echo"Selection degree";
        }
        else
        {
            echo"Please select at least two";
        }
    }
    else
    {
        echo "Please select at least two degrees!";
    }
}
else
{
    header('location:degree.html');
}
?>