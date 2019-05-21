<?php
require('checkpass.php');
const PATH_TO_SQLITE_FILE = "db.sqlite";

$pdo = new \PDO("sqlite:" . PATH_TO_SQLITE_FILE);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM contacts ORDER by created_at desc";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);


echo "<table>";
foreach ($result as $item) : ?>
    <tr>
    <td><?=$item['id']?></td>
    <td><?=htmlspecialchars($item['name'])?></td>
    <td><?=htmlspecialchars($item['email'])?></td>
    <td><?=htmlspecialchars($item['description'])?></td>
    <td><?=htmlspecialchars($item['created_at'])?></td>
    </tr>
<?php endforeach;
