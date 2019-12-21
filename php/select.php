<?php
/*
 *Select all data from table
*/
require_once '../includes/dbconnect.php';
$data = R::findAll('country');
?>

<link rel="stylesheet" href="../css/style.css">

<div class="select__block">
    <table class="select__block__table">
        <tr><th>ID</th><th>Country</th><th>Capital</th></tr>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?=htmlspecialchars($item['id']) ?></td>
                <td><?=htmlspecialchars($item['country_name']) ?></td>
                <td><?=htmlspecialchars($item['country_capital']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

