<?php

namespace App;

class Users
{
    public function index()
    {
        $data['users'] = \User::getAUsers();
        $data['title'] = rand(0, 1) ? 'Hello' : 'Bye';
        $view = new \View();
        $view->render('users/index', $data);
    }

    public function create()
    {
        $view = new \View();
        $view->render('users/create');
    }

    public function store()
    {
        $name = $_POST['name'];

        $user = new \User();
        $user->name = $name;
        $user->save();
        echo "user ".$name." saved";
    }

    public function find()
    {
        $view = new \View();
        $view->render('users/find');
    }

    public function finduser()
    {
        $name = $_POST['name'];

        echo \User::findUser($name);
    }

    public function test()
    {
        echo "testusers";
    }
}