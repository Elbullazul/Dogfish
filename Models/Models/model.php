<?php

namespace Models;

abstract class model
{
    abstract function empty();

    abstract function equals($_object);

    abstract function properties();
}
