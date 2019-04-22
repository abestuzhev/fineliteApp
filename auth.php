<?require_once 'template/header.php';?>

    <div class="wrapper">
        <div class="app-entrance">
            <a class="c-form-back" href="/">← На главную</a>
            <form action="auh.php" method="POST" class="c-form app-entrance-form">
                <div class="c-form-item">
                    <label for="app-entrance-form__name" class="c-form-label">Логин</label>
                    <input type="text" id="app-entrance-form__name" class="c-form-input">
                </div>
                <div class="c-form-item">
                    <label for="app-entrance-form__pass" class="c-form-label">Пароль</label>
                    <input type="password" id="app-entrance-form__pass" class="c-form-input">
                </div>
                <button class="c-form-btn" name="app-entrance-btn">Войти</button>
            </form>
        </div>
    </div>

<?require_once 'template/footer.php'; ?>