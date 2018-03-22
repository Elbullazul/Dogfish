<?php

namespace Models;

abstract class model {
  abstract function get_properties();
  abstract function empty();
  abstract function equals($_object);
}
