
<section class="who">
    <div class="container">
        <h2 class="who__title xcondensed"><?= _('speakers-brown-who__title') ?></h2>
        {% set who = true %}
        {% include '@lp/@version-brown/blockquote/block.php' %}
        
        <div class="who__banner">
            <div class="who__banner_box">
                <div class="who__banner_left">
                    <div class="who__banner_left_img"><img src="img/@lp/@version-brown/who/sof.png" class="lazy-loaded" alt=""></div>
                </div>
                <div class="who__banner_center">
                    <div class="who__banner_center_img"><img src="img/@lp/@version-brown/who/photo.jpg" class="lazy-loaded" alt=""></div>
                </div>
                <div class="who__banner_right">
                    <div class="who__banner_right_quote xcondensed">
                        <span class="who__banner_right_line"><?= _('speakers-brown-who__right_1') ?></span><br>
                        <span class="who__banner_right_line"><?= _('speakers-brown-who__right_2') ?></span><br>
                        <span class="who__banner_right_line who__banner_right_background"><?= _('speakers-brown-who__right_3') ?></span><br>
                        <span class="who__banner_right_line who__banner_right_background"><?= _('speakers-brown-who__right_4') ?></span>
                    </div>
                    <div class="who__buttonbox">
                        <a href="#popup-reg" class="who__button button button_link" data-fancybox><?= $version_form_button ?></a>
                    </div>
                </div>
            </div>
        </div>
        
            {% set who = false %}
            {% set who_2 = true %}
            {% include '@lp/@version-brown/blockquote/block.php' %}
    </div>

</section>