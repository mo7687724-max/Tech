<?php 


$num = [1,2,3,4,5];

array_push($num, 20);
print_r($num);

echo "<hr>";

$products = [
    [
        "id" => 101,
        "title" => "mouse",
        "price" => 1220.22,
        "qty" => 20,
        "image" => "mouse.png",
        "description" => "......."
    ],
    [
        "id" => 102,
        "title" => "desktop",
        "price" => 2220.22,
        "qty" => 30,
        "image" => "desktop.png",
        "description" => "......."
    ],
    [
        "id" => 103,
        "title" => "laptop",
        "price" => 1420.22,
        "qty" => 10,
        "image" => "laptop.png",
        "description" => "......."
    ]
];


array_push($products, [
        "id" => 104,
        "title" => "sdfghjkl",
        "price" => 8765.22,
        "qty" => 234,
        "image" => "laptop.png",
        "description" => "zxcvbnm"
    ]);

print_r($products[3]);


echo "<hr>";

array_pop($products);

print_r($products[3]);










echo "<hr>";
$data = ['john', 'jane', 10, 30];

$result = (in_array('jane', $data)) ? 'True': 'False';

echo $result;

// --------------------
echo "<hr>";

$courses = ['vue', 'react', 'php', 'laravel'];

$index = array_search('php', $courses);

echo "at position $index<br>";
echo "Value : " . $courses[$index];


// --------------------
echo "<hr>";
$user1 = ['kaka', 20];
$user2 = ['kak@gmail.com', '123467'];

$user3 = array_merge($user1, $user2);
print_r($user3);


// -----------------
echo "<hr>";
$data = ['a', 'b', 'c', 1, 3, 5, 4];

$result = array_slice($data, 1, 5);
print_r($result);
echo "<br>";
print_r($data);

// -------------
echo "<hr>";
$users = [
    ["name" => "user1", "age" => 11],
    ["name" => "user2", "age" => 21],
    ["name" => "user3", "age" => 31],
];

$result = array_column($users, 'name');
print_r($result);
$result = array_column($users, 'age');
echo "<br>";
print_r($result);


// --------
echo "<hr>";
$data = ['vue', 10, 30, 'laravel', 5, 50];

$result = array_filter($data, function($item){
    return is_numeric($item) && $item > 10;
});

print_r($result);

// --------------------
echo "<hr>";
$data = [1,22,3,54,5,66];
$result = array_map(function($item){
    return "Number is $item";
}, $data);

print_r($result);

echo "<hr>";
$data = [10 , "30", 60, "40"];
$result = array_reduce($data, function($sum, $item){
    return $sum + $item;
});

echo "Sum = $result";






