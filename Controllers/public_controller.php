<?php

class public_controller extends core_controller
{
    protected function set_access_policies()
    {
        $this->ACCESS_LEVEL = 0;
    }

    function actions()
    {
        return array(
            'home',
            'login',
            'logout',
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

    function logout()
    {
        $this->gen_view('logout');
    }

    function authenticate()
    {
        $this->gen_view('authenticate');
    }
}

?>
