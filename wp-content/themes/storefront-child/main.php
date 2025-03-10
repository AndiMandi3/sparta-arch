<?php
/**
 * Template Name: Главная страница
*/

get_header();
?>
<!-- ~Никитос, привет~ -->
<style>
    .container-fluid.banner {
    position: relative;
    overflow: hidden; /* Чтобы видео не выходило за пределы контейнера */
}

.video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0; /* Чтобы видео было на заднем плане */
}

.video-background video {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Чтобы видео сохраняло пропорции и заполняло контейнер */
}

.banner > .header-banner {
    position: relative;
    z-index: 1;
}
.navbar-toggler {
    background-color: white!important;
}
</style>
<div class="container-fluid banner container-animated">
    <div class="video-background">
        <video autoplay video loop="loop" muted playsinline preload="auto">
            <source src="<?= get_stylesheet_directory_uri() . '/assets/img/2.mp4'?>" type="video/mp4">
            Ваш браузер не поддерживает видео тег.
        </video>
    </div>
    <div class="container h-100 header-banner">
        <div class="d-flex h-100">
            <div class="row align-items-center">
                <div сlass="d-flex">
                    <h1><?= get_field('заголовок_1');?></h1>
                    <div class="w-100 banner-div">
                        <a href="#request" class="banner-button" id="banner">
                            <button type="button" class="slon-back">Подобрать строительство</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container m-105 container-animated" id="about-us">
    <div class="row">
        <div class="col-mg col-lg col-xl col-xxl-6" style="align-content: center;">
            <h1 class="h2-custom"><?= get_field('заголовок_2'); ?></h1>
            <?php $rows = get_field('для_текста_внутри_блока');
            if($rows) {
                $first_row = $rows[0]['текст'];
                $second_row = $rows[1]['текст'];
                $third_row = $rows[2]['текст'];
            }?>
            <p><?=$first_row?></p>
            <p><?= get_field('важный_текст');?></p>
            <p><?=$second_row?></p>
            <p><?=$third_row?></p>
        </div>
        <div class="col-md-6 d-none d-sm-block d-md-none d-lg-none d-xl-block">
        <?php
            // проверяем есть ли в повторителе данные
            if( have_rows('бок') ):
                // перебираем данные
                while ( have_rows('бок') ) : the_row();
                    // переменная для изображения
                    $image = get_sub_field('боковое_изображение');
                    // проверяем, существует ли изображение
                    if( !empty($image) ): ?>
                        <img class="mt-5" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
                    <?php endif;
                endwhile;
            else :
                // в случае отсутствия данных
                echo 'Изображения не найдены.';
            endif;
        ?>


        </div>
    </div>
</div>

<?php $images = get_field('галерея_просто_изображения');
if($images) { ?>
<div class="m-105 container-animated">
    <div class="owl-carousel-1 owl-carousel owl-theme">
        <?php foreach( $images as $image ){ ?>
            <div class="item">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div> 
        <?php } ?>
    </div>
</div>
<?php } ?>

<div class="container m-105 container-animated" id="our-services">
    <div class="row projects">
        <h2 class="h2-custom text-center"><?= get_field('заголовок_3')?></h2>
        <div class="d-flex buttons-content justify-content-center">
            <?php
                // проверяем есть ли в повторителе данные
                if( have_rows('для_этикеток') ):
                    // счетчик для определения первого элемента
                    $counter = 1;
                    // перебираем данные
                    while ( have_rows('для_этикеток') ) : the_row();
                        // переменная для текста кнопки
                        $button_text = get_sub_field('название_этикетки1');
                        // проверяем, существует ли текст кнопки
                        if( !empty($button_text) ):
                            // определяем класс кнопки
                            $button_class = $counter == 1 ? 'button-classic active' : 'button-classic';
                            ?>
                            <button type="button" id="content-<?php echo $counter; ?>" class="<?php echo $button_class; ?>"><?php echo $button_text; ?></button>
                            <?php
                            $counter++;
                        endif;
                    endwhile;
                else :
                    // в случае отсутствия данных
                    echo 'Данные для кнопок не найдены.';
                endif;
            ?>
        </div>
        <div class="d-flex buttons-content justify-content-center">
        <?php
                // проверяем есть ли в повторителе данные
                if( have_rows('для_этикеток2') ):
                    // счетчик для определения первого элемента
                    $counter = 5;
                    // перебираем данные
                    while ( have_rows('для_этикеток2') ) : the_row();
                        // переменная для текста кнопки
                        $button_text = get_sub_field('название_этикетки2');
                        // проверяем, существует ли текст кнопки
                        if( !empty($button_text) ):
                            // определяем класс кнопки
                            $button_class = $counter == 1 ? 'button-classic active' : 'button-classic';
                            ?>
                            <button type="button" id="content-<?php echo $counter; ?>" class="<?php echo $button_class; ?>"><?php echo $button_text; ?></button>
                            <?php
                            $counter++;
                        endif;
                    endwhile;
                else :
                    // в случае отсутствия данных
                    echo 'Данные для кнопок не найдены.';
                endif;
            ?>
        </div>
    </div>
    <?php 
    if ( have_rows('внутри_этикетки')):
        $counter = 1; 
        while( have_rows('внутри_этикетки')) :
            the_row();
            $title = get_sub_field('заголовок_этикетки');
            $text = get_sub_field('текст_этикетки');
            $img_et = get_sub_field('картинка_этикетки');
            if(!empty($title) && !empty($text) && !empty($img_et)) :
                $div_text = $counter == 1 ? "row mt-4 text-content active" : "row mt-4 text-content";
    ?>
    <div id="showContent<?=$counter?>" class="<?= $div_text?>">
        <div class="col-xxl col-md col-12">
            <p><strong><?=$title?></strong></p>
            <p style="word-wrap: break-word;"><?= $text?></p>
        </div>
        <div class="col-xxl col-md col-12">
            <img src="<?= $img_et['url']?>" height="70%" alt="">
        </div>
    </div>
    <?php 
    $counter++;
    endif;
    endwhile;
endif;
?>
</div>

<?php if(have_rows('для_проектов')) {?>
    <div class="container m-105 container-animated" id="our-projects">
        <h2 class="h2-custom text-center"><?= get_field('заголовок_4')?></h2>
        <div class="row">
            <div class="carousel-2 owl-carousel owl-theme">
            <?php while(have_rows('для_проектов')) { the_row();?>
                <div class="owl-pic">
                    <?php $title = get_sub_field('название_проекта');
                          $project_img = get_sub_field('картинка_проекта');?>
                    <h3><?=$title?></h3>
                    <img class="img-project" src="<?=$project_img['url']?>"></div>
            <?php }?>
            </div>
<?php }?>

        
            <!-- <div class="owl-pic">
                <h3>Проект №2</h3>
                <div class="img-project"></div>
            </div>
            <div class="owl-pic">
                <h3>Проект №3</h3>
                <div class="img-project"></div>
            </div> -->
        </div>
    </div>
    <!-- <div class="w-100 banner-div mt-4">
        <a href="#" class="banner-button" id="banner">
            <button type="button" class="slon-back">Смотреть выполненные проекты</button>
        </a>
    </div> -->
</div>

<div class="container m-105 container-animated" id="reviews">
    <h2 class="h2-custom text-center">Клиенты о нас</h2>
        <div class="row">
            <div class="owl-carousel-3 owl-carousel owl-theme">
                <div class="review-block">
                    <div class="header mb-4">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/avatar.png"?>" alt="">
                        <div class="header-meta">
                            <p class="username mb-0">Антон</p>
                        </div>
                    </div>
                    <p>Приятный сервис, все подробно объясняют отвечают быстро, действительно полезная консультация. Красавцы!!!</p>
                </div>
                <div class="review-block">
                    <div class="header mb-4">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/avatar.png"?>" alt="">
                        <div class="header-meta">
                            <p class="username mb-0">Наташа</p>
                        </div>
                    </div>
                    <p>Лучшая СК! Очень быстро работают, клиентоориентированные, встречи назначали в удобное время. Нашли для нас лучшее решение, очень рада, что моя мечта сбылась. Спасибо!</p>
                </div>
                <div class="review-block">
                    <div class="header mb-4">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/avatar.png"?>" alt="">
                        <div class="header-meta">
                            <p class="username mb-0">Андрей</p>
                        </div>
                    </div>
                    <p>Огромная благодарность ребятам за мой дом. Много лет хотел, искал компанию и слава богу наткнулся на ребят. Все сделали в срок, без нервов и форс-мажоров, как это обычно бывает. Очень круто, когда все работает без лишних головняков) Удачи, развития)</p>
                </div>
            </div>
        </div>
    </h2>
</div>

<div class="container m-105 container-animated" id="request">
    <h2 class="h2-custom text-center"><?= get_field('вопросы') ?></h2>
    <div class="row">
        <?= do_shortcode('[ninja_form id=2]')?>
    </div>
</div>

<div class="container m-105 mb-5 container-animated" id="contacts">
    <h2 class="h2-custom text-center"><?= get_field('как_найти') ?></h2>
    <div class="row">
        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/map.png"?>">
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="button" class="for-address" id="address-button"><?= get_field('адрес_для_тупых');?></button>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<div class="btn-up btn-up_hide"></div>
<!-- ~Никитоооооос -->
<?php
get_footer(); 
?>