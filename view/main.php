<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>Личный кабинет</title>
</head>
<body>
<div>
    <img src="/img/avatars/<?php echo $_SESSION['avatar'] ?>" alt="Нет аватарки">
    <div>
        <form action="/Login/logout" method="post">
            <input type="submit"  value="Покниуть станицу">
        </form>

        <form action="/Main/getPhotoList" method="post">
            <input type="submit"  value="Получить все файлы">
        </form>

        <form action="/Main/getUserList" method="post">
            <input type="submit"  value="Получить список пользователей">
        </form>


        
        <form action="/Main/addUserInfo" method="post">
            <p>
                Логин:
                <input
                        title=""
                        type="text"
                        name="Username"
                        value="<?php echo $_SESSION['username'] ?>"/>
            </p>
            <p>Пароль:
                <input
                        title=""
                        type="text"
                        name="Password"
                        value="<?php echo $_SESSION['password'] ?>" />
            </p>
            <p>
                Имя:
                <input
                        title=""
                        type="text"
                        name="Name"
                        value="<?php echo $_SESSION['name'] ?>" />
            </p>
            <p>
                Возраст:
                <input title=""
                       type="number"
                       name="Age"
                       value="<?php echo $_SESSION['age'] ?>" />
            </p>
            <p>О себе:</p>
            <p>
                <textarea
                        title=""
                        name="About"
                        id=""
                        cols="30"
                        rows="10"
                ><?php echo $_SESSION['about'] ?></textarea>
            </p>
            <input type="submit" name="Login" value="Обновить данные" />
        </form>
        <form action="/Main/delUser" method="post">
            <input type="submit" value="Удалить аккаунт" />

        </form>
        <br /><br />
        <form action="/Main/addAvatar" method="post" enctype="multipart/form-data">
            Выберерте картинку для аватарки:
            <input type="file" name="img" id="img">
            <p><input type="submit" value="Загрузите файл" name="loadimage"></p>
        </form>

        <br /><br />
        <form action="/Main/addPicture" method="post" enctype="multipart/form-data">
            Выберерте картинку для загрузки библиотеку изображений:
            <input type="file" name="img" id="img">
            <p><input type="submit" value="Загрузите файл" name="loadimage"></p>
        </form>
    </div>
</div>
</body>
</html>

