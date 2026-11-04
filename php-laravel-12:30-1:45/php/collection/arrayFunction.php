<?php 

    // $numbers = [1,2,3,4,5,56,80,7];

    // // count
    // echo "Total of Number : " . count($numbers);

    // echo '<hr>';
    // // push and pop 
    // array_push($numbers, 'Hello');
    // print_r($numbers);
    // array_pop($numbers);
    // echo '<br>';
    // print_r($numbers);

    // echo '<hr>';
    // // find value in array 
    // if(in_array(1, $numbers)){
    //     echo 'number 1 us in array of numbers';
    // }else{
    //     echo 'Not Found';
    // }

    // echo '<hr>';

    // $index = array_search(80, $numbers);
    // echo 'The Number is at : ' . $numbers[$index];

    // echo '<hr>';

    // $num1= [1,2,3,4,5];
    // $num2 = [5,4,3,2,1];
    // $result = [$num1, $num2];
    // print_r($result);

    // echo "<hr>";
    // echo 'Slice <hr>';
    // $data = ['a', 'b', 'c', 1,2,3,4];

    // $result = array_slice($data, 2,4);
    // print_r($result);

    // echo '<hr>';
    // echo 'Sort <hr>';

    // $data1 = ['a', 'c', 'b', 5,8,6,2,1];
    // print_r($data1);
    // echo '<br>';
    // sort($data1);
    // echo '<br>';
    // print_r($data1);
    // echo '<br>';
    // rsort($data1);
    // echo '<br>';
    // print_r($data1);

    // echo '<hr>';

    // $users = [
    //     [
    //         'name' => 'user1',
    //         'email'=> 'user1@gmail.com',
    //     ],
    //     [
    //         'name' => 'user2',
    //         'email'=> 'user2@gmail.com',
    //     ],
    //     [
    //         'name' => 'user3',
    //         'email'=> 'user3@gmail.com',
    //     ]
    // ];

    // $arrayName = array_column($users, 'name');
    // //  $arrayName = ['user1', 'user2', 'user3'];
    // $arrayEmail = array_column($users, 'email');
    // print_r($arrayName);
    // echo '<br>';
    // print_r($arrayEmail);


    // echo '<hr>';
    // $data = ['John', 29, 99, 'Jane', 5, 100, 66];
    // $result = array_filter($data, function ($value) {
    //         return is_numeric($value) && $value > 10;
    // });

    // print_r($result);

    echo '<hr>';

    $data = [1,2,3,4,"10"];
    $newArr = array_map(function($value){
            return $value * 3;
    }, $data);
    
    print_r($data);
    echo '<br>';
    print_r($newArr);

    echo '<hr>';
    $result = array_reduce($data, function($total, $value){
        return $total + $value;
    }, 0);

    echo $result; 
    





    


