<?php include_once(ROOT . '/views/layout/header.php'); ?>
<h2 align="center"><?= $departName ?></h2>
<table border="1" align="center">
    <tr>
        <td>Имя</td>
        <td>Фамиия</td>
        <td>Отчество</td>
        <td>День рождения</td>
        <td>Должность</td>
        <td>Тип оплаты</td>
        <td>Зарплата</td>
    </tr>
    <?php foreach ($emplByDepart as $employee): ?>
        <tr>
            <td><?= $employee['name'] ?></td>
            <td><?= $employee['surname'] ?></td>
            <td><?= $employee['patronymic'] ?></td>
            <td><?= $employee['birthday'] ?></td>
            <td><?= $employee['id_posts'] ?></td>
            <td><?= $employee['payment_type'] ?></td>
            <td><?= $employee['salary'] ?></td>
        </tr>
    <?php endforeach; ?>
    Количество сотрудников на страницу
    <form action="" method="post">
        <select name="numberEmployees">
            <option value="20">20</option>
            <option value="40">40</option>
            <option value="60">60</option>
            <option value="80">80</option>
        </select>
        <input type="submit" value="Отправить">
    </form>
</table>
<?php include_once(ROOT . '/views/layout/footer.php'); ?>

