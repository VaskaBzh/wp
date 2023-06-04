<?php
get_header("", [
    "title" => "Главная",
    "back" => false,
]);
?>
    <main>
        <?php
        $hero = get_field("hero_block");
        ?>
        <section class="hero section" style="background-image: url(<?php
        if ($hero) {
            echo $hero["img"];
        } else {
            echo get_template_directory_uri() . '/assets/images/hero_img-back.png';
        }
        ?>)">
            <div class="wrapper">
                <div class="hero__main section__main">
                    <h1 class="title title-h1">
                        <?php if ($hero) {
                            echo $hero["title"];
                        } ?>
                    </h1>
                    <p class="subtitle">
                        <?php if ($hero) {
                            echo $hero["subtitle"];
                        } ?>
                    </p>
                    <a href="/catalog.html" class="button">КАТАЛОГ ТОВАРОВ</a>
                </div>
            </div>
        </section>
        <section class="section popular">
            <div class="wrapper">
                <div class="section__main">
                    <h2 class="title title-h2">САМЫЕ ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
                    <div class="catalog">
                        <div class="product">
                            <div class="product__block product__block-main">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/product_img.png' ?>" alt="product">
                                    <div class="like">
                                        <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.27 1.00001C15.3228 1.00382 14.3913 1.2424 13.5589 1.69438C12.7265 2.14637 12.0191 2.79767 11.5 3.59001C10.8201 2.56838 9.83008 1.79205 8.67581 1.37529C7.52153 0.958527 6.26395 0.923362 5.08819 1.27497C3.91243 1.62658 2.88062 2.34638 2.14465 3.32841C1.40868 4.31045 1.00744 5.50282 1 6.73001C1 15.32 11.5 19.09 11.5 19.09C11.5 19.09 22 15.32 22 6.73001C22.0013 5.97716 21.854 5.23147 21.5665 4.53568C21.279 3.83988 20.857 3.20769 20.3247 2.67535C19.7923 2.14301 19.1601 1.72099 18.4643 1.4335C17.7685 1.146 17.0228 0.998691 16.27 1.00001Z" stroke-width="1.91" stroke-miterlimit="10"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="subtitle subtitle-md">НАИМЕНОВАНИЕ ПОЗИЦИИ ЦВЕТ “НАЗВАНИЕ ПОЗИЦИИ”</p>
                            </div>
                            <div class="product__block">
                                <p class="product_price">
                                    1 990 р.   <span>2200 р.</span>
                                </p>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="/product.html" class="button">ПОДРОБНЕЕ О ТОВАРЕ</a>
                                <div class="product__block product__block-buy">
                                    <div class="input input-number">
                                        <span class="minus">-</span>
                                        <input type="text" value="1" placeholder="1">
                                        <span class="plus">+</span>
                                    </div>
                                    <button class="button button-reverce">КУПИТЬ</button>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__block product__block-main">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/product_img.png' ?>" alt="product">
                                    <div class="like">
                                        <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.27 1.00001C15.3228 1.00382 14.3913 1.2424 13.5589 1.69438C12.7265 2.14637 12.0191 2.79767 11.5 3.59001C10.8201 2.56838 9.83008 1.79205 8.67581 1.37529C7.52153 0.958527 6.26395 0.923362 5.08819 1.27497C3.91243 1.62658 2.88062 2.34638 2.14465 3.32841C1.40868 4.31045 1.00744 5.50282 1 6.73001C1 15.32 11.5 19.09 11.5 19.09C11.5 19.09 22 15.32 22 6.73001C22.0013 5.97716 21.854 5.23147 21.5665 4.53568C21.279 3.83988 20.857 3.20769 20.3247 2.67535C19.7923 2.14301 19.1601 1.72099 18.4643 1.4335C17.7685 1.146 17.0228 0.998691 16.27 1.00001Z" stroke-width="1.91" stroke-miterlimit="10"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="subtitle subtitle-md">НАИМЕНОВАНИЕ ПОЗИЦИИ ЦВЕТ “НАЗВАНИЕ ПОЗИЦИИ”</p>
                            </div>
                            <div class="product__block">
                                <p class="product_price">
                                    1 990 р.   <span>2200 р.</span>
                                </p>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="/product.html" class="button">ПОДРОБНЕЕ О ТОВАРЕ</a>
                                <div class="product__block product__block-buy">
                                    <div class="input input-number">
                                        <span class="minus">-</span>
                                        <input type="text" value="1" placeholder="1">
                                        <span class="plus">+</span>
                                    </div>
                                    <button class="button button-reverce">КУПИТЬ</button>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__block product__block-main">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/product_img.png' ?>" alt="product">
                                    <div class="like">
                                        <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.27 1.00001C15.3228 1.00382 14.3913 1.2424 13.5589 1.69438C12.7265 2.14637 12.0191 2.79767 11.5 3.59001C10.8201 2.56838 9.83008 1.79205 8.67581 1.37529C7.52153 0.958527 6.26395 0.923362 5.08819 1.27497C3.91243 1.62658 2.88062 2.34638 2.14465 3.32841C1.40868 4.31045 1.00744 5.50282 1 6.73001C1 15.32 11.5 19.09 11.5 19.09C11.5 19.09 22 15.32 22 6.73001C22.0013 5.97716 21.854 5.23147 21.5665 4.53568C21.279 3.83988 20.857 3.20769 20.3247 2.67535C19.7923 2.14301 19.1601 1.72099 18.4643 1.4335C17.7685 1.146 17.0228 0.998691 16.27 1.00001Z" stroke-width="1.91" stroke-miterlimit="10"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="subtitle subtitle-md">НАИМЕНОВАНИЕ ПОЗИЦИИ ЦВЕТ “НАЗВАНИЕ ПОЗИЦИИ”</p>
                            </div>
                            <div class="product__block">
                                <p class="product_price">
                                    1 990 р.   <span>2200 р.</span>
                                </p>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="/product.html" class="button">ПОДРОБНЕЕ О ТОВАРЕ</a>
                                <div class="product__block product__block-buy">
                                    <div class="input input-number">
                                        <span class="minus">-</span>
                                        <input type="text" value="1" placeholder="1">
                                        <span class="plus">+</span>
                                    </div>
                                    <button class="button button-reverce">КУПИТЬ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about section">
            <div class="wrapper">
                <div class="section__main about__main">
                    <h2 class="title title-h2">
                        MK5.45 - это:
                    </h2>
                    <?php $mk_desc = get_field("mk_desc"); ?>
                    <div class="list">
                        <div class="list__column">
                            <?php for ($i = 0; $i < count($mk_desc); $i += 2): ?>
                                <div class="list_item">
                                    <span class="number"><?php echo $i + 1; ?></span>
                                    <?php echo $mk_desc[$i]['text']; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="list__column">
                            <?php for ($i = 1; $i < count($mk_desc); $i += 2): ?>
                                <div class="list_item">
                                    <span class="number"><?php echo $i + 1; ?></span>
                                    <?php echo $mk_desc[$i]['text']; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        get_question();
        ?>
    </main>
<?php
get_footer();
?>