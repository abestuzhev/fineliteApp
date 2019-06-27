<?require_once 'template/header.php';?>


    <div class="c-layout">
        <div class="app-entrance">
            <a class="c-form-btn" href="auth.php">Вход</a>
            <a class="c-form-btn" href="reg.php">Регистрация</a>
        </div>

        <div class="application">
            <form action="/include/application.php" name="app" method="POST" class="c-form app-entrance-form">
                <div class="c-form-item">
                    <div class="c-form-item__title">Категория</div>
                    <label class="c-form-radio-label">
                        <input type="radio" name="category" value="products" class="c-form-radio" checked>
                        Продукты
                    </label>
                    <label class="c-form-radio-label">
                        <input type="radio" name="category" value="transit" class="c-form-radio">
                        Проезд
                    </label>
                    <label class="c-form-radio-label">
                        <input type="radio" name="category" value="cafe" class="c-form-radio">
                        Кафе
                    </label>
                    <label class="c-form-radio-label">
                        <input type="radio" name="category" value="entertainment" class="c-form-radio">
                        Развлечения
                    </label>

                </div>
                <div class="c-form-item">
                    <p>
                        <label for="amount">Сумма покупки:</label>
                        <input type="text" id="amount" name="price"  style="border:0; color:#f6931f; font-weight:bold;">
                    </p>

                    <div id="slider-range-min"></div>
                </div>
                <button class="c-form-btn" name="app-entrance-btn">Занести</button>
            </form>
        </div>
    </div>



<?require_once 'template/footer.php'; ?>