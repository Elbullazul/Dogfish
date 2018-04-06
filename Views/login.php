<?php require_once $this->get_part_path('flashes.php'); ?>

<div class="spacer-15"></div>
<div class="col-md-3">
</div>
<div class="container col-md-4">

    <form class="form-signin" id="form-signin" method="Post" action="<?= links::get_link('authenticate'); ?>">
        <h2 class="form-signin-heading"><?= labels::get_label('@UI03'); ?></h2>
        <label for="inputEmail" class="sr-only">
            <?= labels::get_label('@UI08'); ?>
        </label>
        <input type="text" id="inputUser" name="inputUser" class="form-control"
               placeholder="<?= labels::get_label('@UI08'); ?>" required="" autofocus="">
        <div class='spacer-5'></div>
        <label for="inputPassword" class="sr-only">
            <?= labels::get_label('@UI05'); ?>
        </label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control"
               placeholder="<?= labels::get_label('@UI05'); ?>" required="">
        <div class='spacer-5'></div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> <?= labels::get_label('@UI06'); ?>
            </label>
        </div>
        <div class='spacer-5'></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            <?= labels::get_label('@UI07'); ?>
        </button>
    </form>

</div>
