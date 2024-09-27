var $smartHome = $('jsSmartHome'),
	$triggers = $('.jsSmartHomeTriggers'),
	$triggerItem = $triggers.find('li'),
	$overlay = $('.jsOverlay'),
	$openOverlay = $('.js-trigger--overlay-smart-home'),
	$closeOverlay = $('.jsCloseOverlay');
	
$triggerItem.on('click', function(e){

	e.preventDefault();

	var id = $(this).attr('id');

	$(this).toggleClass('selected');

	switch(id) {
		case 'js-trigger--solar-panel-units':
			document.querySelector('.smart-item--solar-panel-units').classList.toggle("active");
		break;
		case 'js-trigger--smart-air-conditioner':
			document.querySelector('.smart-item--air-conditioner').classList.toggle("active");
		break;
		case 'js-trigger--smart-windows':
			document.querySelector('.smart-item--windows').classList.toggle("active");
		break;
		case 'js-trigger--smart-light':
			document.querySelector('.smart-item--light').classList.toggle("active");
		break;
		case 'js-trigger--motion-sensor':
			var sensors = document.querySelectorAll('.smart-item--sensor');
			for(var i = 0; i < sensors.length; i++){
				sensors[i].classList.toggle("active");
			}
		break;
		case 'js-trigger--ev-charging-station':
			document.querySelector('.smart-item--ev-charging-station').classList.toggle("active");
		break;
		case 'js-trigger--smart-microwave':
			document.querySelector('.smart-item--microwave').classList.toggle("active");
		break;
		case 'js-trigger--energy-monitor':
			document.querySelector('.smart-item--energy-monitor').classList.toggle("active");
		break;
		case 'js-trigger--smart-water-heater':
			document.querySelector('.smart-item--water-heater').classList.toggle("active");
		break;
		case 'js-trigger--smart-washing-machine':
			document.querySelector('.smart-item--washing-machine').classList.toggle("active");
		break;
		case 'js-trigger--smart-locker':
			document.querySelector('.smart-item--locker').classList.toggle("active");
		break;
		case 'js-trigger--smart-thermostat':
			document.querySelector('.smart-item--thermostat').classList.toggle("active");
		break;
		case 'js-trigger--smart-fridge':
			document.querySelector('.smart-item--fridge').classList.toggle("active");
		break;
		case 'js-trigger--smart-bathroom-scale':
			document.querySelector('.smart-item--scale').classList.toggle("active");
		break;
		case 'js-trigger--smart-weather-station':
			document.querySelector('.smart-item--weather-station').classList.toggle("active");
		break;
		case 'js-trigger--smart-garage-door':
			document.querySelector('.smart-item--garage-door').classList.toggle("active");
		break;
		case 'js-trigger--smart-water-heater':
			document.querySelector('.smart-item--water-heater').classList.toggle("active");
		break;
		case 'js-trigger--smart-plugs':
			document.querySelector('.smart-item--plugs').classList.toggle("active");
		break;
		case 'js-trigger--smart-heating':
			document.querySelector('.smart-item--heating').classList.toggle("active");
		break;
		case 'js-trigger--smart-vacuum-cleaner':
			document.querySelector('.smart-item--vacuum-cleaner').classList.toggle("active");
		break;
		case 'js-trigger--smart-home-theater':
			document.querySelector('.smart-item--home-theater').classList.toggle("active");
		break;

		default:

	}
});

// Mobile Overlay.
$openOverlay.on('click', function(e){ 
	e.preventDefault();

	$overlay.fadeIn(250);
	$overlay.removeClass('hide');
});

// Close Mobile Overlay.
$closeOverlay.on('click', function(e){ 
	e.preventDefault();

	$overlay.fadeOut(250);
	$overlay.removeClass('hide');
});