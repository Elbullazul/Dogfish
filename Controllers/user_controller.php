<?php

use Utils\path_util;
use Utils\session_util;

use Models\users;

class user_controller extends core_controller
{
    protected function set_access_policies()
    {
        $this->ACCESS_LEVEL = 1;
    }

    function gen_view($_view)
    {
        // path for master import
        $path = path_util::build($this->VIEWS, $_view . '.php');

        // check user access rights
        switch (security_service::validate_access($this)) {
            case security_service::$NO_AUTH_REQUIRED:
            case security_service::$AUTH_SUCCESSFUL:
                require_once path_util::build($this->TEMPLATES, 'master.php');  // include master template
                break;
            case security_service::$USER_NOT_CONNECTED:
                $this->redirect('login');
                break;
            case security_service::$INSUFFICIENT_PRIVILEGES:
                $this->redirect('dashboard', array('error_msg' => '@SYS03'));
                break;
        }
    }

    function get_user_privileges()
    {
        return session_util::get('user-privileges');
    }

    function menu_actions()
    {
        return array(
            'dashboard' => '@UI12',
            'profile' => '@UI10',
            'settings' => '@UI17',
            'logout' => '@UI11'
        );
    }

    function sidebar_actions()
    {
        return array(

        );
    }

    function actions()
    {
        return array(
            'dashboard',
            'activity',
            'profile',
            'settings'
        );
    }

    function main_view()
    {
        $this->dashboard();
    }

    function name()
    {
        return 'user';
    }

    // allowed actions for the controller
    function dashboard()
    {
        $this->gen_view('dashboard');
    }

    function activity()
    {
        $this->gen_view('activity');
    }

    function profile()
    {
        $this->gen_view('profile');
    }

    function settings()
    {
        $this->gen_view('settings');
    }

}

?>
