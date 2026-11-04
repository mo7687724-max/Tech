<!-- 
    student id
    student name
    student score 7 subject
    student total 
    student average
    student grade
-->
<?php
$id = $_POST['id'];
$name = $_POST['name'];
$k = $_POST['k'];
$m = $_POST['m'];
$p = $_POST['p'];
$c = $_POST['c'];
$b = $_POST['b'];
$h = $_POST['h'];
$e = $_POST['e'];

$total = $k + $m + $b + $p + $c + $h + $e;
$average = $total / 7;

if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} elseif ($average >= 50) {
    $grade = "E";
} else {
    $grade = "F";
}


?>


<main>
    <form method="post">
        <h1>Find Grade</h1>
        <input type="text" name="id" placeholder="input id"><br>
        <input type="text" name="name" placeholder="input name"><br>
        <input type="number" name="k" placeholder="input k score"><br>
        <input type="number" name="m" placeholder="input m score"><br>
        <input type="number" name="p" placeholder="input p score"><br>
        <input type="number" name="c" placeholder="input c score"><br>
        <input type="number" name="b" placeholder="input b score"><br>
        <input type="number" name="h" placeholder="input h score"><br>
        <input type="number" name="e" placeholder="input e score"><br>
        <button type="submit">submit</button>
    </form>

    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>k</th>
                <th>m</th>
                <th>p</th>
                <th>c</th>
                <th>b</th>
                <th>h</th>
                <th>e</th>
                <th>total</th>
                <th>average</th>
                <th>grade</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($id): ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td><?= $k ?></td>
                    <td><?= $m ?></td>
                    <td><?= $b ?></td>
                    <td><?= $c ?></td>
                    <td><?= $p ?></td>
                    <td><?= $h ?></td>
                    <td><?= $e ?></td>
                    <td><?= $total ?></td>
                    <td><?= number_format($average, 2) ?></td>
                    <td><?= $grade ?></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td colspan="12" align="center">Student not found</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</main>