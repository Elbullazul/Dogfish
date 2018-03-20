<?php use utils\path_util; ?>

<div class='navbar navbar-default'>
  <a class="ws-title" href="<?= link_manager::get_home_link(); ?>">
    <img src="<?= path_util::resource('public/img/logo.svg'); ?>" height="24px"/>
    <?= label_manager::get_label('@UI01'); ?>
  </a>
<!-- <i class="fas fa-user"></i> -->
  <div class="btn-group">
    <div class="dropdown-toggle noselect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i>
    </div>
    <div class="dropdown-menu dropdown-menu-right text-left">
      <?php include_once(path_util::build('Views/Templates/Parts', 'user-menu.php')); ?>
    </div>
  </div>
</div>
