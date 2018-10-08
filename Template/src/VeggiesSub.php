<?php namespace App;

class VeggiesSub extends Sub {

    protected function addPrimaryToppings()
    {
        var_dump('adding veggies');

        return $this;
    }
}