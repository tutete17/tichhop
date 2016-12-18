<?php

use Illuminate\Support\Facades\DB;
class Users extends Eloquent{
    public $table="users";
   public static function check_login($email,$pass){
       $check = Users::where("email","=",$email)->where("password","=",$pass)->count();
       if($check >0){
           return true;
       }else{
           return false;
       }
   }
    public static function check_register($user_input,$email){
        $check_register = Users::where("email","=",$email)->count();
        if($check_register>0)
            return true;
        else
            return false;

    }
}
