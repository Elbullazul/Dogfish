<?php

use utils\get_util;
use utils\path_util;

class user_controller extends core_controller {

  // function gen_view($_view) {
  //   replace by better authentication method
  //   if (get_util::get('key') == "") {
  //     $this->gen_error_view("Big unlucky mistake: you are not the one");
  //   }
  //   else {
  //     $path = 'Views/'.$_view.'.php';
  //
  //     // include master template
  //     include_once path_util::build($this->TEMPLATES, 'master.php');
  //   }
  // }

  function name() {
    return 'user';
  }
}

 ?>
