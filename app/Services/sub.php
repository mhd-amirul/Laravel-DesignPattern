<?php

namespace App\Services;


abstract class Sub {

public function makesub()
{
    return $this
        ->laybread()
        ->addspices()
        ->addprimarytoppings()
        ->addsauces();
}

protected function laybread()
{
    var_dump("step 1. laying down the bread.");

    return $this;
}

protected function addspices()
{
    var_dump("step 2. add some spices.");

    return $this;
}

protected function addsauces()
{
    var_dump("step 4. the last, add the sauces.");

    return $this;
}

protected abstract function addprimarytoppings();
}
