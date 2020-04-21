<?php

use Illuminate\Database\Eloquent\Factory;

if (! function_exists('factory')) {
    /**
     * Create a model factory builder for a given class and amount.
     *
     * @param  string  $class
     * @param  int  $amount
     * @return \Illuminate\Database\Eloquent\FactoryBuilder
     */
    function factory($class, $amount = null)
    {
        $factory = app(Factory::class);

        if (isset($amount) && is_int($amount)) {
            return $factory->of($class)->times($amount);
        }

        return $factory->of($class);
    }
}
