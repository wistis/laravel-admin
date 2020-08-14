<?php

namespace Wistis\Admin\Form\Field;

use Wistis\Admin\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }
}
