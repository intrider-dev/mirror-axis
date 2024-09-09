<?php
/*
Template Name: Mirror Axis
*/
get_header();
?>

<!-- Содержимое вашего index.php -->
<?
$body_content = get_field('body_content', 10);
?>
    <main>

        <?// --------------- Video block ---------------?>
        <?$vid_block = $body_content['video-block']?>
        <?if ($vid_block) {?>
            <section class="section__videoBanner" id="video-block">
                <video muted="" autoplay="">
                    <source src="<?=$vid_block['vid-file']['url']?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>>
                </video>
            </section>
        <?}?>

        <?// --------------- Our History top ---------------?>
        <?$our_history = $body_content['our_history_top']?>
        <?if ($our_history) {?>
            <section class="section__about" id="our_history_top">
                <div class="section__about-pos1">
                    <img src="<?=$our_history['img']['url']?>" class="img-fluid" alt="">
                </div>

                <div class="container position-relative">
                    <div class="section__about-pos2">
                        <img src="<?=$our_history['bg-img']['url']?>" class="img-fluid" alt="">
                    </div>
                    <div class="section__about-pageName">
                        About
                    </div>
                    <div class="section__about-title">
                        <?=$our_history['header']?>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="section__about-text">
                                <?=$our_history['text']?>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        <?}?>

        <?// --------------- Parallax block ---------------?>
        <?$prlx_media = $body_content['prlx_media']?>
        <?if ($prlx_media) {?>
            <section class="section__whatDo" id="prlx_media">
                <div class="container">
                    <div class="row py-4">
                        <div class="col-lg-7">
                            <div class="section__about-pageName">
                                About
                            </div>
                            <div class="section__about-title">
                                <?=$prlx_media['header']?>
                            </div>
                            <div class="section__about-text">
                                <?=$prlx_media['text']?>
                            </div>
                        </div>
                        <div class="col-lg-5 position-relative" id="fixer">
                            <div class="section__whatDo-picturesBlock parallax-img">
                                <div class="d-flex mt-4">
                                        <?// Определяем размер каждой части
                                        $chunk_size = ceil(count($prlx_media['imgs']) / 2);

                                        // Разбиваем массив на две части
                                        $chunks = array_chunk($prlx_media['imgs'], $chunk_size);
                                        // Получаем первые и вторые части массива
                                        $first_part = $chunks[0];
                                        $second_part = $chunks[1];?>
                                        <div class="section__whatDo-picturesBlock-1">
                                            <?$i = 1;?>
                                            <?foreach ($first_part as $img) {?>
                                                <div class="mb-3">
                                                    <img src="<?=$img['value']['url']?>" class="img-fluid" alt="">
                                                </div>
                                            <?}?>
                                        </div>
                                        <div class="section__whatDo-picturesBlock-2 ms-3 mt-lg-5 mt-3">
                                            <?foreach ($second_part as $img) {?>
                                                <div class="mb-3">
                                                    <img src="<?=$img['value']['url']?>" class="img-fluid" alt="">
                                                </div>
                                            <?}?>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?}?>

        <?// --------------- Achievements block ---------------?>
        <?$achievements = $body_content['achievements']?>
        <?if ($achievements) {?>
            <section class="section__ourTeam" id="achievements">
                <div class="container position-relative">
                    <?if ($achievements['bg-img']) {?>
                        <div class="section__ourTeam-pos1">
                            <img src="<?=$achievements['bg-img']['url']?>" class="img-fluid w-100" alt="">
                        </div>
                    <?}?>
                    <div class="section__about-pageName">
                        Our Team
                    </div>
                    <div class="section__about-title">
                        <?=$achievements['header']?>
                    </div>
                    <div class="section__ourTeam-block">
                        <div class="row justify-content-around" id="counter">
                            <?foreach ( $achievements['metrics'] as $metrica ) {?>
                                <div class="col-lg-2 section__ourTeam-item animate__animated animate_js_left">
                                    <div class="section__ourTeam-num number" data-num="<?=$metrica['value']?>">0</div>
                                    <div class="section__ourTeam-text"><?=$metrica['text']?></div>
                                </div>
                            <?}?>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?if ($achievements['text']) {?>
                                <div class="section__ourTeam-mainText">
                                    <?=$achievements['text']?>
                                </div>
                            <?}?>
                            <?if ($achievements['img']) {?>
                                <div class="text-center ourteam-bottom-img">
                                    <img src="<?=$achievements['img']['url']?>" class="img-fluid" alt="">
                                </div>
                            <?}?>
                        </div>
                    </div>
                </div>
            </section>
        <?}?>

        <?// --------------- Form block ---------------?>
        <?$form_data = $body_content['form-block']?>
        <?if ($form_data) {?>
            <section class="section__connectUs" id="form-block">
                <?if ($form_data['header']) {?>
                <div class="section__connectUs-title">
                    <?=$form_data['header']?>
                </div>
                <?}?>
                <div class="section__connectUs-bg" style="background-image: url('<?=$form_data['bg-img']['url']?>'); ">
                    <?if ($form_data['bg-filter']) {?>
                        <div class="section__connectUs-bg-filter" style="background: linear-gradient(<?=$form_data['bg-filter']?>); "></div>
                    <?}?>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10">
                                <?if ( $form_data['field'] ) {?>
                                    <form action="" class="form-main">
                                        <?foreach ( $form_data['field'] as $field ) {?>
                                            <?if ( $field['req'] != 0 ){
                                                $req = 'required="required"';
                                            }else{
                                                $req = '';
                                            }?>
                                            <div class="<?=$field['add_class']?>">
                                                <?if ($field['field-type'] != 'textarea') {?>
                                                    <<?=$field['field-type']?> type="<?=$field['data-type']?>" name="<?=$field['field-name']?>" <?=$req?> placeholder="<?=$field['placeholder']?>">
                                                <?}else{?>
                                                    <<?=$field['field-type']?> name="<?=$field['field-name']?>" rows="4" <?=$req?> placeholder="<?=$field['placeholder']?>"></<?=$field['field-type']?>>
                                                <?}?>
                                            </div>
                                        <?}?>
                                        <input style="display:none!important" name="name-check">
                                        <input style="display:none!important" name="email-check">
                                        <input style="display:none!important" name="message-check">
                                        <div class="gradient-bg none">
                                            <div class="btn-container">
                                                <span class="btn-text">Start in Future!</span>
                                                <div class="btn-filter">
                                                    <button type="submit">
                                                        <span>Start in Future!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?}?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?}?>
        
        <?// --------------- Slider block ---------------?>
        <?$slider = $body_content['slider']?>
        <?if ($slider) {?>
            <section class="section__ourServices py-5" id="slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section__about-pageName">
                                About
                            </div>
                            <?if ($slider['header']) {?>
                                <div class="section__about-title">
                                    <?=$slider['header']?>
                                </div>
                            <?}?>
                        </div>
                        <div class="col-lg-8">
                            <?if ($slider['text']) {?>
                                <div class="section__about-text">
                                    <?=$slider['text']?>
                                </div>
                            <?}?>
                        </div>
                    </div>
                    <?if ($slider['slides']) {?>
                        <div class="row mt-5 justify-content-center">
                            <div class="col-lg-12">
                                <div class="block1 d-none">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <?foreach ($slider['slides'] as $key => $slide) {?>
                                                <div class="swiper-slide">
                                                    <div class="d-flex flex-column align-items-center">
                                                        <?if ($slide['img']) {?>
                                                            <div>
                                                                <img src="<?=$slide['img']['url']?>" class="img-fluid" alt="">
                                                            </div>
                                                        <?}?>
                                                        <div class="sliderTextBlock mt-1">
                                                            <?if ($slide['header']) {?>
                                                                <div class="section__about-title" style="font-size: 15px">
                                                                    <?=$slide['header']?>
                                                                </div>
                                                            <?}?>
                                                            <?if ($slide['text']) {?>
                                                                <div class="section__about-pageName" style="font-size: 13px">
                                                                    <?=$slide['header']?>
                                                                </div>
                                                            <?}?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?}?>
                                        </div>
                                    </div>
                                </div>
                                <div class="block2">
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <?foreach ($slider['slides'] as $key => $slide) {?>
                                                <div class="swiper-slide">
                                                    <div class="d-flex flex-column align-items-center">
                                                        <?if ($slide['img']) {?>
                                                            <div>
                                                                <img src="<?=$slide['img']['url']?>" class="img-fluid" alt="">
                                                            </div>
                                                        <?}?>
                                                        <div class="glow"></div>
                                                        <div class="sliderTextBlock mt-2">
                                                            <?if ($slide['header']) {?>
                                                                <div class="section__about-title" style="font-size: 15px">
                                                                    <?=$slide['header']?>
                                                                </div>
                                                            <?}?>
                                                            <?if ($slide['text']) {?>
                                                                <div class="section__about-pageName" style="font-size: 13px">
                                                                    <?=$slide['text']?>
                                                                </div>
                                                            <?}?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?}?>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?}?>

                </div>
            </section>
        <?}?>

        <?// --------------- Our Clients block ---------------?>
        <?$clients = $body_content['clients']?>
        <?if ($clients) {?>
            <section class="section__ourClients" id="clients">
                <div class="container">
                    <div class="section__about-pageName">
                        Check
                    </div>
                    <? if ($clients['header']) {?>
                        <div class="section__about-title">
                            <?=$clients['header']?>
                        </div>
                    <?}?>

                    <div class="row justify-content-between align-items-center">
                        <? if ($clients['logos']) {?>
                            <div class="col-lg-8">
                                <div class="row align-items-center">
                                    <? foreach ($clients['logos'] as $logo) {?>
                                        <div class="mb-4 col-lg-4 col-md-6 element-cont">
                                            <div class="gradient-bg">
                                                <img src="<?=$logo['img']['url']?>" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    <?}?>
                                </div>
                            </div>
                        <?}?>
                        <?if ($clients['text']) {?>
                            <div class="col-lg-3">
                                <div class="section__about-text">
                                    <?=$clients['text']?>
                                </div>
                            </div>
                        <?}?>
                    </div>
                </div>
            </section>
        <?}?>

    </main>

<?php get_footer(); ?>