<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        //print_r($_GET);
        //echo "Test";
        //var_dump($_GET);

        // $abc = 10;

        // function sum(){
        //     //$GLOBALS['abc'];
        //     global $abc;
        // }

        $username = trim($_POST['username']);
        $password = trim($_REQUEST['password']);
        //echo "your username is: ".$username;
        //echo "your username is: {$username}";

        if($username == null || empty($password)){
            echo "Null username/password!";

        }
        else{
            if(isset($_SESSION['users'][$username])){
                if($SESSION['users'][$username] == $password){
                    echo"login succcces,welcome";
                    header('location: home.php') ;
                    exit();
        }
                    
        
        else{

            echo "invalid password!";
        }
    }
    else{
echo "Username not fond";
    }
}
    }
else{
    echo ("invalid");
}
?>