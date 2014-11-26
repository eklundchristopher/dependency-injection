<?php

// Override any existing container instances here.
//   app()->bind('dog', 'Custom\Repositories\StrayDog');

// Create a dog, make it walk for a little bit and then have it
// eat on a snack of your choice.
$dog = app()->make('dog');

echo $dog->walk(5, Zoo\Contracts\Animal::DIR_SOUTH);

echo $dog->eat(app()->make('pizza'));
