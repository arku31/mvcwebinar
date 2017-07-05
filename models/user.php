<?php

class User extends \Illuminate\Database\Eloquent\Model
{

    public $timestamps = false;

    public static function getAUsers()
    {
        return User::where('name', 'like', 'a%')->get();
    }
    public static function findUser($username)
    {
        return User::where('name', 'like', '%'.$username.'%')->get();
    }
}