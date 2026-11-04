<!-- 
    let number = [1,2,4,4]
    $number = [1,2,3,4,4];
-->

<?php
// $courses = ['php', 'github', 'laravel', 'deploy'];

// echo $courses[1];
// echo "<hr>";

// foreach($courses as $course){
//     echo "Course : $course<br>";
// }
// echo "<hr>";

// $courses[4]= 'vue';

// foreach($courses as $course){
//     echo "Course : $course<br>";
// }
// echo "<hr>";
// $courses[3] = "React";

// foreach($courses as $course){
//     echo "Course : $course<br>";
// }
?>


<?php
    echo "<hr>";
    function find($num){

        $even = [];
        $odd = [];

        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 === 0) {
                $even[] = $i;
            } else {
                $odd[] = $i;
            }
        }

        return [$even, $odd];
    }

    $num = $_POST['num'] ?? 0;

    [$even, $odd] = find($num);

?>

<main>

    <form method="post">
        <input type="number" name="num" value="<?= $num ?? '' ?>" placeholder="input number">
        <button type="submit">submit</button>
        <button><a href="">clear</a></button>
    </form>
    <hr>
    <h3>Group of Even number</h3>
    <ul>
        <?php foreach($even as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach?>
    </ul>

    <hr>
    <h3>Group of Odd number</h3>
    <ul>
        <?php foreach($odd as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach?>
    </ul>
</main>