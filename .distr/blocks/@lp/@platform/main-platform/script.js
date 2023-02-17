$(function(){


	var
	$timer_countdown = $('#main-final-countdown__timer'),
	$wraper = $timer_countdown.parent()
	;

	if(!$timer_countdown.length || !$.fn.FlipClock) return;

	var
	clock,
	$days_label,
	$hours_label,
	$minutes_label,
	$seconds_label,
	currentDate = new Date(),
	futureDate = new Date(2019, 9, 4, 12, 0, 0),
	diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000
	;

	if(diff < 0) return;

	clock = $timer_countdown.FlipClock(diff, {
		clockFace: 'HourlyCounter',
		autoStart: false,
		countdown: true,
		showSeconds: true,
		language: 'ru',
		callbacks: {
			start: function() {
				updateClock(clock);
			},
			interval: function() {
				updateClock(clock);
			},
			stop: function() {
				$wraper.addClass('d-none');
			}
		}
	});

	clock.start();

	function updateClock(clock) {
		if(!clock) return;

		// if (!$days_label) $days_label = $('span.days span.flip-clock-label', $timer_countdown);
		if (!$hours_label) $hours_label = $('span.hours span.flip-clock-label', $timer_countdown);
		if (!$minutes_label) $minutes_label = $('span.minutes span.flip-clock-label', $timer_countdown);
		if (!$seconds_label) $seconds_label = $('span.seconds span.flip-clock-label', $timer_countdown);

		var
		time = clock.getTime(),
		days = time.getDays(),
		hours = time.getHours() - time.getDays() * 24,
		minutes = time.getMinutes() - time.getHours() * 60
		seconds = time.getSeconds() - time.getMinutes() * 60
		;

		setTimeout(function(){
			// $days_label.text( getDeclination(days, ['день', 'дня', 'дней']));
			$hours_label.text( getDeclination(hours, ['час', 'часа', 'часов']));
			$minutes_label.text( getDeclination(minutes, ['минута', 'минуты', 'минут']));
			$seconds_label.text( getDeclination(seconds, ['секунда', 'секунды', 'секунд']));
		}, 1);
	}

	function getDeclination(number, text) {
		cases = [2, 0, 1, 1, 1, 2];
		return text[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
	}


});