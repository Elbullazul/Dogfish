<?php

class admin_controller extends user_controller
{
    protected function set_access_policies()
    {
        $this->ACCESS_LEVEL = 2;
    }

    function actions()
    {
        return array(
            'dashboard',
            'users'
        );
    }

    function main_view()
    {
        $this->dashboard();
    }

    function name()
    {
        return 'admin';
    }

    // authorized controller actions
    function users()
    {
        $this->gen_view('users');
    }
}

?>
