@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-1-4.svg" alt="Progress Bar Section One" />
        </header>

       <div class="other-payment-methods">
        <section class="top">
            <div class="main-content centre-col">
                <h2 class="fadeUp t-animated"> <span>ELECTRONIC FUNDS TRANSFER</span>OTHER PAYMENT METHODS</h2>
                <p class="fadeUp t-animated">Ok, so with all these electronic payment methods why would you want to use anything else?</p>
                <div class="row centred-text">
                    <div class="md-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/cheque.svg" alt="Cheque illustration" />
                            <h3 class="fadeUp t-animated">CHEQUE</h3>
                            <p class="fadeUp t-animated">Well, you may want to send someone money in the post – you can use a cheque to do this.</p>
                        </div>
                    </div>
                    <div class="md-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated"  src="/badge-assets/{{$url['slug']}}/_global/img/wire-transfer.svg" alt="Wire transfer illustration" />
                            <h3 class="fadeUp t-animated">WIRE TRANSFER</h3>
                            <p class="fadeUp t-animated">You may want to send money overseas – you can use a wire transfer to do this.</p>
                        </div>
                    </div>
                </div>
                 <div class="row centred-text">
                    <div class="md-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/currency-card.svg" alt="Currency Card illustration" />
                            <h3 class="fadeUp t-animated">CURRENCY CARD</h3>
                            <p class="fadeUp t-animated">You may want to avoid charges when spending money overseas – you can use a currency card to do this.</p>
                        </div>
                    </div>
                    <div class="md-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/atm.svg" alt="ATM illustration" />
                            <h3 class="fadeUp t-animated">ATM</h3>
                            <p class="fadeUp t-animated">Or you might even want go to a bank, building society or cashpoint/ATM and get cash out!</p>
                        </div>
                    </div>
                </div>
                <p class="cta centre-cta zoomOut t-animated"><a href="#" class="btn btn-primary animsition-link">next</a></p>
           </div>
       </section>


         <section class="bottom">
               <div class="main-content centre-col">
                  <p>Let's play the card game <span>'SNAP'</span>! Click on a card to see what it is and see if you can find one to match.</p>

                  <div class="wrap">
                    <div class="game"></div>
                    <div class="modal">
                      <div id="next-section" class="next-section">
                         <p class="centred-text">Well done! Let's move on to the next topic.</p>
                         <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary">next section</a></p>
                     </div>
                    </div>
                  </div><!-- End Wrap -->


              </div>

          </section>
        </div>


        @endsection

        @section('javascript')

        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 4);
            oBadges.redirectIfPreviousStepNotCompleted(3, '{{$links['last']}}');
        </script>

        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })
      </script>

        <script>

        $(".bottom").hide();
        $( ".cta" ).click(function() {
          $(".top").fadeOut();
          $(".bottom").fadeIn();
        });

          // Memory Game
          // © 2014 Nate Wiley
          // License -- MIT
          // best in full screen, works on phones/tablets (min height for game is 500px..) enjoy ;)

          (function(){

          	var Memory = {

          		init: function(cards){
          			this.$game = $(".game");
          			this.$modal = $(".modal");
          			this.cardsArray = $.merge(cards, cards);
          			this.shuffleCards(this.cardsArray);
          			this.setup();
          		},

          		shuffleCards: function(cardsArray){
          			this.$cards = $(this.shuffle(this.cardsArray));
          		},

          		setup: function(){
          			this.html = this.buildHTML();
          			this.$game.html(this.html);
          			this.$memoryCards = $(".card");
          			this.binding();
          			this.paused = false;
               	this.guess = null;
          		},

          		binding: function(){
          			this.$memoryCards.on("click", this.cardClicked);
          			// this.$restartButton.on("click", $.proxy(this.reset, this));
          		},
          		// kinda messy but hey
          		cardClicked: function(){
          			var _ = Memory;
          			var $card = $(this);
          			if(!_.paused && !$card.find(".inside").hasClass("matched") && !$card.find(".inside").hasClass("picked")){
          				$card.find(".inside").addClass("picked");
          				if(!_.guess){
          					_.guess = $(this).attr("data-id");
          				} else if(_.guess == $(this).attr("data-id") && !$(this).hasClass("picked")){
          					$(".picked").addClass("matched");
          					_.guess = null;
          				} else {
          					_.guess = null;
          					_.paused = true;
          					setTimeout(function(){
          						$(".picked").removeClass("picked");
          						Memory.paused = false;
          					}, 600);
          				}
          				if($(".matched").length == $(".card").length){
          					_.win();
                    oBadges.stepCompleted();

          				}
          			}
          		},

          		win: function(){
          			this.paused = true;
          			setTimeout(function(){
          				Memory.showModal();
          			}, 1000);
          		},

          		showModal: function(){
          			this.$modal.fadeIn("slow");
                //window.scrollTo(0,document.body.scrollHeight);
                $("html, body").animate({ scrollTop: $(document).height() }, 1000);
          		},

          		hideModal: function(){
          			this.$modal.hide();
          		},

          		reset: function(){
          			this.hideModal();
          			this.shuffleCards(this.cardsArray);
          			this.setup();
          			this.$game.show("slow");
          		},

          		// Fisher--Yates Algorithm -- https://bost.ocks.org/mike/shuffle/
          		shuffle: function(array){
          			var counter = array.length, temp, index;
          	   	// While there are elements in the array
          	   	while (counter > 0) {
                  	// Pick a random index
                  	index = Math.floor(Math.random() * counter);
                  	// Decrease counter by 1
                  	counter--;
                  	// And swap the last element with it
                  	temp = array[counter];
                  	array[counter] = array[index];
                  	array[index] = temp;
          	    	}
          	    	return array;
          		},

          		buildHTML: function(){
          			var frag = '';
          			this.$cards.each(function(k, v){
          				frag += '<div class="card" data-id="'+ v.id +'"><div class="inside">\
          				<div class="front"><img src="'+ v.img +'"\
          				alt="'+ v.name +'" /><p>'+ v.p +'</p></div>\
          				<div class="back"></div></div>\
          				</div>';
          			});
          			return frag;
          		}
          	};

          	var cards = [
          		{
          			name: "credit-card",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/credit-card.svg",
          			id: 1,
                p: 'Credit Card'
          		},
          		{
          			name: "debit-card",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/debit-card.svg",
          			id: 2,
                p: 'Debit Card'
          		},
          		{
          			name: "pay-pal",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/logo-paypal.svg",
          			id: 3,
                p: 'PayPal'
          		},
          		{
          			name: "apple-pay",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/logo-applepay.svg",
          			id: 4,
                p: 'Apple Pay'
          		},
          		{
          			name: "direct-debit",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/logo-directdebit.svg",
          			id: 5,
                p: 'Direct Debit'
          		},
          		{
          			name: "standing-order",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/logo-standingorder.png",
          			id: 6,
                p: 'Standing Order'
          		},
          		{
          			name: "cheque",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/cheque.svg",
          			id: 7,
                p: 'Cheque'
          		},
          		{
          			name: "wire-transfer",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/wire-transfer.svg",
          			id: 8,
                p: 'Wire Transfer'
          		},
          		{
          			name: "currency-card",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/currency-card.svg",
          			id: 9,
                p: 'Currency Card'
          		},
          		{
          			name: "atm",
          			img: "/badge-assets/{{$url['slug']}}/_global/img/atm.svg",
          			id: 10,
                p: 'ATM'
          		},

          	];

          	Memory.init(cards);


          })();
          </script>

          @endsection
