var $smartCity = $('.jsSmartCity'),
	$smartCityTriggers = $('.jsSmartCityTriggers'),
	$smartCityTriggerItem = $smartCityTriggers.find('.jsCityTrigger');

function removeClasses(skip){

	var items = ['.speech-bubble--smart-lighting',
	'.speech-bubble--smart-lighting_2',
	'.speech-bubble--parking-monitors',
	'.speech-bubble--solar-panels',
	'.speech-bubble--traffic-systems',
	'.speech-bubble--connected-cars',
	'.speech-bubble--automatic-leakage-management',
	'.speech-bubble--smart-waste-bins'];

	for (var i = 0; i < items.length; i++) {
		if(items[i] != skip){
			document.querySelector(items[i]).classList.remove('active');
		}
	}
}

$smartCityTriggerItem.on('click', function(e){

	e.preventDefault();

	var id = $(this).attr('id');

	switch(id) {
		case 'trigger--smart-lighting':
			document.querySelector('.speech-bubble--smart-lighting').classList.toggle("active");
			removeClasses('.speech-bubble--smart-lighting');
		break;
		case 'trigger--smart-lighting_2':
			document.querySelector('.speech-bubble--smart-lighting_2').classList.toggle("active");
			removeClasses('.speech-bubble--smart-lighting_2');
		break;
		case 'trigger--parking-monitors':
			document.querySelector('.speech-bubble--parking-monitors').classList.toggle("active");
			removeClasses('.speech-bubble--parking-monitors');
		break;
		case 'trigger--solar-panels':
			document.querySelector('.speech-bubble--solar-panels').classList.toggle("active");
			removeClasses('.speech-bubble--solar-panels');
		break;
		case 'trigger--traffic-systems':
			document.querySelector('.speech-bubble--traffic-systems').classList.toggle("active");
			removeClasses('.speech-bubble--traffic-systems');
		break;
		case 'trigger--connected-cars':
			document.querySelector('.speech-bubble--connected-cars').classList.toggle("active");
			removeClasses('.speech-bubble--connected-cars');
		break;
		case 'trigger--automatic-leakage-management':
			document.querySelector('.speech-bubble--automatic-leakage-management').classList.toggle("active");
			removeClasses('.speech-bubble--automatic-leakage-management');
		break;
		case 'trigger--smart-waste-bins':
			document.querySelector('.speech-bubble--smart-waste-bins').classList.toggle("active");
			removeClasses('.speech-bubble--smart-waste-bins');
		break;
		default:
	}
});