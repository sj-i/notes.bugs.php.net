<?php
const NUM_SIZE = 10;
const LOOP_COUNT = 1000;

$arr = make_nested(5);

function make_nested(int $depth)
{
    $arr = [];
    for($i = 0; $i < NUM_SIZE; $i++) {
        if ($depth === 0) {
            $arr[md5($i)] = hash('sha256', rand(0, NUM_SIZE));
        } else {
            $arr[md5($i)] = make_nested($depth - 1);
        }
    }
    return $arr;
}


$before = microtime(true);
for ($i = 0; $i < LOOP_COUNT; $i++) {
    json_encode($arr);
}
$result = microtime(true) - $before;
echo "json_encode: {$result}\n";

$before = microtime(true);
for ($i = 0; $i < LOOP_COUNT; $i++) {
    serialize($arr);
}
$result = microtime(true) - $before;
echo "serialize: {$result}\n";
