
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Клиенты</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Email</th>
            <th>Пароль</th>
            <th>Подписка</th>
        </tr>

        <?php foreach ($arr as $data){ ?>
                <tr>
                    <td><?php echo $data[0] ?></td>
                    <td><?php echo $data[1] ?></td>
                    <td><?php echo $data[2] ?></td>
                    <td><?php echo $data[3] ?></td>
                </tr>
            <?php } ?>
    </table>

</body>
</html>