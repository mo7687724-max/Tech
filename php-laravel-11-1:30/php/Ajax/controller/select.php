<?php 
    require_once '../config/db.php';

    $posts = $conn->query('SELECT * FROM posts  ORDER BY id DESC');

?>

<?php while ($row = $posts->fetch_assoc()):?>
    <tr>
        <td><?= $row['id'] ?></td>
        <th><?= $row['title'] ?></th>
        <th><?= $row['command'] ?></th>
        <th>
            <img src="<?= $row['image'] ?>" alt="<?= $row['title'] ?>" width="100px">
        </th>
        <th>
            <button onclick="viewPost(<?= $row['id'] ?>)">view</button>
            <button onclick="editPost(<?= $row['id'] ?>)">edit</button>
            <button onclick="deletePost(<?= $row['id'] ?>)">delete</button>
        </th>
    </tr>
<?php endwhile ?>