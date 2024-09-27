
<div class="crossword-mobile">
	<iframe id="crossword-mobile"src="/badge-assets/{{$url['slug']}}/crossword-mobile/index.html" width="100%" height="600" frameborder="0"></iframe>
	<a href="#" class="btn btn--blue inline-flex flex--center check jsCheckMobile">Check</a>
</div>
<!-- 
<div class="crossword-desktop">
	<iframe id="crossword-desktop"src="/badge-assets/{{$url['slug']}}/crossword-desktop/index.html" width="100%" height="580" frameborder="0"></iframe>
	<a href="#" class="btn btn--blue inline-flex flex--center check jsCheckDesktop">Check</a>
</div> -->

<script>

var iframeMobile = document.getElementById("crossword-mobile").contentWindow;
//var iframeDesktop = document.getElementById("crossword-desktop").contentWindow;

var checkMobile = document.querySelector('.jsCheckMobile');
//var checkDesktop = document.querySelector('.jsCheckDesktop');

checkMobile.addEventListener('click', function (e) {
	e.preventDefault();

	var myCustomData = { status: 'check' }
	var event = new CustomEvent('checkGame', { detail: myCustomData })
	
	// Dispatch the event to the iframe.
    iframeMobile.dispatchEvent(event);
});


// checkDesktop.addEventListener('click', function (e) {
// 	e.preventDefault();

// 	var myCustomData = { status: 'check' }
// 	var event = new CustomEvent('checkGame', { detail: myCustomData })
	
// 	// Dispatch the event to the iframe.
//     iframeDesktop.dispatchEvent(event);
// });


// Recieve event from game iframe
// - if Crossword completed successfully.
window.document.addEventListener('myEvent', handleEvent, false);

function handleEvent(e) {
 
  if(e.detail.status === "correct"){
  	document.querySelector('.jsCrosswordNext').classList.add('active');

	$("html, body").animate({
		scrollTop: $('.jsScrollAnchor1').position().top
	}, 1000);
  }
}

</script>
