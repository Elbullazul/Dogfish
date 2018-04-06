<?php

class student_controller extends controller
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
        $this->ACCESS_LEVEL = security_service::$STUDENT;
    }

    function name()
    {
        return 'students';
    }
}

?>
