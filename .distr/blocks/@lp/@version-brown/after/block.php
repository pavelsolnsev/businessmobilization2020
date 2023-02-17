<section class="after">
    <div class="container">
        <h2 class="after__title xcondensed"><?= _('speakers-brown-after__title') ?></h2>
        {% set after = true %}
        {% include '@lp/@version-brown/blockquote/block.php' %}
    
        <div class="after__banner">
            <div class="after__banner_box">
                <div class="after__banner_left">
                    <div class="after__banner_left_img"><img src="img/@lp/@version-brown/after/sof.png" class="lazy-loaded" alt=""></div>
                </div>
                <div class="after__banner_center">
                    <div class="after__banner_center_img"><img src="img/@lp/@version-brown/after/photo-2.jpg" class="lazy-loaded" alt=""></div>
                </div>
                <div class="after__banner_right">
                    <div class="after__banner_right_quote xcondensed">
                        <span class="after__banner_right_line"><?= _('speakers-brown-after__right_1') ?></span><br>
                        <span class="after__banner_right_line"><?= _('speakers-brown-after__right_2') ?></span><br>
                        <span class="after__banner_right_line"><?= _('speakers-brown-after__right_3') ?></span><br>
                        <span class="after__banner_right_line after__banner_right_background"><?= _('speakers-brown-after__right_4') ?></span><br>
                        <span class="after__banner_right_line after__banner_right_background"><?= _('speakers-brown-after__right_5') ?></span>
                    </div>
                    <div class="after__buttonbox">
                        <a href="#popup-reg" class="after__button button button_link" data-fancybox><?= $version_form_button ?></a>
                    </div>
                </div>
            </div>
        </div>
        
        {% set after = false %}
        {% set after_2 = true %}
        {% include '@lp/@version-brown/blockquote/block.php' %}
    </div>
</section>