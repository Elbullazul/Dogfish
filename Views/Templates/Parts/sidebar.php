<nav class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="<?= link_manager::get_link('dashboard'); ?>"><?= label_manager::get_label('@UI12'); ?> <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= link_manager::get_link('reports'); ?>"><?= label_manager::get_label('@UI13'); ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= link_manager::get_link('grades'); ?>"><?= label_manager::get_label('@UI14'); ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= link_manager::get_link('schedule'); ?>"><?= label_manager::get_label('@UI15'); ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= link_manager::get_link('calendar'); ?>"><?= label_manager::get_label('@UI16'); ?></a>
    </li>
  </ul>
</nav>
