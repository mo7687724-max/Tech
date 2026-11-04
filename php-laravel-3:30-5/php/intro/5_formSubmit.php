<!-- 
    student id
    student name
    student score 7 subject
    total score 
    average score
    grade 
-->

<?php
$id = $_POST['id'] ?? 0;
$name = $_POST['name'] ?? '';
$k = $_POST['k'] ?? 0;
$m = $_POST['m'] ?? 0;
$p = $_POST['p'] ?? 0;
$c = $_POST['c'] ?? 0;
$b = $_POST['b'] ?? 0;
$h = $_POST['h'] ?? 0;
$e = $_POST['e'] ?? 0;

$total = $k + $m + $p + $c + $b + $h + $e;
$average = $total / 7;

if ($average >= 90) {
    $grade = 'A';
} elseif ($average >= 80) {
    $grade = 'B';
} elseif ($average >= 70) {
    $grade = 'C';
} elseif ($average >= 60) {
    $grade = 'D';
} elseif ($average >= 50) {
    $grade = 'E';
} else {
    $grade = "F";
}

?>

<body>
    <form method="post">
        <h1>Find Grade</h1>
        <input type="number" name="id" placeholder="input id"><br>
        <input type="text" name="name" placeholder="input name"><br>
        <input type="number" name="k" placeholder="input k"><br>
        <input type="number" name="m" placeholder="input m"><br>
        <input type="number" name="p" placeholder="input p"><br>
        <input type="number" name="c" placeholder="input c"><br>
        <input type="number" name="b" placeholder="input b"><br>
        <input type="number" name="h" placeholder="input h"><br>
        <input type="number" name="e" placeholder="input e"><br>

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
                    <td><?= $p ?></td>
                    <td><?= $c ?></td>
                    <td><?= $b ?></td>
                    <td><?= $h ?></td>
                    <td><?= $e ?></td>
                    <td><?= $total ?></td>
                    <td><?= number_format($average, 2) ?></td>
                    <td><?= $grade ?></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td colspan="12" align="center">student not found</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</body>