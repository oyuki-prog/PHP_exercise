<?php

$profile = [
    'name' => 'Bob',
    'age' => '21',
    'staff' => ['Taro', 'Ken']
];

$profile['age'] = 22;

$profile[] = '末尾に追加';
$profile['staff'][] = 'John';

var_dump($profile);