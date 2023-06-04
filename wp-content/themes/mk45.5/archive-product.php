<?php
get_header("", [
    "title" => woocommerce_page_title(false),
    "back" => false,
]);
?>

    <section class="catalog_page section">
        <div class="wrapper">
            <div class="catalog_page__main section__main">
                <h1 class="title title-h1 title-margin">КАТАЛОГ ТОВАРОВ</h1>
                <div class="catalog_page__block">
                    <div class="search">
                        <svg class="burger" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 3C2.67157 3 2 3.67157 2 4.5C2 5.32843 2.67157 6 3.5 6C4.32843 6 5 5.32843 5 4.5C5 3.67157 4.32843 3 3.5 3ZM3.5 10C2.67157 10 2 10.6716 2 11.5C2 12.3284 2.67157 13 3.5 13C4.32843 13 5 12.3284 5 11.5C5 10.6716 4.32843 10 3.5 10ZM2 18.5C2 17.6716 2.67157 17 3.5 17C4.32843 17 5 17.6716 5 18.5C5 19.3284 4.32843 20 3.5 20C2.67157 20 2 19.3284 2 18.5ZM8.5 3C7.67157 3 7 3.67157 7 4.5C7 5.32843 7.67157 6 8.5 6H20.5C21.3284 6 22 5.32843 22 4.5C22 3.67157 21.3284 3 20.5 3H8.5ZM7 11.5C7 10.6716 7.67157 10 8.5 10H20.5C21.3284 10 22 10.6716 22 11.5C22 12.3284 21.3284 13 20.5 13H8.5C7.67157 13 7 12.3284 7 11.5ZM8.5 17C7.67157 17 7 17.6716 7 18.5C7 19.3284 7.67157 20 8.5 20H20.5C21.3284 20 22 19.3284 22 18.5C22 17.6716 21.3284 17 20.5 17H8.5Z" fill="black"/>
                        </svg>
                        <div class="input">
                            <input type="text" placeholder="Поиск">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.61667 13.9833C11.1329 13.9833 13.9833 11.1329 13.9833 7.61667C13.9833 4.10045 11.1329 1.25 7.61667 1.25C4.10045 1.25 1.25 4.10045 1.25 7.61667C1.25 11.1329 4.10045 13.9833 7.61667 13.9833Z" stroke="#929292" stroke-width="1.91" stroke-miterlimit="10"/>
                                <path d="M18 18L12 12" stroke="#929292" stroke-width="1.91" stroke-miterlimit="10"/>
                            </svg>
                        </div>
                        <select class="select">
                            <option value="all" selected>По умолчанию</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="catalog_page__row">
                        <!--                        @@include('html/filter.html', {})-->
                        <div class="catalog">
                            <?php $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1
                            );
                            $loop = new WP_Query( $args );
                            if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) : $loop->the_post();
                            wc_get_template_part( 'content', 'product' );
                            endwhile;
                            } else {
                            echo __( 'No products found' );
                            }
                            wp_reset_postdata(); ?>
                            <div class="product product-full">
                                <div class="product__block product__block-main">
                                    <div class="img">
                                        <img src="@img/product_img.png" alt="product">
                                        <div class="like">
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.27 1.00001C15.3228 1.00382 14.3913 1.2424 13.5589 1.69438C12.7265 2.14637 12.0191 2.79767 11.5 3.59001C10.8201 2.56838 9.83008 1.79205 8.67581 1.37529C7.52153 0.958527 6.26395 0.923362 5.08819 1.27497C3.91243 1.62658 2.88062 2.34638 2.14465 3.32841C1.40868 4.31045 1.00744 5.50282 1 6.73001C1 15.32 11.5 19.09 11.5 19.09C11.5 19.09 22 15.32 22 6.73001C22.0013 5.97716 21.854 5.23147 21.5665 4.53568C21.279 3.83988 20.857 3.20769 20.3247 2.67535C19.7923 2.14301 19.1601 1.72099 18.4643 1.4335C17.7685 1.146 17.0228 0.998691 16.27 1.00001Z" stroke-width="1.91" stroke-miterlimit="10"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="subtitle subtitle-md">НАИМЕНОВАНИЕ ПОЗИЦИИ ЦВЕТ “НАЗВАНИЕ ПОЗИЦИИ”</p>
                                    <div class="product_article">Артикул: ХХ123456789</div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                                <p class="product_price">
                                    1 990 р.   <span>2200 р.</span>
                                </p>
                                <div class="product__select">
                                    <span class="text">Рзамер</span>
                                    <select class="select">
                                        <option selected value="L (48)">L (48)</option>
                                        <option selected value="L (481)">L (481)</option>
                                        <option selected value="L (4812)">L (4812)</option>
                                        <option selected value="L (48123)">L (48123)</option>
                                    </select>
                                </div>
                                <div class="product__block">
                                    <a href="/product.html" class="button">ПОДРОБНЕЕ О ТОВАРЕ</a>
                                    <div class="product__block product__block-buy">
                                        <div class="input input-number">
                                            <span>-</span>
                                            <input type="text" value="1" placeholder="1">
                                            <span>+</span>
                                        </div>
                                        <button class="button button-reverce">КУПИТЬ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main>
        <?php woocommerce_product_loop_start(); ?>

        <?php if ( wc_get_loop_prop( 'total' ) ) { ?>
            <?php while ( have_posts() ) { ?>
                <?php the_post(); ?>
                <?php wc_get_template_part( 'content', 'product' ); ?>
            <?php } ?>
        <?php } ?>

        <?php woocommerce_product_loop_end(); ?>
    </main>

<?php get_footer(); ?>