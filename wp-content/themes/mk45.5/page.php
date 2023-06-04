<?php

get_header("", [
    "title" => get_the_title(),
    "back" => false,
]);

?>


    <main>
        <?php
            $desc = get_field("page_desc", get_the_ID());
        ?>
        <section class="section presentation">
            <div class="wrapper">
                <div class="presentation__main section__main">
                    <h1 class="title title-h1"><?php echo get_the_title() ?></h1>
                </div>
            </div>
        </section>
        <section class="text-block section">
            <div class="wrapper">
                <div class="text-block__main">
                    <?php
                        if ($desc) {
                            foreach ($desc["subtitles"] as $subtitle) {
                                if ($subtitle) {
                                    foreach ($subtitle as $p) {
                                        echo '<p class="subtitle subtitle-md">' . $p . '</p>';
                                    }
                                }
                            }
                        } else {
                            echo '<p class="subtitle subtitle-md">Заголовков нет</p>';
                        }
                    ?>
                    <div class="line"></div>
                    <?php
                        if ($desc) {
                            foreach ($desc["subtitles"] as $desc) {
                                if ($desc) {
                                    foreach ($desc as $p) {
                                        echo '<p class="text text-lg">' . $p . '</p>';
                                    }
                                }
                            }
                        } else {
                            echo '<p class="subtitle subtitle-md">Описания нет</p>';
                        }
                    ?>
                </div>
            </div>
        </section>
        <?php
            get_question();
        ?>
    </main>

<?php
get_footer();
