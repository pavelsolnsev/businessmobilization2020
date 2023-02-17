{% from './data.php' import data as speakers %}

<section class="discussion" id="discussion">
	<div class="container">
		<div class="discussion__suptitle title">Панельная дискуссия</div>
		<div class="discussion__title title"><?= $discussion_title ?></div>

		<div class="row speakers__row" >

			<?php foreach ($version_discussion_speakers as $id => $item) { ?>
				{% for item in speakers %}

					<?php if( $item == '{{ item.id }}' ) { ?>
						<div class="col-6 col-md-4 speakers-card__col">
							<div href="#popup-speakers" class="speakers-card">
								<div class="speakers-card__image" data-image>
								<?php if( $version_discussion_moderator == '{{ item.id }}' ) { ?>
									<div class="speakers-card__date">Модератор</div>
								<?php }?>
									<?= picture("img/speakers/card/{{ item.id }}.png", "lazy") ?>
								</div>
								<div class="speakers-card__text">
									<div class="speakers-card__name condensed" data-name><?= _('speakers-{{ item.id }}-name') ?? '' ?></div>
									<div class="speakers-card__note" data-note><?= _('speakers-{{ item.id }}-note') ?? '' ?></div>
									<div class="speakers-card__info" data-info><?= _('speakers-{{ item.id }}-info') ?? '' ?></div>
									{% if item.logo %}<div class="speakers-card__logo"><?= picture("img/speakers/logo/{{ item.logo }}.png", "lazy") ?></div>{% endif %}
								</div><!-- speakers-card__text -->
							</div><!-- speakers-card -->
						</div><!-- col -->
					<?php }  ?>

				{% endfor %}
			<?php } ?>

		</div><!-- row -->

		<?php /* ?>
		<div class="speakers__link-more button" data-more-button>
			<i class="speakers__link-more-icon speakers__link-more-icon_1"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_2"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_3"></i>
			<?= _('speakers__link-more') ?>
		</div><!-- speakers__link-more -->
		<?php */ ?>

	</div><!-- container -->
</section><!-- discussion -->
