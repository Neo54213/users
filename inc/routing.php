<?php
switch($id){
    case 'sign_in':
        require_once 'sign_in.php';
        break;
    case 'profile':
        require_once 'profile.php';
        break;
    default: require_once 'main.php';
}