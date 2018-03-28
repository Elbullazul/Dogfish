<?php

use Utils\path_util;
use Utils\session_util; ?>

<div class='navbar navbar-default'>
    <div class="logo">
        <img src="<?= path_util::resource('public/img/logo.svg'); ?>" height="24px"/>
        <?= labels::get_label('@UI01'); ?>
    </div>
    <div class="btn-group">
        <?php
        if ($this->ACCESS_LEVEL > security_service::$PUBLIC) {
            if ($this->is_user_connected()) {
                require_once path_util::build($this->PARTS, 'user-menu.php');
            }
        } ?>
    </div>
</div>
