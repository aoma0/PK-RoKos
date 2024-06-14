<?php
session_start();
require_once('assets\php\db.php');


if (isset($_SESSION['user_id'])) { //проверка не авторизовался ли пользователь уже
    header('Location: profile.php');
    exit();
}

if (isset($_POST['reg'])) {
    $login = $_POST['login'];

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `login` = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Если пользователь с таким логином уже существует, вывести ошибку
        $_SESSION['registration_message'] = 'Логин уже занят!';
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif ($_POST['password'] != $_POST['repeatpassword']) {
        $_SESSION['registration_message'] = 'Пароли не совпадают!';
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        $stmt = $conn->prepare("INSERT INTO `users` (`login`, `password`, `name`, `email`, `phone`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $login, $password, $name, $email, $phone);
        $stmt->execute();

        $user_id = $conn->insert_id; // Get the newly inserted user's ID

        $_SESSION['user_id'] = $user_id;

        header("Location: profile.php");
        exit();
    }
}

if (isset($_POST['loginBtn'])) {
    $login = $_POST['login'];

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE BINARY `login` = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc(); // Fetch the user data
        $hashed_password = $user_data['password'];


        if (password_verify($_POST['password'], $hashed_password)) {
            // Если пароль верен, авторизуем пользователя
            $_SESSION['user_id'] = $user_data['id'];
            header("Location: profile.php");
            exit();
        } else {
            // Если пароль неверен, выдаём ошибку
            $_SESSION['login_message'] = 'Неверный пароль!';
            header("Location: " . $_SERVER['PHP_SELF'] . "?login=1");
            exit();
        }
    } else {
        // Если пользователя с таким логином нет, то выдаём ошибку
        $_SESSION['login_message'] = 'Пользователь с таким логином не найден!';
        header("Location: " . $_SERVER['PHP_SELF'] . "?login=1");
        exit();
    }
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
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\reglogPage.css'>

</head>

<body style="background-image: url(images/bg.jpg) ; background-attachment: fixed; ">

    <?php include 'assets\php\header.php'; ?>

    <div class="wrapper">
        <div class="formsBlock">
            <div id="regForm">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="formaBlock">
                    <h1>Регистрация</h1>
                    <input type="text" name="name" placeholder="имя" required>
                    <input type="text" name="login" placeholder="логин" required>
                    <input type="password" name="password" placeholder="пароль" required>
                    <input type="password" name="repeatpassword" placeholder="повторите пароль" required>
                    <input type="text" name="email" placeholder="e-mail" required>
                    <input type="text" name="phone" placeholder="номер телефона" required>
                    <p class="errorMsg"><?php echo isset($_SESSION['registration_message']) ? $_SESSION['registration_message'] : ''; ?></p>
                    <?php unset($_SESSION['registration_message']); // Очистим сообщение после вывода 
                    ?>
                    <button type="submit" name="reg" class="button">Зарегистрироваться</button>
                </form>
            </div>
            <div id="logForm">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="formaBlock">
                    <h1>Вход</h1>
                    <input type="text" name="login" placeholder="логин" required>
                    <input type="password" name="password" placeholder="пароль" required>
                    <p class="errorMsg"><?php echo isset($_SESSION['login_message']) ? $_SESSION['login_message'] : ''; ?></p>
                    <?php unset($_SESSION['login_message']); // Очистим сообщение после вывода 
                    ?>
                    <button type="submit" name="loginBtn" class="button">Войти</button>

                </form>
            </div>
            <div class="formsBottom">
                <p id="regP">Уже есть аккаунт? <span onclick="toggleView()" class="red">Войти</span></p>
                <p id="logP">Еще нет аккаунта? <span onclick="toggleView()" class="red">Регистрация</span></p>
            </div>
            
        </div>
    </div>
    </div>

    <?php include 'assets\php\footer.php'; ?>
    <script src="assets\js\loginPage.js"></script>
</body>

</html>