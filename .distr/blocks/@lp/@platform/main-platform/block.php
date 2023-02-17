{% import '@lp/@platform/form/macro.php' as form %}

<div class="main-platform__bg">
	<section class="main-platform-1 main-platform" id="main-platform-1">
		<div class="container main-platform__container">

			<div class="main-platform__title"><?= _('main-platform__title') ?></div>
			<div class="main-platform__logo">
				<picture>
					<source srcset="img/@lp/@platform/main-platform/logo-mobile.svg" media="(max-width: 768px)"/>
					<source srcset="img/@lp/@platform/main-platform/logo.svg"/>
					<img src="img/@lp/@platform/main-platform/logo.svg" alt="">
				</picture>
			</div>
			<div class="main-platform__description">
				<span><?= _('main-platform__description-1') ?></span>
				<span><?= _('main-platform__description-2') ?></span>
				<span><?= _('main-platform__description-3') ?></span>
			</div>
			<div class="form-horizontal lazy">
				<?php if ($version != 'blogger') { ?>
					{{ form.form( 'main-platform-1', button_class='button_red' )}}
				<?php } ?>
			</div>
		</div><!-- container -->

		<?php if ($version == 'blogger') { ?>
			<div class="container">
				<div class="d-md-block block-blogger">
					<div class="form-horizontal form-horizontal-blogger lazy">
						<div class="main-platform__discount">
							{{ form.form( 'main-platform-1' , add_fields=[{name: 'promocode', placeholder: 'Промокод', required: 'required', value: '<?=$promocode?>'}] ) }}
							<div class="not_form-pocket">
								<div class="main-platform__pocket">
									<div class="main-platform__pocket-small_top">пакет участия</div>
									<div class="main-platform__pocket-name">Business -50%</div>
									<div class="main-platform__pocket-price">
										<div class="main-platform__pocket-discount">1500 ₽ / мес.</div>
										<div class="main-platform__pocket-time">7&nbsp;дней за&nbsp;1&nbsp;рубль</div>
									</div>
									<div class="main-platform__pocket-list">
										<ul>
											<li>7-дневный доступ к&nbsp;Базе знаний &laquo;Синергии&raquo;</li>
											<li>Доступ к&nbsp;прямой трансляции всех Synergy Online Forum в&nbsp;течение 1&nbsp;месяца</li>
											<li>Доступ к&nbsp;записи трансляции Synergy Online Forum на&nbsp;48&nbsp;часов</li>
											<li>Доступ к&nbsp;Synergy CRM на&nbsp;60&nbsp;дней</li>
										</ul>
									</div>
									<div class="main-platform__pocket-small_bottom">Отмена подписки в&nbsp;любой момент в&nbsp;Личном кабинете</div>
									<div class="main-platform__pocket-bottom">При вводе промокода скидка на&nbsp;академические тарифы&nbsp;50%</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

	</section><!-- main-platform -->
</div><!-- main-platform__bg -->
