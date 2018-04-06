<?php

class admin_controller extends user_controller
{
    protected function configure()
    {
        $this->ACCESS_LEVEL = security_service::$ADMINISTRATOR;
        $this->actions = $this->base_actions();
        array_push($this->actions, 'users');    // extend user actions
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
