<?php $back = $args["back"];?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css' ?>">
    <title> <?php echo $args["title"];?></title>
</head>
<header class="header">
    <div class="wrapper">
        <div class="header__main">
            <div class="header__content">
                <a href="/" class="logo">MK5.45 | LOGO</a>
                <div class="header__block">
                    <div class="contacts">
                        <div class="contacts__block">
                            <a href="#" class="contacts_item">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9268 3.0625C15.9512 1.09375 13.3171 0 10.5366 0C4.7561 0 0.0731696 4.66667 0.0731696 10.4271C0.0731696 12.25 0.585366 14.0729 1.46341 15.6042L0 21L5.56098 19.5417C7.09756 20.3438 8.78049 20.7812 10.5366 20.7812C16.3171 20.7812 21 16.1146 21 10.3542C20.9268 7.65625 19.9024 5.03125 17.9268 3.0625ZM15.5854 14.1458C15.3659 14.7292 14.3415 15.3125 13.8293 15.3854C13.3902 15.4583 12.8049 15.4583 12.2195 15.3125C11.8537 15.1667 11.3415 15.0208 10.7561 14.7292C8.12195 13.6354 6.43903 11.0104 6.29268 10.7917C6.14634 10.6458 5.19512 9.40625 5.19512 8.09375C5.19512 6.78125 5.85366 6.19792 6.07317 5.90625C6.29268 5.61458 6.58536 5.61458 6.80488 5.61458C6.95122 5.61458 7.17073 5.61458 7.31707 5.61458C7.46341 5.61458 7.68293 5.54167 7.90244 6.05208C8.12195 6.5625 8.63414 7.875 8.70731 7.94792C8.78049 8.09375 8.78049 8.23958 8.70731 8.38542C8.63414 8.53125 8.56097 8.67708 8.41463 8.82292C8.26829 8.96875 8.12195 9.1875 8.04878 9.26042C7.90244 9.40625 7.7561 9.55208 7.90244 9.77083C8.04878 10.0625 8.56097 10.8646 9.36585 11.5937C10.3902 12.4687 11.1951 12.7604 11.4878 12.9063C11.7805 13.0521 11.9268 12.9792 12.0732 12.8333C12.2195 12.6875 12.7317 12.1042 12.878 11.8125C13.0244 11.5208 13.2439 11.5938 13.4634 11.6667C13.6829 11.7396 15 12.3958 15.2195 12.5417C15.5122 12.6875 15.6585 12.7604 15.7317 12.8333C15.8049 13.0521 15.8049 13.5625 15.5854 14.1458Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="#" class="contacts_item">
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.350701 8.37408L4.9488 10.0886L6.74126 15.8557C6.8192 16.2454 7.2868 16.3233 7.59854 16.0895L10.1703 13.9853C10.4041 13.7515 10.7938 13.7515 11.1055 13.9853L15.7036 17.3364C16.0154 17.5702 16.483 17.4144 16.5609 17.0247L19.99 0.658656C20.0679 0.268988 19.6782 -0.120677 19.2886 0.0351906L0.350701 7.36095C-0.1169 7.51681 -0.1169 8.21821 0.350701 8.37408ZM6.50747 9.23135L15.5477 3.69807C15.7036 3.62013 15.8595 3.85394 15.7036 3.93187L8.29993 10.868C8.06613 11.1018 7.83233 11.4135 7.83233 11.8032L7.59854 13.6736C7.59854 13.9074 7.20886 13.9853 7.13093 13.6736L6.19572 10.2445C5.96192 9.85482 6.1178 9.38722 6.50747 9.23135Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="#" class="contacts_item">
                                <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.806 11.1153C20.806 11.0322 20.723 11.0322 20.723 10.9492C20.3909 10.285 19.6437 9.4548 18.6474 8.54155C18.1493 8.12644 17.9002 7.79434 17.7342 7.62829C17.4851 7.2962 17.4851 7.04714 17.5681 6.71505C17.6512 6.46598 17.9832 6.05086 18.5644 5.30365C18.8965 4.88853 19.0625 4.63947 19.3116 4.3904C20.5569 2.72995 21.1381 1.65064 20.972 1.1525L20.889 1.06949C20.806 0.986464 20.723 0.903444 20.5569 0.903444C20.3909 0.820421 20.1418 0.820421 19.8928 0.903444H16.7379C16.6549 0.903444 16.6549 0.903444 16.4888 0.903444C16.4058 0.903444 16.3228 0.903444 16.3228 0.903444H16.2398H16.1567L16.0737 0.986459C15.9907 1.06948 15.9907 1.06948 15.9907 1.1525C15.6586 2.06575 15.2435 2.81296 14.8284 3.64319C14.5793 4.0583 14.3302 4.47343 14.0812 4.80552C13.8321 5.13761 13.666 5.38667 13.5 5.55272C13.3339 5.71877 13.1679 5.80179 13.0849 5.96783C13.0018 6.05086 12.8358 6.13389 12.8358 6.05086C12.7528 6.05086 12.6698 6.05086 12.6698 5.96783C12.5867 5.88481 12.5037 5.80179 12.4207 5.71876C12.3377 5.63574 12.3377 5.46969 12.2546 5.30365C12.2546 5.1376 12.2546 4.97156 12.2546 4.88853C12.2546 4.80551 12.2546 4.55645 12.2546 4.3904C12.2546 4.14134 12.2546 3.97528 12.2546 3.89226C12.2546 3.64319 12.2546 3.31111 12.2546 2.97902C12.2546 2.64693 12.2546 2.39785 12.2546 2.2318C12.2546 2.06576 12.2546 1.81669 12.2546 1.65065C12.2546 1.40158 12.2546 1.23553 12.2546 1.1525C12.2546 1.06948 12.1716 0.903439 12.1716 0.820416C12.0886 0.737393 12.0056 0.654367 11.9226 0.571344C11.8395 0.488322 11.6735 0.488324 11.5905 0.405301C11.1754 0.322278 10.6772 0.239258 10.0961 0.239258C8.7677 0.239258 7.85444 0.322283 7.52235 0.488329C7.3563 0.571352 7.19026 0.65437 7.10723 0.820416C6.94119 0.986462 6.94118 1.06949 7.02421 1.06949C7.43932 1.15251 7.77142 1.31855 7.93746 1.56762L8.02049 1.73367C8.10351 1.8167 8.1035 1.98273 8.18652 2.2318C8.26955 2.48087 8.26955 2.72994 8.26955 3.06203C8.26955 3.56017 8.26955 4.05831 8.26955 4.3904C8.26955 4.80552 8.18652 5.05458 8.18652 5.30365C8.18652 5.55272 8.10351 5.71877 8.02049 5.80179C7.93747 5.96784 7.93746 6.05086 7.85444 6.05086C7.85444 6.05086 7.85443 6.13388 7.77141 6.13388C7.68838 6.13388 7.60537 6.21691 7.43932 6.21691C7.3563 6.21691 7.19026 6.13389 7.10723 6.05086C6.94119 5.96784 6.77514 5.80179 6.69212 5.63575C6.52607 5.4697 6.36002 5.22063 6.19398 4.88853C6.02793 4.55644 5.77885 4.22436 5.61281 3.72622L5.44678 3.39413C5.36375 3.22809 5.19771 2.89599 5.03166 2.48087C4.86562 2.06576 4.69956 1.73367 4.53352 1.31856C4.4505 1.15251 4.36748 1.06948 4.28446 0.986459H4.20143C4.20143 0.986459 4.1184 0.903444 4.03538 0.903444C3.95235 0.903444 3.86934 0.820416 3.78632 0.820416H0.797487C0.465395 0.820416 0.299352 0.903436 0.216329 0.986459L0.133301 1.06949C0.133301 1.06949 0.133301 1.15251 0.133301 1.23553C0.133301 1.31855 0.133306 1.40157 0.216329 1.56762C0.631443 2.56389 1.12958 3.56017 1.62772 4.55645C2.12585 5.4697 2.624 6.29993 2.95609 6.88109C3.3712 7.46225 3.70329 8.04341 4.1184 8.54155C4.53352 9.03969 4.78258 9.37178 4.86561 9.53782C5.03165 9.70387 5.11467 9.78689 5.19769 9.86991L5.44678 10.119C5.61282 10.285 5.86189 10.5341 6.19398 10.7832C6.52607 11.0322 6.94118 11.2813 7.35629 11.5304C7.77141 11.7794 8.26956 11.9455 8.76769 12.1115C9.34885 12.2776 9.84699 12.3606 10.3451 12.2776H11.5905C11.8395 12.2776 12.0056 12.1946 12.1716 12.0285L12.2546 11.9455C12.2546 11.8625 12.3377 11.8625 12.3377 11.7794C12.3377 11.6964 12.3377 11.6134 12.3377 11.4474C12.3377 11.1153 12.3377 10.8662 12.4207 10.6171C12.5037 10.3681 12.5037 10.202 12.5868 10.036C12.6698 9.86992 12.7528 9.78689 12.8358 9.70387C12.9188 9.62084 13.0019 9.53782 13.0019 9.53782H13.0849C13.2509 9.4548 13.5 9.53782 13.666 9.70387C13.9151 9.86991 14.1642 10.119 14.3302 10.3681C14.4963 10.6171 14.7453 10.8662 15.0774 11.1983C15.4095 11.5304 15.6586 11.7794 15.8246 11.8625L16.0737 12.0285C16.2397 12.1115 16.4058 12.1946 16.6549 12.2776C16.9039 12.3606 17.07 12.3606 17.236 12.3606L20.0588 12.2776C20.3079 12.2776 20.5569 12.1946 20.723 12.1115C20.889 12.0285 20.972 11.9455 20.972 11.7794C20.972 11.6964 20.972 11.5304 20.972 11.4474C20.806 11.2813 20.806 11.1983 20.806 11.1153Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <a href="#" class="contacts_phone">8-911-111-11-11</a>
                    </div>
                    <a href="#questions" class="button">
                        ПОЛУЧИТЬ ОТВЕТ
                    </a>
                    <svg class="burger" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 3C2.67157 3 2 3.67157 2 4.5C2 5.32843 2.67157 6 3.5 6C4.32843 6 5 5.32843 5 4.5C5 3.67157 4.32843 3 3.5 3ZM3.5 10C2.67157 10 2 10.6716 2 11.5C2 12.3284 2.67157 13 3.5 13C4.32843 13 5 12.3284 5 11.5C5 10.6716 4.32843 10 3.5 10ZM2 18.5C2 17.6716 2.67157 17 3.5 17C4.32843 17 5 17.6716 5 18.5C5 19.3284 4.32843 20 3.5 20C2.67157 20 2 19.3284 2 18.5ZM8.5 3C7.67157 3 7 3.67157 7 4.5C7 5.32843 7.67157 6 8.5 6H20.5C21.3284 6 22 5.32843 22 4.5C22 3.67157 21.3284 3 20.5 3H8.5ZM7 11.5C7 10.6716 7.67157 10 8.5 10H20.5C21.3284 10 22 10.6716 22 11.5C22 12.3284 21.3284 13 20.5 13H8.5C7.67157 13 7 12.3284 7 11.5ZM8.5 17C7.67157 17 7 17.6716 7 18.5C7 19.3284 7.67157 20 8.5 20H20.5C21.3284 20 22 19.3284 22 18.5C22 17.6716 21.3284 17 20.5 17H8.5Z" fill="black"/>
                    </svg>
                </div>
            </div>
            <div class="header__content">
                <div class="nav">
                    <a href="#questions"  class="button">
                        ПОЛУЧИТЬ ОТВЕТ
                    </a>
                    <div class="contacts">
                        <div class="contacts__block">
                            <a href="#" class="contacts_item">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9268 3.0625C15.9512 1.09375 13.3171 0 10.5366 0C4.7561 0 0.0731696 4.66667 0.0731696 10.4271C0.0731696 12.25 0.585366 14.0729 1.46341 15.6042L0 21L5.56098 19.5417C7.09756 20.3438 8.78049 20.7812 10.5366 20.7812C16.3171 20.7812 21 16.1146 21 10.3542C20.9268 7.65625 19.9024 5.03125 17.9268 3.0625ZM15.5854 14.1458C15.3659 14.7292 14.3415 15.3125 13.8293 15.3854C13.3902 15.4583 12.8049 15.4583 12.2195 15.3125C11.8537 15.1667 11.3415 15.0208 10.7561 14.7292C8.12195 13.6354 6.43903 11.0104 6.29268 10.7917C6.14634 10.6458 5.19512 9.40625 5.19512 8.09375C5.19512 6.78125 5.85366 6.19792 6.07317 5.90625C6.29268 5.61458 6.58536 5.61458 6.80488 5.61458C6.95122 5.61458 7.17073 5.61458 7.31707 5.61458C7.46341 5.61458 7.68293 5.54167 7.90244 6.05208C8.12195 6.5625 8.63414 7.875 8.70731 7.94792C8.78049 8.09375 8.78049 8.23958 8.70731 8.38542C8.63414 8.53125 8.56097 8.67708 8.41463 8.82292C8.26829 8.96875 8.12195 9.1875 8.04878 9.26042C7.90244 9.40625 7.7561 9.55208 7.90244 9.77083C8.04878 10.0625 8.56097 10.8646 9.36585 11.5937C10.3902 12.4687 11.1951 12.7604 11.4878 12.9063C11.7805 13.0521 11.9268 12.9792 12.0732 12.8333C12.2195 12.6875 12.7317 12.1042 12.878 11.8125C13.0244 11.5208 13.2439 11.5938 13.4634 11.6667C13.6829 11.7396 15 12.3958 15.2195 12.5417C15.5122 12.6875 15.6585 12.7604 15.7317 12.8333C15.8049 13.0521 15.8049 13.5625 15.5854 14.1458Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="#" class="contacts_item">
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.350701 8.37408L4.9488 10.0886L6.74126 15.8557C6.8192 16.2454 7.2868 16.3233 7.59854 16.0895L10.1703 13.9853C10.4041 13.7515 10.7938 13.7515 11.1055 13.9853L15.7036 17.3364C16.0154 17.5702 16.483 17.4144 16.5609 17.0247L19.99 0.658656C20.0679 0.268988 19.6782 -0.120677 19.2886 0.0351906L0.350701 7.36095C-0.1169 7.51681 -0.1169 8.21821 0.350701 8.37408ZM6.50747 9.23135L15.5477 3.69807C15.7036 3.62013 15.8595 3.85394 15.7036 3.93187L8.29993 10.868C8.06613 11.1018 7.83233 11.4135 7.83233 11.8032L7.59854 13.6736C7.59854 13.9074 7.20886 13.9853 7.13093 13.6736L6.19572 10.2445C5.96192 9.85482 6.1178 9.38722 6.50747 9.23135Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="#" class="contacts_item">
                                <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.806 11.1153C20.806 11.0322 20.723 11.0322 20.723 10.9492C20.3909 10.285 19.6437 9.4548 18.6474 8.54155C18.1493 8.12644 17.9002 7.79434 17.7342 7.62829C17.4851 7.2962 17.4851 7.04714 17.5681 6.71505C17.6512 6.46598 17.9832 6.05086 18.5644 5.30365C18.8965 4.88853 19.0625 4.63947 19.3116 4.3904C20.5569 2.72995 21.1381 1.65064 20.972 1.1525L20.889 1.06949C20.806 0.986464 20.723 0.903444 20.5569 0.903444C20.3909 0.820421 20.1418 0.820421 19.8928 0.903444H16.7379C16.6549 0.903444 16.6549 0.903444 16.4888 0.903444C16.4058 0.903444 16.3228 0.903444 16.3228 0.903444H16.2398H16.1567L16.0737 0.986459C15.9907 1.06948 15.9907 1.06948 15.9907 1.1525C15.6586 2.06575 15.2435 2.81296 14.8284 3.64319C14.5793 4.0583 14.3302 4.47343 14.0812 4.80552C13.8321 5.13761 13.666 5.38667 13.5 5.55272C13.3339 5.71877 13.1679 5.80179 13.0849 5.96783C13.0018 6.05086 12.8358 6.13389 12.8358 6.05086C12.7528 6.05086 12.6698 6.05086 12.6698 5.96783C12.5867 5.88481 12.5037 5.80179 12.4207 5.71876C12.3377 5.63574 12.3377 5.46969 12.2546 5.30365C12.2546 5.1376 12.2546 4.97156 12.2546 4.88853C12.2546 4.80551 12.2546 4.55645 12.2546 4.3904C12.2546 4.14134 12.2546 3.97528 12.2546 3.89226C12.2546 3.64319 12.2546 3.31111 12.2546 2.97902C12.2546 2.64693 12.2546 2.39785 12.2546 2.2318C12.2546 2.06576 12.2546 1.81669 12.2546 1.65065C12.2546 1.40158 12.2546 1.23553 12.2546 1.1525C12.2546 1.06948 12.1716 0.903439 12.1716 0.820416C12.0886 0.737393 12.0056 0.654367 11.9226 0.571344C11.8395 0.488322 11.6735 0.488324 11.5905 0.405301C11.1754 0.322278 10.6772 0.239258 10.0961 0.239258C8.7677 0.239258 7.85444 0.322283 7.52235 0.488329C7.3563 0.571352 7.19026 0.65437 7.10723 0.820416C6.94119 0.986462 6.94118 1.06949 7.02421 1.06949C7.43932 1.15251 7.77142 1.31855 7.93746 1.56762L8.02049 1.73367C8.10351 1.8167 8.1035 1.98273 8.18652 2.2318C8.26955 2.48087 8.26955 2.72994 8.26955 3.06203C8.26955 3.56017 8.26955 4.05831 8.26955 4.3904C8.26955 4.80552 8.18652 5.05458 8.18652 5.30365C8.18652 5.55272 8.10351 5.71877 8.02049 5.80179C7.93747 5.96784 7.93746 6.05086 7.85444 6.05086C7.85444 6.05086 7.85443 6.13388 7.77141 6.13388C7.68838 6.13388 7.60537 6.21691 7.43932 6.21691C7.3563 6.21691 7.19026 6.13389 7.10723 6.05086C6.94119 5.96784 6.77514 5.80179 6.69212 5.63575C6.52607 5.4697 6.36002 5.22063 6.19398 4.88853C6.02793 4.55644 5.77885 4.22436 5.61281 3.72622L5.44678 3.39413C5.36375 3.22809 5.19771 2.89599 5.03166 2.48087C4.86562 2.06576 4.69956 1.73367 4.53352 1.31856C4.4505 1.15251 4.36748 1.06948 4.28446 0.986459H4.20143C4.20143 0.986459 4.1184 0.903444 4.03538 0.903444C3.95235 0.903444 3.86934 0.820416 3.78632 0.820416H0.797487C0.465395 0.820416 0.299352 0.903436 0.216329 0.986459L0.133301 1.06949C0.133301 1.06949 0.133301 1.15251 0.133301 1.23553C0.133301 1.31855 0.133306 1.40157 0.216329 1.56762C0.631443 2.56389 1.12958 3.56017 1.62772 4.55645C2.12585 5.4697 2.624 6.29993 2.95609 6.88109C3.3712 7.46225 3.70329 8.04341 4.1184 8.54155C4.53352 9.03969 4.78258 9.37178 4.86561 9.53782C5.03165 9.70387 5.11467 9.78689 5.19769 9.86991L5.44678 10.119C5.61282 10.285 5.86189 10.5341 6.19398 10.7832C6.52607 11.0322 6.94118 11.2813 7.35629 11.5304C7.77141 11.7794 8.26956 11.9455 8.76769 12.1115C9.34885 12.2776 9.84699 12.3606 10.3451 12.2776H11.5905C11.8395 12.2776 12.0056 12.1946 12.1716 12.0285L12.2546 11.9455C12.2546 11.8625 12.3377 11.8625 12.3377 11.7794C12.3377 11.6964 12.3377 11.6134 12.3377 11.4474C12.3377 11.1153 12.3377 10.8662 12.4207 10.6171C12.5037 10.3681 12.5037 10.202 12.5868 10.036C12.6698 9.86992 12.7528 9.78689 12.8358 9.70387C12.9188 9.62084 13.0019 9.53782 13.0019 9.53782H13.0849C13.2509 9.4548 13.5 9.53782 13.666 9.70387C13.9151 9.86991 14.1642 10.119 14.3302 10.3681C14.4963 10.6171 14.7453 10.8662 15.0774 11.1983C15.4095 11.5304 15.6586 11.7794 15.8246 11.8625L16.0737 12.0285C16.2397 12.1115 16.4058 12.1946 16.6549 12.2776C16.9039 12.3606 17.07 12.3606 17.236 12.3606L20.0588 12.2776C20.3079 12.2776 20.5569 12.1946 20.723 12.1115C20.889 12.0285 20.972 11.9455 20.972 11.7794C20.972 11.6964 20.972 11.5304 20.972 11.4474C20.806 11.2813 20.806 11.1983 20.806 11.1153Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <a href="#" class="contacts_phone">8-911-111-11-11</a>
                    </div>
                    <?php if (!isset($back) || !$back):
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => 'nav',
                            'container_class' => 'main-navigation',
                        )); ?>
<!--                        <a href="/catalog.html" class="nav_item">КАТАЛОГ</a>-->
<!--                        <a href="/reviews.html" class="nav_item">ОТЗЫВЫ</a>-->
<!--                        <a href="/about.html" class="nav_item">О НАС</a>-->
<!--                        <a href="/delivery.html" class="nav_item">ДОСТАВКА</a>-->
<!--                        <a href="/payment.html" class="nav_item">ОПЛАТА</a>-->
                    <?php endif; ?>
                    <?php if (isset($back) && $back): ?>
                        <a href="#" class="nav_item-back">
                            <svg width="13" height="27" viewBox="0 0 13 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.300499 14.4164C-0.100166 13.9099 -0.100166 13.0915 0.300499 12.5836L9.80962 0.549658C10.388 -0.183219 11.3291 -0.183219 11.9085 0.549658C12.4869 1.28253 12.4869 2.47198 11.9085 3.20486L3.77396 13.5007L11.9085 23.7938C12.4869 24.528 12.4869 25.7175 11.9085 26.4503C11.3291 27.1832 10.388 27.1832 9.80962 26.4503L0.300499 14.4164Z" fill="black"/>
                            </svg>
                            Вернуться назад
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>