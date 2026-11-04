<?php

// push - pop

$data = [1, 2];

print_r($data);
echo "<br>";
array_push($data, "Hello");
print_r($data);

echo "<hr>";

array_pop($data);
print_r($data);

echo "<hr>";

// in_array - array_search

$data = ["php", 20, "vue", "laravel"];

$result = (in_array("laravel", $data) ? "Found" : "Not found");

echo $result;

echo "<hr>";
$index = array_search("laravel", $data);

echo "at index : $index <br>";
echo "Data : " . $data[$index];








// array_merge - slice
echo "<hr>";
$arr1 = ["apple", "banana"];
$arr2 = [10,30,40];

$arr3 = array_merge($arr1, $arr2);

echo "Merge : ";
print_r($arr3);

echo "<hr>";

$result = array_slice($arr3, 1, 3);
echo "Slice : ";
print_r($result);

// sort -rsort
echo "<hr>";

$data = [99,33,11,55, "php", "vue", "cpp"];
echo "Old : ";
print_r($data);

echo "<hr>";
echo "After Sort : ";
sort($data);
print_r($data);

echo "<hr>";
echo "Reverse Sort : ";
rsort($data);
print_r($data);

echo "<hr>";
$users =  [
    ["name" => "user1", "age" => 1],
    ["name" => "user2", "age" => 2],
    ["name" => "user3", "age" => 4],
];
$name = array_column($users, "name");
// $age = array_column($users, "age");
echo "Array Column : ";
print_r($name);


echo "<hr>";
$data = [99,33, "php",55,11, 80, "vue", "cpp"];

$result = array_filter($data, function($item){
        return is_numeric($item) && $item > 35;
});

echo "Filter : ";
print_r($result);



echo "<hr>";
$data = [99,33, "php",55,11, 80, "vue", "cpp"];
$result = array_map(function($item){
        return "Item : " . $item;
}, $data);
echo "Map : ";
print_r($result);



echo "<hr>";
$number = [10, 30, "50", 90, "20"]; // 1305020 - 200
$result = array_reduce($number, function($total, $item){
    return $total + $item;
});

echo "Total : $result";