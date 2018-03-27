<?php

namespace Managers;

abstract class manager
{
    static function invoke($repository, $method, $args = array())
    {
        $tmp_repo = new $repository();

        if (!empty($args)) {
            $result = $tmp_repo->$method($args);
        } else {
            $result = $tmp_repo->$method();
        }
        return $result;
    }

    static function entity2model($_entity, $_model)
    {
        foreach ($_entity->properties() as $field => $value) {
            if (array_key_exists($field, $_model->properties())) {
                $_model->$field($value);
            }
        }

        return $_model;
    }
}

?>
