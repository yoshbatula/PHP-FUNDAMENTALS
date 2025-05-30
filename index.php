<?php
session_start();

     if (isset($_POST['register'])) {
         $username = $_POST['username'];
         $password = $_POST['password'];    
        registerUser($username, $password);
        }   

    function registerUser($username, $password) {
            $users = array('username' => $username, 'password' => $password);

            if (!empty($username) && !empty($password)) {
                 $_SESSION['users'] = $users;
                 $_SESSION['username'] = $username;
                header('Location: index-dashboard.php');
                exit();
            } 
    }  
?>
 





