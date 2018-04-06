<!-- TODO: Make mobile-compatible copy of this module -->
<nav class="col-sm-3 col-md-2 sidebar d-none d-md-block">
    <ul class="nav nav-pills flex-column">

        <?php
        foreach ($this->sidebar_actions() as $view => $label)
        {
            $lbl = labels::get_label($label);
            $lnk = links::get_link($view);

            if ($_view == $view) { ?>
                <?=
                "<li class='nav-item'>
                    <a class='nav-link active' href='$lnk'>$lbl<span class='sr-only'>(current)</span></a>
                </li>"; ?><?php
                } else {?>
                <?=
                "<li class='nav-item'>
                    <a class='nav-link' href='$lnk'>$lbl<span class='sr-only'>(current)</span></a>
                </li>"; ?>
                <?php
            }
        }
        ?>

    </ul>
</nav>
