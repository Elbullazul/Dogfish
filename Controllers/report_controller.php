<?php

class report_controller extends controller
{
    function actions()
    {
        // TODO: Implement actions() method.
    }

    function main_view()
    {
        // TODO: Implement main_view() method.
    }

    protected function configure()
    {
        $this->ACCESS_LEVEL = security_service::$TEACHER;
    }

    function name()
    {
        return 'report';
    }
}

?>
