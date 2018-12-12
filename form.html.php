<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <?php if ($userAdded): ?>
        <p>Спасибо за регистрацию!</p>
    <?php else : ?>
        <form action='index.php' method='post'>
            <label>Имя <input type="text" name="name" value="<?=$values['name']?>"></label>
        <?=isset($errors['name'])? $errors['name']:''?><br>
            <label>E-mail <input type="email" name="email"value="<?=$values['email']?>"></label>
                <?=isset($errors['email'])? $errors['email']:''?><br>
            <label>Password <input type="password" name="password">
                <?=isset($errors['password'])? $errors['password']: ''?></label><br>
            <label><input type="checkbox" name="ok" value="1" <?=$values['ok'] ? 'cheked':''?>>
                Подписаться на рассылку
            </label><br>
            <button type="Submit">Зарегистрироваться</button>
        </form>
    <?php endif; ?>
</body>
</html>