<?php
$people = [
    [
        'name' => 'Taro',
        'age' => 25,
        'gender' => 'men'
    ],[
        'name' => 'Jiro',
        'age' => 20,
        'gender' => 'men'
    ],[
        'name' => 'Saburo',
        'age' => 16,
        'gender' => 'women'
    ]
    ];
echo "<pre>";
var_dump($people);
echo "</pre>";

foreach($people as $p) {
    print $p['name'] . "(" . $p['age']  . $p['gender'] .  ")" . "<br>";
}