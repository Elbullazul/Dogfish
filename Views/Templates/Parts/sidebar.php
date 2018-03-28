<nav class="col-sm-3 col-md-2 sidebar d-none d-md-block">
    <ul class="nav nav-pills flex-column">

        <li class="nav-item">
            <a class="nav-link active"
               href="<?= links::get_link('dashboard'); ?>"><?= labels::get_label('@UI12'); ?> <span
                        class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="<?= links::get_link('reports'); ?>"><?= labels::get_label('@UI13'); ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="<?= links::get_link('grades'); ?>"><?= labels::get_label('@UI14'); ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="<?= links::get_link('schedule'); ?>"><?= labels::get_label('@UI15'); ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="<?= links::get_link('calendar'); ?>"><?= labels::get_label('@UI16'); ?></a>
        </li>
    </ul>
</nav>
