<footer class="footer">
    <div class="wrapper">
        <div class="footer__main">
            <a href="#" class="logo-footer">
                <span>MK5.45</span>
                <span>LOGO</span>
            </a>
            <div class="nav nav-footer">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container' => 'nav',
                    'container_class' => 'main-navigation',
                )); ?>
<!--                    <a href="/about.html" class="nav_item">О нас</a>-->
<!--                    <a href="/delivery.html" class="nav_item">Доставка</a>-->
<!--                    <a href="/payment.html" class="nav_item">Оплата</a>-->
<!--                    <a href="#" class="nav_item">Реквизиты</a>-->
<!--                    <a href="#" class="nav_item">Политика<br>-->
<!--конфиденциальности</a>-->
<!--                    <a href="#" class="nav_item">Возврат/обмен</a>-->
<!--                    <a href="#" class="nav_item">Пошив партий<br>-->
<!--                        на заказ</a>-->
            </div>
        </div>
    </div>
</footer>
<div class="back"></div>