<?php
session_start();
require_once('assets\php\db.php');


if (!isset($_SESSION['user_id'])) { //проверка авторизовался ли пользователь,если нет, то перенаправляет на страничку регистрации/авторизации
    header('Location: reglogPage.php');
    exit();
}

if (isset($_GET['logout']) && $_GET['logout'] == true) {
    unset($_SESSION['user_id']);
    header('Location: reglogPage.php');
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Main Page</title>
    <meta name='viewport' content='width=device-width, user initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\normalize.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\profile.css'>

</head>

<body style="background-image: url(images/bg.jpg) ; background-attachment: fixed; ">

    <?php include 'assets\php\header.php'; ?>

    <div class="wrapper">
        <div class="container">
            <h1>Личный кабинет</h1>
            <div class="profileBlock">
                <div class="leftBlock">
                    <div class="leftBlockText">
                        <div class="leftTopBlock">
                            <p>Заявки</p>
                            <p>Настройки</p>
                        </div>
                        <div class="leftBottomBlock">
                            <p>
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?logout=true">Выйти</a>
                            </p>
                        </div>
                    </div>
                    <div class="leftBlockDevider"></div>
                </div>
                <div class="rightBlock">
                    <?php include 'assets\php\applications_table.php'; ?>
                </div>
            </div>
        </div>

    </div>

    <?php include 'assets\php\footer.php'; ?>
    
</body>

</html>