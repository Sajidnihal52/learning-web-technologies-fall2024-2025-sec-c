<?php
if(isset($_POST['submit']))
{
    $email=trim($_POST['email']);
    if($email==null)
    {
        echo"Email cannot be empty";
    }
    else
    {
        $atrPos=strpos($email,'@');
        $dotPos=strpos($email,'.');
        if($atrPos===false || $dotPos===false|| $atrPos>$dotPos|| $dotPos===strlen($email)-1)
        {
            echo"Not a valid email";
        }
        else
        {
            echo"Valid email";
        }
    }
}
else
{
    header('location:email.html');
}
?>