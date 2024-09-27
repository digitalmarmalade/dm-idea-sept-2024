@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')


        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-2-1.svg" alt="Progress Bar Section Two" />
        </header>

      <div class="purchase-order-invoice">
        <section class="top">
            <div class="main-content centre-col">
              <div clas="row">
                <div class="column-content">
                  <h2 class="fadeUp t-animated"><span>ELECTRONIC DATA INTERCHANGE (EDI)</span>PURCHASE ORDERS & INVOICES</h2>
                  <img class="zoomOut t-animated"  src="/badge-assets/{{$url['slug']}}/_global/img/purchase-order_invoice.svg" alt="Illustration showing Purchase Order and Invoice cycle" />
                  <p class="fadeUp t-animated">As well as customers purchasing goods, companies need a way to buy and sell goods. The traditional approach is to use <span>Purchase Orders</span> and <span>Invoices</span>.</p>
                </div>
              </div>
              <div class="row fadeUp t-animated">
                <div class="column-content purchase-order-invoice">

                  <div class="col">
                    <h3>Purchase Order</h3>
                    <p>A <span>Purchase Order</span> is made before a sale by the buyer. Once the seller has accepted the document it becomes a legally-binding contract. This contract is needed because with a <span>Purchase Order</span>, the delivery is usually made to the buyer before payment. A <span>Purchase Order</span> will usually include information such as:</p>
                    <ul>
                      <li>Payment terms</li>
                      <li>Date of delivery</li>
                      <li>Terms & conditions</li>
                      <li>Purchase order number</li>
                      <li>Delivery address</li>
                    </ul>
                  </div>

                  <div class="col">
                    <h3>Invoices</h3>
                    <p>An <span>Invoice</span> is what is given to a buyer which highlights the cost and quantity of a product or service. This is provided by the seller after the sale as opposed to before it. This is useful to the buyer because they know exactly how much money must be paid and in what time frame. <span>Invoices</span> can either be sent through the post or emailed to the buyer. It is a legal contract obliging someone to pay for the goods or services they have received. An <span>Invoice</span> will usually include information such as:</p>
                    <ul>
                      <li>Contact details of the buyer and seller</li>
                      <li>What the product/service is</li>
                      <li>A unique invoice number</li>
                      <li>The total cost that the buyer must pay – taking into account tax and/or discounts</li>
                    </ul>
                  </div>


                </div>
              </div>
              <p class="cta centre-cta zoomOut t-animated"><a href="#" class="btn btn-primary animsition-link">next</a></p>
            </div>
       </section>
       <section class="bottom purchase-order-invoice">
             <div class="main-content centre-col">
                   <p class="">Drag and drop the elements below to the correct group:</p>
                   <div class="task task-5">
                        <div class="row drag-options">
                              <div class="sm-col-1-1 md-col-1-1">
                                  <ul class="reset-list">
                                      <li><a href="#" class="drag-option draggable" id="answer_1_1">Total Amount Due</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_2">Details of Goods</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_3">Terms & Conditions</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_4">Agreed Prices</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_5">Quantity of Goods</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_6">Discount</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_7">Taxes</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_8">Shipping Address</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_9">Billing Address</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_10">Supplier Address</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_11">Buyer Address</a></li>
                                      <li><a href="#" class="drag-option draggable" id="answer_1_12">Buyer Signature</a></li>
                                   </ul>
                             </div>
                           </div>
                           <div class="row">
                                <div class="xs-col-1-2">
                                    <div class="column-content">
                                        <div class="dropzone dropzone-po" id="droppable1">
                                            <h4>PURCHASE ORDER</h4>
                                            <p class="dropped-answers"></p>
                                        </div>
                                    </div>
                               </div>
                                <div class="xs-col-1-2">
                                    <div class="column-content">
                                        <div class="dropzone dropzone-invoice" id="droppable2">
                                            <h4>INVOICE</h4>
                                            <p class="dropped-answers"></p>
                                        </div>
                                    </div>
                               </div>
                           </div>

               </div>
               <div id="next-section" class="next-section hidden">
                    <p class="centred-text">Well done! Let's move on to the next topic.</p>
                    <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary">next section</a></p>
                </div>
            </div>

        </section>
      </div>
        @endsection
        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 5);
            oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
        </script>


        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })


        $(".bottom").hide();
        $( ".cta" ).click(function() {
          $(".top").fadeOut();
          $(".bottom").fadeIn();
        });


                var config = { vFactor: 0.20, mobile: false, delay: 'once' }
              window.sr = new scrollReveal();

              $(function() {

                  var rightAnswers = 0;

            $("#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4, #answer_1_5, #answer_1_6, #answer_1_7, #answer_1_8, #answer_1_9, #answer_1_10, #answer_1_11, #answer_1_12").draggable({

                revert: "invalid",

                drag: function(event, ui) {

                    $('body').addClass('dragging');

                },

                stop: function(event, ui) {

                    $('body').removeClass('dragging');

                }

            });

            $("#droppable1" ).droppable({

                accept: "#answer_1_2, #answer_1_3, #answer_1_5, #answer_1_9, #answer_1_11, #answer_1_12",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');
                    var currentText = 	$(ui.draggable).text();

                    $(this).find("p.dropped-answers").append("<p class='answer'>" + currentText + "</p>");



                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 12) {
                        $( "#next-section" ).slideDown();
                        oBadges.stepCompleted();
                    }

                }

            });

            $("#droppable2" ).droppable({

                accept: "#answer_1_1, #answer_1_4, #answer_1_6, #answer_1_7, #answer_1_8, #answer_1_10",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');
                    var currentText = 	$(ui.draggable).text();

                   $(this).find("p.dropped-answers").append("<p class='answer'>" + currentText + "</p>");


                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 12) {
                      $( "#next-section" ).slideDown();
                      oBadges.stepCompleted();

                    }

                }

            });



        });

        </script>

        @endsection
