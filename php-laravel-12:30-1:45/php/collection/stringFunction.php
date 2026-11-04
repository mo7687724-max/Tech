<?php 

// $data = "Coca World";
// echo strlen($data);

// echo '<hr>';

// echo strpos($data, 'World');


// echo "<hr>";
// $message = "Welcome to Array Function";
// echo $message. "<br>";
// $new_text = str_replace('Array', 'String', $message);
// echo $new_text;

// echo '<hr>';
// $upper = strtoupper($message);
// echo  $upper;
// echo "<br>";
// $lower = strtolower($message);
// echo $lower;

// echo "<hr>";
// $text = "Web Developer lkjhgfdsdfghjkl";
// $select_char = substr($text, 3, 10);
// echo $select_char;



$text = "   PHP ";
if (trim($text) == "PHP"){
    echo "True";
}

echo  "<hr>";
$color = "red,blue,orange";
echo $color. "<br>";
$arr = explode(",", $color);
// $arr = ["red", "blue", "orange"];

foreach ($arr as $value) {
    echo $value . "\t";
}


echo "<hr>";
$course = ['php', 'laravel', 'jquery'];
// $string = join('-', $course);
$string = implode('-', $course);
echo $string.'<br>';


echo "<hr>";
$code = "<h1>Hello</h1>";
echo $code."<br>";
echo htmlspecialchars($code);


echo "<hr>";
$text = "I hate PHP Programming";
$check1 = str_contains($text, "PHP") ? 'True' : 'False';
$check2 = str_starts_with($text, "P") ? 'True' : "False";
$check3 = str_ends_with($text, "g") ? 'True' : "False";

echo $check1.'<br>';
echo $check2.'<br>';
echo $check3.'<br>';