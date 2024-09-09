<?$header_content = get_field('header_content', 10);?>
<?$footer_content = get_field('footer_content', 10);?>
<footer class="footer" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?if ($footer_content['logo']) {?>
                        <div class="logo">
                            <img src="<?=$footer_content['logo']['url']?>">
                        </div>
                    <?}?>
                    <?if ($footer_content['text']) {?>
                        <div class="mt-5 footer-text">
                            <?=$footer_content['text']?>
                        </div>
                    <?}?>

                </div>
                <?if ($footer_content['menu']) {?>
                    <?foreach ($footer_content['menu'] as $menu){?>
                        <div class="col-lg-3 mt-lg-0 mt-4 col-6 d-flex justify-content-center footer-col footer-menu <?if ($menu['hover_type'] != '[--None--]') { echo $menu['hover_type']; }?>">
                            <div class="footer__links d-flex flex-column">
                                <?if ($menu['header']) {?>
                                    <div class="footer__links-title mb-3">
                                        <?=$menu['header']?>
                                    </div>
                                <?}?>
                                <?if ($menu['items']) {?>
                                    <?foreach ($menu['items'] as $item) {?>
                                        <a href="<?=$item['link']?>" class="d-flex">
                                            <div class="menu-footer-text">
                                                <?=$item['text']?>
                                            </div>
                                        </a>     
                                    <?}?>                               
                                <?}?>
                            </div>
                        </div>
                    <?}?>
                <?}?>

                <?if ($footer_content['adresses'] or $footer_content['email'] or $footer_content['phones']) {?>
                    <div class="col-lg-3 mt-lg-0 mt-4 d-flex justify-content-center footer-col footer-menu new">
                        <div class="footer__links d-flex flex-column">
                            <div class="footer__links-title mb-3">
                                Contacts
                            </div>
                            <?if ($footer_content['adresses']) {?>
                                <?foreach ($footer_content['adresses'] as $address) {?>
                                    <div class="adresses-block">
                                        <a href="javascript:void(0)" class="d-flex align-items-center">
                                            <div class="me-3 pb-1 adresses-icon">
                                                <img src="<?=$address['icon']['url']?>">
                                            </div>
                                            <div class="adresses-value">
                                                <?=$address['value']?>
                                            </div>
                                        </a>
                                    </div>
                                <?}?>
                            <?}?>
                            <?if ($footer_content['email']) {?>
                                <?foreach ($footer_content['email'] as $email) {?>
                                    <div>
                                        <a href="mailto:<?=$email['value']?>" class="d-flex align-items-center">
                                            <div class="me-3 pb-1 email-icon">
                                                <img src="<?=$email['icon']['url']?>">
                                            </div>
                                            <div class="email-value">
                                                <?=$email['value']?>
                                            </div>
                                        </a>
                                    </div>
                                <?}?>
                            <?}?>
                            <?if ($footer_content['phones']) {?>
                                <?foreach ($footer_content['phones'] as $phone) {?>
                                    <div>
                                        <a href="tel:<?=str_replace(['(', ')', '+', '-', ' ', '_', '.', '<p>', '</p>', '<br>'], '', $phone['value'])?>" class="d-flex align-items-center">
                                            <div class="me-3 pb-1 phones-icon">
                                                <img src="<?=$phone['icon']['url']?>">
                                            </div>
                                            <div class="phones-value">
                                                <?=$phone['value']?>
                                            </div>
                                        </a>
                                    </div>
                                <?}?>
                            <?}?>
                        </div>
                    </div>
                <?}?>
            </div>


            <div class="row align-items-center">
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="developers mt-4 d-flex flex-column align-items-start">
                        <div>
                            UX/UI: Nik Rublev ❖
                        </div>
                        <div>
                            Dev: &lt;Intrider&gt;
                        </div>
                    </div>
                </div>
                <?if ($footer_content['socials']) {?>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="footer__socials d-flex align-items-center justify-content-center">
                            <?foreach ($footer_content['socials'] as $soc) {?>
                                <a href="<?=$soc['link']?>" class="d-block">
                                    <img src="<?=$soc['icon']['url']?>">
                                </a>
                            <?}?>
                        </div>
                    </div>
                <?}?>
            </div>
        </div>
    </footer>
</div>

<?if ($header_content['menu']['items']) {?>
<div class="offcanvasMob offcanvas offcanvas-end" tabindex="-1" id="offCanvassMob" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <div>
            <svg width="51" height="21" viewbox="0 0 51 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M43.1543 1.29231H38.8457L32.3298 21H31L37.9149 0H44.0851L51 21H49.617L43.1543 1.29231ZM40.1755 3.41923H41.7181L44.9096 13.2462H36.984L40.1755 3.41923ZM43.1543 11.9538C43.0656 11.6667 42.9238 11.2359 42.7287 10.6615C42.5337 10.0872 42.3209 9.45 42.0904 8.75C41.8599 8.03205 41.6472 7.32308 41.4521 6.62308C41.2571 5.90513 41.1152 5.26795 41.0266 4.71154H40.867C40.7784 5.25 40.6365 5.8782 40.4415 6.59615C40.2642 7.29615 40.0603 8.00513 39.8298 8.72308C39.5993 9.42308 39.3865 10.0692 39.1915 10.6615C38.9965 11.2359 38.8546 11.6667 38.766 11.9538H43.1543ZM44.484 16.0731H37.4628L35.8138 21H34.484L36.5585 14.7808H45.4149L47.4096 21H46.0798L44.484 16.0731Z" fill="white"></path>
                <path d="M27.5174 16H29V21H27.5174V16ZM24 16H25.4826V21H24V16Z" fill="white"></path>
                <path d="M19.6977 1.29231H14.8682L11.124 17.1769H9.79457L5.83333 1.29231H1.30233V21H0V0H6.86434L9.93023 12.2769C10.0388 12.6718 10.1202 13.1385 10.1744 13.6769C10.2468 14.2154 10.301 14.691 10.3372 15.1038C10.3734 15.5167 10.4005 15.75 10.4186 15.8038H10.5C10.5181 15.75 10.5452 15.5167 10.5814 15.1038C10.6176 14.6731 10.6628 14.1974 10.7171 13.6769C10.7713 13.1385 10.8437 12.6808 10.9341 12.3038L13.8372 0H21V21H19.6977V1.29231ZM16.469 12.6538C16.469 12.2769 16.478 11.7833 16.4961 11.1731C16.5142 10.5449 16.5413 9.88974 16.5775 9.20769C16.6137 8.50769 16.6408 7.83462 16.6589 7.18846C16.6951 6.52436 16.7222 5.95897 16.7403 5.49231C16.7765 5.00769 16.7946 4.69359 16.7946 4.55H16.6318C16.6318 4.71154 16.5956 5.00769 16.5233 5.43846C16.469 5.85128 16.3966 6.3359 16.3062 6.89231C16.2339 7.43077 16.1434 7.96923 16.0349 8.50769C15.9444 9.0282 15.854 9.45897 15.7636 9.8L12.9147 21H7.92248L4.88372 9.82692C4.81137 9.57564 4.72997 9.21667 4.63953 8.75C4.5491 8.26538 4.45866 7.75385 4.36822 7.21538C4.27778 6.65897 4.19638 6.14744 4.12403 5.68077C4.05168 5.19615 3.99742 4.81923 3.96124 4.55H3.79845C3.81654 4.71154 3.83463 5.02564 3.85271 5.49231C3.88889 5.95897 3.91602 6.51539 3.93411 7.16154C3.97028 7.78974 4.00646 8.45385 4.04264 9.15385C4.07881 9.85385 4.10594 10.5179 4.12403 11.1462C4.14212 11.7744 4.15116 12.3038 4.15116 12.7346V21H2.84884V3.15H4.42248L8.92636 19.7077H11.8837L16.0891 3.15H17.7713V21H16.469V12.6538Z" fill="white"></path>
            </svg>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
        <div class="header__pc-links d-flex flex-column <?if ($header_content['menu']['hover_type'] != '[--None--]') { echo $header_content['menu']['hover_type']; }?>">
            <?foreach ($header_content['menu']['items'] as $item) {?>
                <a href="<?=$item['link']?>" class="d-flex my-1">
                    <div class="offcanvas-menuitem-text">
                        <?=$item['text']?>
                    </div>
                </a>
            <?}?>
        </div>
        <div>
            <div class="mt-4 confidence text-center" style="color:white;">
                <?// Получение текущей активной темы
                $theme = wp_get_theme();
                // Имя темы
                $theme_name = $theme->get('Name');?>
                <?=date("Y")?> © <?=$theme_name?>
            </div>
        </div>

    </div>
</div>
<?}?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.form-main').addEventListener('submit', function(event) {
                event.preventDefault();
                var formElem = document.querySelector('.form-main');
                // Получение данных формы
                var formData = new FormData(this);
                //Предварительное создание блока для ответа
                formElem.innerHTML = '<div class="form-result"><div class="form-loader"></div></div>';

                // Преобразование данных формы в URL-кодированную строку
                var encodedData = new URLSearchParams(formData).toString();

                // Отправка данных через AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/wp-content/themes/mirroraxis/ajax/sender.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            // Обработка успешного ответа от сервера
                            var formResultElem = document.querySelector('.form-result');
                            var successBG = "background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+Cgo8ZGVmcz4KPC9kZWZzPgo8ZyBzdHlsZT0ic3Ryb2tlOiBub25lOyBzdHJva2Utd2lkdGg6IDA7IHN0cm9rZS1kYXNoYXJyYXk6IG5vbmU7IHN0cm9rZS1saW5lY2FwOiBidXR0OyBzdHJva2UtbGluZWpvaW46IG1pdGVyOyBzdHJva2UtbWl0ZXJsaW1pdDogMTA7IGZpbGw6IG5vbmU7IGZpbGwtcnVsZTogbm9uemVybzsgb3BhY2l0eTogMTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNDA2NTkzNDA2NTkzNDAxNiAxLjQwNjU5MzQwNjU5MzQwMTYpIHNjYWxlKDIuODEgMi44MSkiPgoJPHBvbHlnb24gcG9pbnRzPSIzNy45NSw2NC40NCAyMy43OCw1MC4yNyAzMC44NSw0My4yIDM3Ljk1LDUwLjMgNTkuMTUsMjkuMSA2Ni4yMiwzNi4xNyAiIHN0eWxlPSJzdHJva2U6IG5vbmU7c3Ryb2tlLXdpZHRoOiAxO3N0cm9rZS1kYXNoYXJyYXk6IG5vbmU7c3Ryb2tlLWxpbmVjYXA6IGJ1dHQ7c3Ryb2tlLWxpbmVqb2luOiBtaXRlcjtzdHJva2UtbWl0ZXJsaW1pdDogMTA7ZmlsbDogcmdiKDcxIDE1NiAyMzcpO2ZpbGwtcnVsZTogbm9uemVybztvcGFjaXR5OiAxOyIgdHJhbnNmb3JtPSIgIG1hdHJpeCgxIDAgMCAxIDAgMCkgIi8+Cgk8cGF0aCBkPSJNIDQ1IDkwIEMgMjAuMTg3IDkwIDAgNjkuODEzIDAgNDUgQyAwIDIwLjE4NyAyMC4xODcgMCA0NSAwIGMgMjQuODEzIDAgNDUgMjAuMTg3IDQ1IDQ1IEMgOTAgNjkuODEzIDY5LjgxMyA5MCA0NSA5MCB6IE0gNDUgMTAgYyAtMTkuMjk5IDAgLTM1IDE1LjcwMSAtMzUgMzUgcyAxNS43MDEgMzUgMzUgMzUgcyAzNSAtMTUuNzAxIDM1IC0zNSBTIDY0LjI5OSAxMCA0NSAxMCB6IiBzdHlsZT0ic3Ryb2tlOiBub25lO3N0cm9rZS13aWR0aDogMTtzdHJva2UtZGFzaGFycmF5OiBub25lO3N0cm9rZS1saW5lY2FwOiBidXR0O3N0cm9rZS1saW5lam9pbjogbWl0ZXI7c3Ryb2tlLW1pdGVybGltaXQ6IDEwO2ZpbGw6IHJnYig3MSAxNTYgMjM3KTtmaWxsLXJ1bGU6IG5vbnplcm87b3BhY2l0eTogMTsiIHRyYW5zZm9ybT0iIG1hdHJpeCgxIDAgMCAxIDAgMCkgIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KPC9nPgo8L3N2Zz4=')";
                            formResultElem.innerHTML = '<div class="success-icon" style="' + successBG + '"></div><div class="send-success">Successfully sent</div>';
                        } else {
                            // Обработка ошибок
                            var formResultElem = document.querySelector('.form-result');
                            formResultElem.classList.add('error');
                            var errorBG = "background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+Cgo8ZGVmcz4KPC9kZWZzPgo8ZyBzdHlsZT0ic3Ryb2tlOiBub25lOyBzdHJva2Utd2lkdGg6IDA7IHN0cm9rZS1kYXNoYXJyYXk6IG5vbmU7IHN0cm9rZS1saW5lY2FwOiBidXR0OyBzdHJva2UtbGluZWpvaW46IG1pdGVyOyBzdHJva2UtbWl0ZXJsaW1pdDogMTA7IGZpbGw6IG5vbmU7IGZpbGwtcnVsZTogbm9uemVybzsgb3BhY2l0eTogMTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNDA2NTkzNDA2NTkzNDAxNiAxLjQwNjU5MzQwNjU5MzQwMTYpIHNjYWxlKDIuODEgMi44MSkiPgoJPHBhdGggZD0iTSAyOC41IDY1LjUgYyAtMS4wMjQgMCAtMi4wNDcgLTAuMzkxIC0yLjgyOSAtMS4xNzIgYyAtMS41NjIgLTEuNTYyIC0xLjU2MiAtNC4wOTUgMCAtNS42NTYgbCAzMyAtMzMgYyAxLjU2MSAtMS41NjIgNC4wOTYgLTEuNTYyIDUuNjU2IDAgYyAxLjU2MyAxLjU2MyAxLjU2MyA0LjA5NSAwIDUuNjU3IGwgLTMzIDMzIEMgMzAuNTQ3IDY1LjEwOSAyOS41MjQgNjUuNSAyOC41IDY1LjUgeiIgc3R5bGU9InN0cm9rZTogbm9uZTtzdHJva2Utd2lkdGg6IDE7c3Ryb2tlLWRhc2hhcnJheTogbm9uZTtzdHJva2UtbGluZWNhcDogYnV0dDtzdHJva2UtbGluZWpvaW46IG1pdGVyO3N0cm9rZS1taXRlcmxpbWl0OiAxMDtmaWxsOiByZ2IoMTg5IDYzIDYzKTtmaWxsLXJ1bGU6IG5vbnplcm87b3BhY2l0eTogMTsiIHRyYW5zZm9ybT0iIG1hdHJpeCgxIDAgMCAxIDAgMCkgIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KCTxwYXRoIGQ9Ik0gNjEuNSA2NS41IGMgLTEuMDIzIDAgLTIuMDQ4IC0wLjM5MSAtMi44MjggLTEuMTcyIGwgLTMzIC0zMyBjIC0xLjU2MiAtMS41NjMgLTEuNTYyIC00LjA5NSAwIC01LjY1NyBjIDEuNTYzIC0xLjU2MiA0LjA5NSAtMS41NjIgNS42NTcgMCBsIDMzIDMzIGMgMS41NjMgMS41NjIgMS41NjMgNC4wOTUgMCA1LjY1NiBDIDYzLjU0OCA2NS4xMDkgNjIuNTIzIDY1LjUgNjEuNSA2NS41IHoiIHN0eWxlPSJzdHJva2U6IG5vbmU7c3Ryb2tlLXdpZHRoOiAxO3N0cm9rZS1kYXNoYXJyYXk6IG5vbmU7c3Ryb2tlLWxpbmVjYXA6IGJ1dHQ7c3Ryb2tlLWxpbmVqb2luOiBtaXRlcjtzdHJva2UtbWl0ZXJsaW1pdDogMTA7ZmlsbDogcmdiKDE4OSA2MyA2Myk7ZmlsbC1ydWxlOiBub256ZXJvO29wYWNpdHk6IDE7IiB0cmFuc2Zvcm09IiBtYXRyaXgoMSAwIDAgMSAwIDApICIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+Cgk8cGF0aCBkPSJNIDQ1IDkwIEMgMjAuMTg3IDkwIDAgNjkuODEzIDAgNDUgQyAwIDIwLjE4NyAyMC4xODcgMCA0NSAwIGMgMjQuODEzIDAgNDUgMjAuMTg3IDQ1IDQ1IEMgOTAgNjkuODEzIDY5LjgxMyA5MCA0NSA5MCB6IE0gNDUgOCBDIDI0LjU5OCA4IDggMjQuNTk4IDggNDUgYyAwIDIwLjQwMiAxNi41OTggMzcgMzcgMzcgYyAyMC40MDIgMCAzNyAtMTYuNTk4IDM3IC0zNyBDIDgyIDI0LjU5OCA2NS40MDIgOCA0NSA4IHoiIHN0eWxlPSJzdHJva2U6IG5vbmU7c3Ryb2tlLXdpZHRoOiAxO3N0cm9rZS1kYXNoYXJyYXk6IG5vbmU7c3Ryb2tlLWxpbmVjYXA6IGJ1dHQ7c3Ryb2tlLWxpbmVqb2luOiBtaXRlcjtzdHJva2UtbWl0ZXJsaW1pdDogMTA7ZmlsbDogcmdiKDE4OSA2MyA2Myk7ZmlsbC1ydWxlOiBub256ZXJvO29wYWNpdHk6IDE7IiB0cmFuc2Zvcm09IiBtYXRyaXgoMSAwIDAgMSAwIDApICIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+CjwvZz4KPC9zdmc+')";
                            formResultElem.innerHTML = '<div class="error-icon" style="' + errorBG + '"></div><div class="send-error">Send error</div>';
                        }
                    }r
                };
                xhr.send(encodedData);
            });

            window.addEventListener('scroll', function() {
                parallax();
            });

            function parallax() {
                var scrolled = window.pageYOffset;
                document.querySelector('.parallax-img').style.top = (scrolled * 0.05) + 'px';
            }
        });

</script>
<script>


    document.addEventListener('DOMContentLoaded', function() {

        const scrollElementsL = document.querySelectorAll(".animate_js_left");
        const scrollElementsR = document.querySelectorAll(".animate_js_right");
        const scrollElementsT = document.querySelectorAll(".animate_js_up");
        const scrollElementsB = document.querySelectorAll(".animate_js_down");

        if (document.querySelectorAll((".animate_js_left"))){
            const elementInView = (el, dividend = 1) => {
                const elementTop = el.getBoundingClientRect().top;
                return (
                    elementTop <=
                    (window.innerHeight || document.documentElement.clientHeight) / dividend
                );
            };

            const elementOutofView = (el) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop > (window.innerHeight || document.documentElement.clientHeight)
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add("animate__fadeInLeft", "position-def");
            };

            // const hideScrollElement = (element) => {
            //     element.classList.remove("animate__fadeInLeft", "position-def");
            // };


            const handleScrollAnimation = () => {
                scrollElementsL.forEach(function(el, index) {
                    setTimeout(function(){
                        if (elementInView(el, 1.25)) {
                            displayScrollElement(el);
                        }
                    }, index * 700);
                    // else if (elementOutofView(el)) {
                    //     hideScrollElement(el)
                    // }
                })
            }
            window.addEventListener("scroll", () => {
                handleScrollAnimation();
            });

        }

        if (document.querySelectorAll((".animate_js_right"))){
            const elementInView = (el, dividend = 1) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop <=
                    (window.innerHeight || document.documentElement.clientHeight) / dividend
                );
            };

            const elementOutofView = (el) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop > (window.innerHeight || document.documentElement.clientHeight)
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add("animate__fadeInRight", "position-def");
            };

            // const hideScrollElement = (element) => {
            //     element.classList.remove("animate__fadeInRight", "position-def");
            // };


            const handleScrollAnimation = () => {
                scrollElementsR.forEach((el) => {
                    if (elementInView(el, 1.25)) {
                        displayScrollElement(el);
                    }
                    // else if (elementOutofView(el)) {
                    //     hideScrollElement(el)
                    // }
                })
            }
            window.addEventListener("scroll", () => {
                handleScrollAnimation();
            });

        }

        if (document.querySelectorAll((".animate_js_up"))){
            const elementInView = (el, dividend = 1) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop <=
                    (window.innerHeight || document.documentElement.clientHeight) / dividend
                );
            };

            const elementOutofView = (el) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop > (window.innerHeight || document.documentElement.clientHeight)
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add("animate__fadeInUp", "position-def");
            };

            // const hideScrollElement = (element) => {
            //     element.classList.remove("animate__fadeInUp", "position-def");
            // };


            const handleScrollAnimation = () => {
                scrollElementsT.forEach((el) => {
                    if (elementInView(el, 1.25)) {
                        displayScrollElement(el);
                    }
                    // else if (elementOutofView(el)) {
                    //     hideScrollElement(el)
                    // }
                })
            }
            window.addEventListener("scroll", () => {
                handleScrollAnimation();
            });

        }

        if (document.querySelectorAll((".animate_js_down"))){
            const elementInView = (el, dividend = 1) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop <=
                    (window.innerHeight || document.documentElement.clientHeight) / dividend
                );
            };

            const elementOutofView = (el) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop > (window.innerHeight || document.documentElement.clientHeight)
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add("animate__fadeInDown", "position-def");
            };

            // const hideScrollElement = (element) => {
            //     element.classList.remove("animate__fadeInDown", "position-def");
            // };


            const handleScrollAnimation = () => {
                scrollElementsB.forEach((el) => {
                    if (elementInView(el, 1.25)) {
                        displayScrollElement(el);
                    }
                    // else if (elementOutofView(el)) {
                    //     hideScrollElement(el)
                    // }
                })
            }
            window.addEventListener("scroll", () => {
                handleScrollAnimation();
            });

        }

    });
    document.addEventListener('DOMContentLoaded', function (){
        setTimeout(function() {
            var new_preloader_wrapper = document.querySelector('.wrapper-prealoader')
            if (new_preloader_wrapper != null) {
                new_preloader_wrapper.classList.add('hidden');
            }
            var loadingScreen = document.querySelector('.loading-screen');
            var html = document.querySelector('html');
            loadingScreen.classList.add('hidden');
            html.style.overflow = 'visible';

        }, 3000);
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });
        var swiper2 = new Swiper(".mySwiper2", {

            centeredSlides: true,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                576: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },



        });

    })
    window.addEventListener('scroll', function() {
        var header = document.querySelector('header');
        var testDiv = document.getElementById('headerFixed');
        let logo__block = document.querySelector('#logo__block');


        var headerRect = header.getBoundingClientRect();

        if (headerRect.top < 0) {
            // testDiv.style.display = 'block';
            logo__block.classList.add('smooth');
            testDiv.classList.add('fixed');
        } else {
            // testDiv.style.display = 'none';
            logo__block.classList.remove('smooth');
            testDiv.classList.remove('fixed');

        }
    });
</script>

</body>
</html>