<?php
$back = get_field("questions_img");
if ($back) {
    $image_url = $back;
} else {
    $image_url = get_template_directory_uri() . '/assets/images/questions_img-back.png';
}
?>
<section id="questions" class="questions section" style="background-image: url(<?php echo $image_url; ?>);">
    <div class="wrapper">
        <div class="section__main">
            <div class="questions__main">
                <form class="form">
                    <h3 class="title title-h3">
                        ЕСЛИ У ВАС ЕСТЬ ВОПРОСЫ,<br>
                        МЫ С РАДОСТЬЮ ВАМ ОТВЕТИМ
                    </h3>
                    <div class="text text-md">
                        Напишите Ваш вопрос или предложение в данной форме
                    </div>
                    <div class="form__block">
                        <div class="input">
                            <input type="text" placeholder="Ваше имя">
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Телефон">
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Ваш вопрос">
                        </div>
                    </div>
                    <button class="button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>