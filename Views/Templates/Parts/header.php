<?php use utils\path_util; ?>

<div class='navbar navbar-default'>
  <a class="ws-title"
  <?php if ($this->is_user_connected()) {
    echo 'href="'.link_manager::get_link('dashboard').'"';}?>
  > <!-- DO NOT remove: close the a node -->
    <img src="<?= path_util::resource('public/img/logo.svg'); ?>" height="24px"/>
    <?= label_manager::get_label('@UI01'); ?>
  </a>
  <div class="btn-group">
  <?php
    use utils\session_util;
    if ($this->is_user_connected()) {
      include_once(path_util::build('Views/Templates/Parts', 'user-menu.php'));
    } else { ?>
      <a href="<?= link_manager::get_link('login'); ?>"><i class="fas fa-sign-in-alt"></i></a>
  <?php } ?>
  </div>
</div>
