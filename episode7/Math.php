<?php

class Math{
    public function add(...$nums){
        // return array_sum(func_get_args());
        return array_sum($nums);

        // return $nums;
    }

    public static function addNumbers(...$all){
        return array_sum($all);
    }
}

$obj = new Math();

var_dump($obj->add(1, 2, 3, 4, 5, 6));

echo Math::addNumbers(1,2,3);

/*var_dump(
    $obj->add("My Name", "Hello", "Suchi", "Kochi", "Nazbin", "Nargis", "Sharmin")
);*/