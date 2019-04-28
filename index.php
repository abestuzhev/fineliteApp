<?require_once 'template/header.php';?>


    <div class="c-layout">
        <div class="app-entrance">
            <a class="c-form-btn" href="auth.php">Вход</a>
            <a class="c-form-btn" href="reg.php">Регистрация</a>
        </div>

        <div class="application">
            <form action="/include/application.php" name="app" method="POST" class="c-form app-entrance-form">
                <div class="c-form-item">
                    <label for="app-entrance-form__text" class="c-form-label">Покупка</label>
                    <input type="text" id="app-entrance-form__text" name="category" class="c-form-input">
                </div>
                <div class="c-form-item">
                    <label for="app-entrance-form__price" class="c-form-label">Цена</label>
                    <input type="password" id="app-entrance-form__price" name="price" class="c-form-input">
                </div>
                <button class="c-form-btn" name="app-entrance-btn">Занести</button>
            </form>
        </div>
    </div>



<?require_once 'template/footer.php'; ?>