<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заявка на подписку</title>
</head>
<body>

<?php if ($userAdded): ?>
    <p>Спасибо за подписку!</p>

<?php else : ?>
    <form action='Subscribe.php' method='post'>


        <label>E-mail <input type="email" name="email" value="<?=$values['email']?>"></label>
        <?=isset($errors['email'])? $errors['email']:''?><br>


        <button type="Submit">Подписаться на рассылку</button>

    </form>
<?php endif ?>



</body>
</html>