<!DOCTYPE html>
<html <?php language_attributes(); ?> style="overflow: hidden;">

<?$header_content = get_field('header_content', 10);?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body style="">

<?//Preloader?>
<?$preloader = $header_content['preloader']?>
<?if ($preloader['value'] == 'dotsGroup') {?>
    <div class="loading-screen">
        <div class="container1">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
<?} elseif ($preloader['value'] == 'new') {?>
    <div class="loading-screen">
        <div class="wrapper-prealoader">
            <div class="line line1">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line2">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line3">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line4">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line5">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line6">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line7">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line8">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line9">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line10">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
            <div class="line line11">
                <span class="circle circle-top"></span>
                <div class="dotted">
                    <span class="dot dot-top"></span>
                    <span class="dot dot-middle-top"></span>
                    <span class="dot dot-middle-bottom"></span>
                    <span class="dot dot-bottom"></span>
                </div>
                <span class="circle circle-bottom"></span>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        }
    </script>
<?}?>
<div id="main-content">
    <header>
        <div class="header__pc" id="headerFixed">
            <div class="container">
                <div class="header__pc-logo d-flex justify-content-between align-items-center">
                    <div>
                        <?if ($header_content['logo-header']) {?>
                            <a href="" class="logo__block" id="logo__block">
                                <?foreach ($header_content['logo-header'] as $key => $logo_elem) {?>
                                    <img id="<?=$key?>" src="<?=$logo_elem['url']?>">
                                <?}?>
                            </a>
                        <?}?>
                    </div>
                    
                    <?if ($header_content['menu']['items']) {?>
                        <div class="header__pc-links <?if ($header_content['menu']['hover_type'] != '[--None--]') { echo $header_content['menu']['hover_type']; }?> d-lg-flex d-none align-items-center">
                            <?foreach ($header_content['menu']['items'] as $item) {?>
                                <a href="<?=$item['link']?>" class="header-menu-item">
                                    <div class="menu-item-text">
                                        <?=$item['text']?>
                                    </div>
                                </a>
                            <?}?>
                        </div>
                    <?}?>
                    <div class="header__mob d-lg-none">
                        <a class="btn" data-bs-toggle="offcanvas" href="#offCanvassMob" role="button" aria-controls="offCanvassMob">
                            <svg width="25" height="26" viewbox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="5.5" width="25" height="1" fill="white"></rect>
                                <rect y="19.5" width="25" height="1" fill="white"></rect>
                                <rect y="12.5" width="25" height="1" fill="white"></rect>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>