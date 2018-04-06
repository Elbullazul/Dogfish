<?php

class public_controller extends controller
{
    protected function configure()
    {
        $this->ACCESS_LEVEL = security_service::$PUBLIC;
    }

    function actions()
    {
        return array(
            'home',
            'login',
            'authenticate'
        );
    }

    function main_view()
    {
        $this->home();
    }

    function name()
    {
        return 'public';
    }

    // allowed actions for the controller
    function home()
    {
        $this->gen_view('home');
    }

    function login()
    {
        if ($this->is_user_connected())
            $this->redirect('dashboard');
        else
            $this->gen_view('login');
    }

    function authenticate()
    {
        $this->gen_view('authenticate');
    }
}

?>
