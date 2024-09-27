<script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/iframeResizer.js"></script>


<style>
  iframe {

    min-width: fit-content;

    height: 260px;
    left: 50%;
    transform: translate(-50%);
    margin-left: .8em;
    top: 36px;
    position: relative;
    }

  }
</style>

<iframe id="myWordSearch" src="/badge-assets/{{$url['slug']}}/wordsearch/index.html" width="100%" height="260" frameborder="0"></iframe>

<script>

// Listen for on Completed callback.
window.document.addEventListener('myEvent', handleEvent, false)

function handleEvent(e) {

  console.log(e.detail.status)

  var wordsearchNextBtn = document.querySelector('.jsWordsearchNext');

  if(e.detail.status){
  	wordsearchNextBtn.classList.add('wordsearch-next')
  }
}


// $(document).ready(function(){

//   $('.jsWordsearch').each(function(){

//       var _this = $(this),
//       $successFeedback = _this.find('.jsFeedbackSuccess'),
//       animateClasses = _this.find($('[class*="animate__"]'));

//       function addAnimation(){
//           animateClasses.attr('class', function(index, attr) {
//               return attr.replace(/xxx__/g, 'animate__');
//           });
//       }

//       function showSuccessFeedback(){
//         $successFeedback.removeClass('hide');

//         addAnimation();
//       }
      
//       window.document.addEventListener('myEvent', handleEvent, false)

//       function handleEvent(e) {
//         var wordsearchNextBtn = document.querySelector('.jsWordsearchNext');
//         if(e.detail.status){
//           showSuccessFeedback();
//         }
//       }
//   });
// })

</script>