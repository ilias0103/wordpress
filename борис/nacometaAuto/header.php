<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacometa.com</title>
    
    <?php wp_head(); ?>
    
</head>
<body>
    <header>
        <div class="center">
            <div class="header_menu">
           
            <?php the_custom_logo(); ?>

          
            <div class="menu">

            <?php wp_nav_menu(array(
                'theme_location'  => 'top',
                'container'       => null,
                'menu_class'      => 'menu',
            )); ?>

            </div>
            <div class="polzun">
                <select>
                    <option>русский</option>
                    <option>английский</option>
                    <option>немецкий</option>
                </select>
            </div>
            <div class="profil">
                <img src="<?php bloginfo('template_url'); ?>/assets/img//icons8-администратор-50.png" alt="">
            </div>
        </div>
        <h1>€ 355  320  000</h1>
        <p>Cобрано на платформе nacometa.com</p>
            <p>Поделись своей мечтой </p>
           <p> и получи поддержку сообщества! </p>
        <div class="button_sbor">
            <button class="sbor">Начать сбор средств</button>
            <button class="video"> Смотреть видео</button>
        </div>
        </div>
    </header>