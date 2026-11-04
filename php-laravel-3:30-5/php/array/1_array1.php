<!-- <?php 

    $courses = ['php', 'laravel', 'vue', 'react'];

    // print_r($courses);
    echo $courses[3];

    echo "<hr>";

    $courses[4] = 'JS';
    echo $courses[4];

    echo "<hr>";
    
    $courses[2] = "Nuxt";

    echo $courses[2];


    echo "<hr>";

    foreach($courses as $course){
        echo "Course : $course<br>";
    }
?> -->


<?php 

    function find($size){
        $evenNumber = [];
        $oddNumber = [];

        for($i=1 ; $i<=$size ; $i++){
            if($i % 2 === 0){ // 1 % 2 === 0
                $evenNumber[] = $i; // [2, 4]
            }else{
                $oddNumber[] = $i; // [1, 3, 5]
            }
        }

        return [$evenNumber, $oddNumber]; 
    }

    $size = $_POST['size'] ?? 0;
    // print_r(find($size));
    [$even, $odd] = find($size);
    // print_r($even);

?>

<main>
    <form method="post">
        <input type="number" name="size" value="<?= $size ?>" placeholder="size of number">
        <button type="submit">submit</button>
        <button><a href="">clear</a></button>
    </form>

    <hr>
    <h1>Even Number : </h1>
    <ul>
        <?php if($even): ?>
            <?php foreach($even as $value): ?>
                <li><?= $value ?></li>
            <?php endforeach ?>
        <?php else:?>
            <p>Even number not found</p>
        <?php endif ?>
    </ul>

    <hr>
    <h1>Odd Number : </h1>
    <ul>
        <?php if($even): ?>
            <?php foreach($odd as $value): ?>
                <li><?= $value ?></li>
            <?php endforeach ?>
        <?php else:?>
            <p>Odd number not found</p>
        <?php endif ?>
    </ul>
</main>