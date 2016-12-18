<?php
/**
 * Created by PhpStorm.
 * User: Odin
 * Date: 11/30/2016
 * Time: 5:14 PM
 */
session_start();
function check_login(){

     $arr= array( "email" =>$_SESSION["email"],
        "password"=> $_SESSION["password"]);

    return $arr;

}