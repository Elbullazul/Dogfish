<div class="dropdown-toggle noselect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user"></i>
</div>
<div class="dropdown-menu dropdown-menu-right text-left">
  <a class="dropdown-item" href="<?= link_manager::get_link('dashboard'); ?>"><?= label_manager::get_label('@UI12'); ?></a>
  <a class="dropdown-item" href="<?= link_manager::get_link('profile'); ?>"><?= label_manager::get_label('@UI10'); ?></a>
  <a class="dropdown-item" href="<?= link_manager::get_link('logout'); ?>"><?= label_manager::get_label('@UI11'); ?></a>
</div>
