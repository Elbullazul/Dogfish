<?php use utils\path_util;?>

<!DOCTYPE html>
<html>
  <head>
    <title><?= label_manager::get_label('@UI01')?></title>

    <!-- JQuery 3.3.1 -->
    <script type="text/javascript" src="<?= path_util::resource('jquery-3.3.1/jquery-3.3.1.min.js'); ?>"></script>

    <!-- bootstrap JavaScript -->
    <script type="text/javascript" src="<?= path_util::resource('bootstrap-4.0.0/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- fontawesome icon font -->
    <script type="text/javascript" src="<?= path_util::resource('fontawesome-free-5.0.8/svg-with-js/js/fontawesome.js'); ?>"></script>
    <script type="text/javascript" src="<?= path_util::resource('fontawesome-free-5.0.8/svg-with-js/js/fa-solid.js'); ?>"></script>

    <!-- local bootstrap copy -->
    <link href="<?= path_util::resource('bootstrap-4.0.0/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" media="all" />

    <!-- local overrides -->
    <link href="<?= path_util::resource('public/css/overrides.css'); ?>" rel="stylesheet" type="text/css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?php include_once path_util::build($this->PARTS,'header.php');?>
    <?php include_once $path; ?>
    <?php include_once path_util::build($this->PARTS,'footer.php');?>
  </body>
</html>
