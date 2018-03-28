<?php

abstract class links
{
    static function get_link($_view)
    {
        switch ($_view) {
            // public links
            case 'login':
                $url = '/public/login';
                break;
            case 'authenticate':
                $url = '/public/authenticate';
                break;
            case 'logout':
                $url = '/public/logout';
                break;
            case 'error':
                $url = '/public/error';
                break;
            // user links
            case 'profile':
                $url = '/user/profile';
                break;
            case 'activity':
                $url = '/user/activity';
                break;
            case 'dashboard':
                $url = '/user/dashboard';
                break;
            case 'profile':
                $url = '/user/profile';
                break;
            case 'settings':
                $url = '/user/settings';
                break;
            // grades links
            case 'grades':
                $url = '/grade/grades';
                break;
            // report links
            case 'reports':
                $url = '/report/reports';
                break;
            // admin links
            case 'actions':
                $url = '/admin/actions';
                break;
            case 'users':
                $url = '/admin/users';
                break;
            default:
                $url = '/public/home';
                break;
        }

        return $url;
    }
}

?>
