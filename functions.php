<?php
    session_start();

    function genPassword($userNum){
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    
        $psw = substr(str_shuffle($caratteri), 0, $userNum);
        return $psw;

    }
?>