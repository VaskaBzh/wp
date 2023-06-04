<section id="questions" class="questions section" style="background-image: url(<?php
    if (get_field('questions_img', 79)) {
            echo get_field('questions_img',  79);
    } else {
        echo get_template_directory_uri() . '/assets/images/questions_img-back.png';
    } ?>)">
    <div class="wrapper">
        <div class="section__main">
            <div class="questions__main">
                <form class="form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <h3 class="title title-h3">
                        ЕСЛИ У ВАС ЕСТЬ ВОПРОСЫ,<br>
                        МЫ С РАДОСТЬЮ ВАМ ОТВЕТИМ
                    </h3>
                    <div class="text text-md">
                        Напишите Ваш вопрос или предложение в данной форме
                    </div>
                    <div class="form__block">
                        <div class="input">
                            <input type="text" name="user_name" placeholder="Ваше имя">
                        </div>
                        <div class="input">
                            <input type="tel" name="user_phone" placeholder="Телефон">
                        </div>
                        <div class="input">
                            <textarea name="user_question" placeholder="Ваш вопрос"></textarea>
                        </div>
                        <input type="hidden" name="action" value="submit_question_form">
                        <input type="hidden" name="redirect_url" value="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                        <?php wp_nonce_field('submit_question_form', 'question_form_nonce'); ?>
                    </div>
                    <button type="submit" class="button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>