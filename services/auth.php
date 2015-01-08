<?php

$action = strtolower($_REQUEST['action']);
$actions_allowed = array('login' => 1);

if(array_key_exists($action, $actions_allowed)){

    if($action === 'login') {
        require_once('../config.php');
        require_once(CLASS_PATH . 'class.mysql.php');

        $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME); 

        $get_sql = "SELECT * FROM users";
        $users = $db->fetch_all_array($get_sql);    

        echo $users[0]['passkey'] . "<br />";   

        $auth = password_verify('cleandreams', $users[0]['passkey']);
        $output = "User and password is valid";
    } 
}

echo $output; 
?>