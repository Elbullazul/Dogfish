<div class="dropdown-toggle noselect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user"></i>
</div>
<div class="dropdown-menu dropdown-menu-right text-left">
    <?php
    foreach ($this->menu_actions() as $view => $label) {
        echo '<a class="dropdown-item" href="' . link_manager::get_link($view) . '">' . label_manager::get_label($label) . '</a>';
    } ?>
</div>
