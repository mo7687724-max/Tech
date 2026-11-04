<?php
    // $num1 = 100;
    // $num2 = 400;
    // //        !( false     and      false   )    or      false
    // if(!(($num1 >= $num2) && ($num2 != $num2)) or ($num2 == 66)){
    //     echo "Hello";
    // }else{
    //     echo "Hi";
    // }
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = trim($_POST['title']); // remove space of input field
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $description = $_POST['description'];

        $total = $price * $qty;

        if ($total >= 100 and $total < 200) {
            $dis = $total * 0.1;
        } else if ($total >= 200 and $total < 300) {
            $dis = $total * 0.2;
        } else if ($total >= 300 and $total < 400) {
            $dis = $total * 0.3;
        } else if ($total >= 400 and $total < 500) {
            $dis = $total * 0.4;
        } else if ($total >= 500 and $total < 600) {
            $dis = $total * 0.5;
        }else if ($total >= 600 ) {
            $dis = $total * 0.7;
        } else {
            $dis = 0;
        }

        $payment = $total - $dis;
    }

    ?>
    
    <main>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>price</th>
                    <th>qty</th>
                    <th>total</th>
                    <th>discount</th>
                    <th>payment</th>
                    <th>description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td><?= $title ?></td>
                    <td><?= $price ?>$</td>
                    <td><?= $qty ?>$</td>
                    <td><?= $total ?>$</td>
                    <td><?= $dis ?>$</td>
                    <td><?= $payment ?>$</td>
                    <td><?= $description ?></td>
    
                </tr>
            </tbody>
        </table>
    </main>







