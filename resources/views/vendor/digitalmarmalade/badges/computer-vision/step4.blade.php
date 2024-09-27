@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')



<main>

  <section class='bg--cctv-2'>
    @include('vendor.digitalmarmalade.badges.computer-vision.header', ['title' => 'Header'])
    @include('vendor.digitalmarmalade.badges.computer-vision.steps', ['title' =>
    'Steps'])

    <div class="holder flex flex--justify-center">
     <div class="speech-bubble__holder flex flex--center flex--column hide-on-desktop">
       <div class="speech-bubble yellow tip--bottom center animate__animated animate__fadeInDown animate__delay-1s animate__fast flex flex--column flex--align-end">
         <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">The secret agent appears to have been able to slip in and out of the building undetected but the intelligence agency has CCTV cameras set up in all areas surrounding the building and there is a chance that we will be able to find them with our new clue.</p>

         <div class="flex flex--justify-end Js-not-remove">
           <a class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn  animate__delay-1s animate__faster step-4-intro-text-next" >Continue</a>
         </div>
       </div>
       <img class="animation--alert" src="/badge-assets/computer-vision/_global/svg/animations/animation--alert.svg" alt="" />
     </div>

     <div class="speech-bubble__holder hide-on-mobile flex flex--align-start">

      <img class="animation--alert" src="/badge-assets/computer-vision/_global/svg/animations/animation--alert.svg" alt="" />

      <div class="speech-bubble yellow tip--left animate__animated animate__fadeInRight animate__delay-1s animate__fast flex flex--column flex--align-end">
         <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">The secret agent appears to have been able to slip in and out of the building undetected but the intelligence agency has CCTV cameras set up in all areas surrounding the building and there is a chance that we will be able to find them with our new clue.</p>
         <div class="flex flex--justify-end Js-not-remove">
           <a class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn  animate__delay-1s animate__faster step-4-intro-text-next"  >Continue</a>
         </div>
     </div>
    </div>
  </div>
</section>





  <div class="step-4 hide">

    <section>
        <div class='holder flex flex--column flex--center '>

          <h1 class="section__title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Convolutional Neural Network</h1>



            <img class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="/badge-assets/computer-vision/_global/svg/illustration--cnn-1.svg" alt="Representation of an artificial neural network."/>



          <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">This is a representation of an artificial neural network.</p>


          <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <div class="col" >
              <p>A convolutional neural network, abbreviated as CNN, is a type of artificial neural network commonly used to analyse images.

              <p><strong>Artificial neural networks</strong> are computing systems consisting of a collection of connected units called <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">neurons</span> that are modeled after the human brain. Artificial neural networks are used to teach an algorithm how to recognise objects in images and video footage.</p>

              <p>Similar to how a child learns to recognise objects through repetition, we train an algorithm by showing it many pictures to help it become familiarised with an object and be able to make predictions for new images (of the same object) it has never seen. At the end of the CNN process, the computer makes a prediction by assigning a probability for how likely the input image is identified as a specific object.</p>

              <p>This training is done in the middle hidden layers that you see in the diagram. </p>

              <p>The output of the convolution operation will serve as features.</p>
            </div>
            <div class="col">
              <h2 class="subheader">But what do we mean by features?</h2>
              <p>In computer vision, features are parts or patterns of an object that help computers distinguish objects from one another.</p>
              <p>A feature may be:</p>
              <ul>
                <li class='box blue'>A distinct colour in an image</li>
                <li class='box blue'>A specific shape such as a line, edge, or an image segment, such as a wheel. </li>
              </ul>
              <p>These unique features help computers recognise an image and predict what an object may be.</p>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
            <div class=" box bg-grad--blue-light transparent" >
              <div class="cols cols-3 flex flex--column  flex--justify-space-between flex-align--start">
                <div class="col flex flex--column">
                  <h2 class="subheader">O<span>pen</span>CV LIBRARY</h2>
                  <p>Now that you know what image features are, we will learn about a tool that is available to extract these features from images for further processing.</p>
                  <div class="flex width--full flex--center flex-grow--1">
                    <img class="width--auto" src="/badge-assets/computer-vision/_global/svg/logos/logo--openCV.svg" alt="Representation of an artificial neural network."/>
                  </div>
                </div>


                <div class="col" >
                  <h3>What is OpenCV?</h3>

                  <p>OpenCV is an open-source library of computer vision software that provides readily accessible services for everyone to use.</p>

                  <p>OpenCV was originally developed by Intel in 1999 with the goal of advancing vision research by providing open and optimised vision infrastructure code for all to access and build on, and to advance vision-based commercial applications by making portable, performance-optimized code ready to use for free.</p>

                </div>
                <div class="col">
                  <p>If you want to create something using computer vision, you don’t have to build the application from scratch, you can find readily-available algorithms from OpenCV to help with tasks like motion detection, facial recognition, object identification, and tracking eye movements.</p>
                  <p>We will include a link to OpenCV at the end of this badge so you can learn more!</p>

                </div>
              </div>
            </div>
          </div>
          <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">The following illustrates where the CNN sits in a sample application of the computer vision process.</p>


            <img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" src="/badge-assets/computer-vision/_global/svg/illustration--cnn-2.svg" alt="Representation of an artificial neural network."/>

          <div class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" >
            <p>As you can see, the CNN is made up of several layers.</p>
            <p>Convolutional neural networks are made up of four parts all working together to process the input image and help us with the computer vision tasks that we want to implement.</p>
            <p>Let’s see what happens within each layer!</p>
          </div>

      </section>
    <section >
        <div class='holder flex flex--column '>



              <div class="cols cols-3 layers flex flex--column  flex--justify-space-between flex-align--start" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">

                <div class="col layer-index flex" data-aos="fade-down" data-aos-duration="500" data-aos-delay="900">
                  <span >1<span>
                </div>

                <div class="col" >
                  <h2 class="subheader">Convolutional Layer</h2>

                  <p>The convolutional layers detect patterns. Within each layer, filters, also known as kernels, are applied to bring out the image features.</p>

                  <p>The results, or output of this layer is called the feature map.</p>

                </div>
                <div class="col">
                  <p>The feature map serves two main purposes:</p>
                  <ul>
                    <li class='box blue'>Reduces the image size so that it can be processed more efficiently.</li>
                    <li class='box blue'>Helps to process the image further. For example, you might only need to recognize someone’s eyes, nose, and mouth to recognize the person. You might not need to see the whole face.</li>
                  </ul>
                </div>

            </div>

            <div class="width--full flex">

                <img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" class="width--80" src="/badge-assets/computer-vision/_global/svg/illustration--convolutional-layer.svg" alt="Representation of convolutional layer."/>

            </div>

          </div>

      </section>

      <section >
          <div class='holder flex flex--column flex--center '>


                <div class="cols cols-3 layers flex flex--column  flex--justify-space-between flex-align--start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                  <div class="col layer-index flex order-3 " data-aos="fade-down" data-aos-duration="500" data-aos-delay="900">
                    <span>2<span>
                  </div>


                  <div class="col" >
                    <h2 class="subheader">Rectified Linear Unit (R<span>e</span>LU)</h2>

                    <p>Next, there is the Rectified Linear Unit function. Do not let the name intimidate you. This function simply gets rid of all the negative values in the feature map and lets the positive number stay as they are. </p>

                    <p> See the two graphs side by side; the one on the left is a linear graph, the one on the right is the ReLU graph. </p>


                  </div>
                  <div class="col">
                    <p>But why? What does this do? This makes the colour change in the image more obvious, more abrupt. </p>
                    <p>Think of this as enhancing the activation layer.</p>
                    <p>By doing this, we’ve made the more gradual colour change from the latest image we have processed in the convolutional layer (left below) to a more abrupt colour change with more obvious edges, revealing the features.</p>
                  </div>
                </div>

                <div class="width--full flex ">

                    <img  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" class="width--80" src="/badge-assets/computer-vision/_global/svg/illustration--relu.svg" alt="Representation of ReLU."/>

                </div>

              </div>


      </section>

      <section>
          <div class='holder flex flex--column flex--center '>


                <div class="cols cols-3 layers flex flex--column  flex--justify-space-between flex-align--start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                  <div class="col layer-index flex flex--align-center " data-aos="fade-down" data-aos-duration="500" data-aos-delay="900">
                    <span>3<span>
                  </div>


                  <div class="col flex flex--column flex--justify-center" >
                    <h2 class="subheader">Pooling Layer</h2>

                    <p>In the pooling layer, we are interested in reducing the size of the image while still retaining the important features, this helps to ensure the data is processed efficiently.</p>

                  </div>
                  <div class="col">
                    <p>Pooling also helps us:</p>
                    <ul>
                      <li class='box blue'>Make the image more resistant to small transformations, distortions, and translations in the input image. This means that a small difference in the input image will create a very similar pooled image. </li>
                      <li class='box blue'>Create a representation of our image that can help us detect objects in the image, no matter where they are located.</li>
                    </ul>
                  </div>
                </div>


                  <img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" src="/badge-assets/computer-vision/_global/svg/illustration--pooling-layer.svg" alt="Representation of pooling layer."/>


              </div>


      </section>


      <section>
            <div class='holder flex flex--column flex--center '>



                  <div class="cols cols-3 layers flex flex--column  flex--justify-space-between flex-align--start" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">

                    <div class="col layer-index flex order-3" data-aos="fade-down" data-aos-duration="500" data-aos-delay="1000">
                      <span >4<span>
                    </div>

                    <div class="col" >
                      <h2 class="subheader">Fully Connected Layer (Classification)</h2>

                      <p>The fourth and final layer is the Fully Connected Layer.</p>

                      <p>The term “Fully Connected” means that every <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">neuron</span> in the previous layer is connected to every neuron in the next layer.</p>

                    </div>
                    <div class="col">
                      <p>The output from the previous three layers created high-level image features.</p>
                      <p>The Fully Connected Layer uses these high-level image features to classify the input images into various groups based on the training dataset.</p>
                      <p>Each neuron will be given certain functions and <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">weight</span> so that it can give us a probability number that an image contains a certain object.</p>

                    </div>


                  </div>


                  <img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" src="/badge-assets/computer-vision/_global/svg/illustration--fully-connected-layer.svg" alt="Representation of fully connected layer."/>


                  <div class='flex flex--center width--full'>
                    <a class="btn btn--yellow inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
                  </div>

                </div>

                <div class="tooltip_templates">
                    <span id="tooltip1_content">
                        <p>Neurons are “information messengers” that transmit information between different areas of the network.</p>
                    </span>
                    <span id="tooltip2_content">
                        <p>Neurons are “information messengers” that transmit information between different areas of the network.</p>
                    </span>
                    <span id="tooltip3_content">
                        <p>A measure of the influence one result has compared to others. An analogy of this is cooking - some ingredients have a stronger flavour and even small quantities could greatly affect the taste of the dish. Similarly, neurons with greater weight could influence the output more than other neurons with lesser weights.</p>
                    </span>
                </div>


          </section>



  <section class="jsScrollAnchor1"></section>
  </div>
</main>
@endsection
@section('javascript')

<script src="/badge-assets/{{
  $url['slug']
}}/_global/js/text-box/step_4_intro.js"></script>

<script>
    $(document).ready(function() {
	  var triggerMode = 'hover';

	  if($('body').hasClass('touch')){
		  triggerMode = 'click';
	  }

      $('.jsTooltip').tooltipster({
           trigger: triggerMode,
           maxWidth: 350
      });
    });
</script>
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

@endsection
