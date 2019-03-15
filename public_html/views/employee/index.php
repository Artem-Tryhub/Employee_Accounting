<html>
<head>
    <title>Employees</title>
</head>
<body>
<h2>Employee list</h2>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Surname</td>
        <td>Patronymic</td>
        <td>Birthday</td>
        <td>Department</td>
        <td>Post</td>
        <td>Payment type</td>
        <td>Salary</td>
    </tr>
    <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?= $employee['name'] ?></td>
            <td><?= $employee['surname'] ?></td>
            <td><?= $employee['patronymic'] ?></td>
            <td><?= $employee['birthday'] ?></td>
            <td><?= $employee['id_departments'] ?></td>
            <td><?= $employee['id_posts'] ?></td>
            <td><?= $employee['payment_type'] ?></td>
            <td><?= $employee['salary'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>