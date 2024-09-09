var time = 2,
    cc = 1;

window.addEventListener('scroll', function() {
    document.querySelectorAll('#counter').forEach(function(counter) {
        var cPos = counter.getBoundingClientRect().top + window.scrollY,
            topWindow = window.scrollY;

        if (cPos < topWindow + 400) {
            if (cc < 2) {
                document.querySelectorAll(".number").forEach(function(number) {
                    number.classList.add("viz");
                });

                document.querySelectorAll('div').forEach(function(div) {
                    var i = 1,
                        num = parseInt(div.dataset.num),
                        step = 1000 * time / num,
                        int = setInterval(function() {
                            if (i <= num) {
                                div.innerHTML = i;
                            } else {
                                cc += 2;
                                clearInterval(int);
                                if (div.dataset.num) {
                                    div.classList.add('counter-end');
                                }
                            }
                            i++;
                        }, step);
                });
            }
        }
    });
});

$(document).on('click', '.offcanvas-body .header__pc-links a', function(){
    $('.btn-close').click();
});

$(document).ready(function() {
    var floatBlockSel = '.block2 .swiper-slide-active';
    var YTranslate = 'translateY(90px)';
    var YTranslateMore = 'translateY(-30px)';
    $(document).on('mouseenter', floatBlockSel, function(e) {
        if ($('body').width() < 992) {
            return;
        }
        var el = $(e.target);
        var el_img = el.find('img');
        var el_txt = el.find('.sliderTextBlock');
        el.on('mousemove', handleMove);
        function handleMove(e) {
            var xVal = e.offsetX;
            var yVal = e.offsetY;

            var yRotation_img = 20 * ((xVal - el_img.width() / 2) / el_img.width());
            var xRotation_img = -20 * ((yVal - el_img.height() / 2) / el_img.height());

            if (el_txt.length > 0) {
                var yRotation_txt = 20 * ((xVal - el_txt.width() / 2) / el_txt.width());
                var xRotation_txt = -20 * ((yVal - el_txt.height() / 2) / el_txt.height());
            }

            var string_img = 'perspective(500px) scale(1.1) rotateX(' + xRotation_img + 'deg) rotateY(' + yRotation_img + 'deg)';
            el_img.css('transform', string_img);

            if (el_txt.length > 0) {
                var string_txt = 'perspective(500px) ' + YTranslateMore + ' scale(1.12) rotateX(' + xRotation_txt + 'deg) rotateY(' + yRotation_txt + 'deg)';
                el_txt.css('transform', string_txt);
            }
        }

        function resetTransform() {
            el_img.css('transform', 'perspective(500px) scale(1) rotateX(0) rotateY(0)');
            if (el_txt.length > 0) {
                el_txt.css('transform', 'perspective(500px) translateY(0px) scale(1) rotateX(0) rotateY(0)');
            }
        }

        el.on('mouseout', resetTransform);
        el.on('mousedown', resetTransform);
        el.on('mouseup', resetTransform);

        el.on('mouseleave', function() {
            el.off('mousemove', handleMove);
            el.off('mouseout', resetTransform);
            el.off('mousedown', resetTransform);
            el.off('mouseup', resetTransform);
        });
    });
});

document.addEventListener('input', function(e) {
  if (e.target.closest('.form-main input') || e.target.closest('.form-main textarea')) {
      var form = document.querySelector('.form-main');
      var isValid = form.checkValidity();

      var btnContainer = document.querySelector('.btn-container');
      var btnFilter = document.querySelector('.btn-filter');
      var btnFilterButton = document.querySelector('.btn-filter button');

      if (isValid) {
          btnContainer.classList.add('hover');
          btnFilter.classList.add('hover');
          btnFilterButton.classList.add('hover');
      } else {
          btnContainer.classList.remove('hover');
          btnFilter.classList.remove('hover');
          btnFilterButton.classList.remove('hover');
      }
  }
});