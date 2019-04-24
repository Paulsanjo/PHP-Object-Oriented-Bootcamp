<?php

class Math{
    public function add(...$nums){
        // return array_sum(func_get_args());
        return array_sum($nums);

        // return $nums;
    }
}

$obj = new Math();

var_dump($obj->add(1, 2, 3, 4, 5, 6));

/*var_dump(
    $obj->add("My Name", "Hello", "Suchi", "Kochi", "Nazbin", "Nargis", "Sharmin")
);*/