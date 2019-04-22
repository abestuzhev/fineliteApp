<?require_once 'template/header.php';?>

<?php

$form = $_POST;
if(isset($form['app-entrance-btn'])){


    if(isset($form['name'])){

    }else{

    }
}
?>

    <div class="wrapper">
        <div class="app-reg">
            <a class="c-form-back" href="/">← На главную</a>
            <form action="reg.php" method="POST" class="c-form app-reg-form">
                <div class="c-form-item">
                    <label for="app-entrance-form__name" class="c-form-label">Логин</label>
                    <input type="text" name="name" id="app-entrance-form__name" class="c-form-input" value="<?=$form['name']?>">
                </div>
                <div class="c-form-item">
                    <label for="app-entrance-form__email" class="c-form-label">Email</label>
                    <input type="text" name="email" id="app-entrance-form__email" class="c-form-input" value="<?=$form['email']?>">
                </div>
                <div class="c-form-item">
                    <label for="app-entrance-form__pass" class="c-form-label">Пароль</label>
                    <input type="password" name="password"id="app-entrance-form__pass" class="c-form-input">
                </div>
                <div class="c-form-item">
                    <label for="app-entrance-form__pass2" class="c-form-label">Повторить пароль</label>
                    <input type="password" id="app-entrance-form__pass2" class="c-form-input">
                </div>
                <button class="c-form-btn" name="app-entrance-btn">Зарегистрироваться</button>
            </form>
        </div>

        <div>
            <div>логин: <?=$form['name']?></div>
            <div>email: <?=$form['email']?></div>
            <div>пароль: <?=$form['password']?></div>
        </div>
    </div>

<?require_once 'template/footer.php'; ?>