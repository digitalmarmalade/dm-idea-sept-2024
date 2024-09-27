@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')

<main>
  <section class="bg--cctv">
    @include('vendor.digitalmarmalade.badges.computer-vision.header', ['title' => 'Header'])
    @include('vendor.digitalmarmalade.badges.computer-vision.steps', ['title' => 'Steps'])
    <div class="holder flex flex--justify-center">
      <div class="speech-bubble__holder flex flex--center flex--column hide-on-desktop">
        <div
          class="speech-bubble yellow tip--bottom center animate__animated animate__fadeInDown animate__delay-1s animate__fast flex flex--column flex--align-end"
        >
          <div class="flex flex--justify-end Js-not-remove">
            <a class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn animate__delay-3s animate__faster step-2-intro-text-next"
              >Continue</a
            >
          </div>
        </div>
        <img class="animation--alert" src="/badge-assets/computer-vision/_global/svg/animations/animation--alert.svg" alt="" />
      </div>

      <div class="speech-bubble__holder hide-on-mobile flex flex--align-start">
        <img class="animation--alert" src="/badge-assets/computer-vision/_global/svg/animations/animation--alert.svg" alt="" />

        <div
          class="speech-bubble yellow tip--left animate__animated animate__fadeInRight animate__delay-1s animate__fast flex flex--column flex--align-end"
        >
          <div class="flex flex--justify-end Js-not-remove">
            <a class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn animate__delay-1s animate__faster step-2-intro-text-next"
              >Continue</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section-2" class="hide">
    <div class="holder flex flex--column flex--center">
      <h1 class="section__title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">How does computer vision work?</h1>

      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="col">
          <p>
            Your computer screen is made up of small dots or squares called pixels. These pixels are the basic building blocks of a digital image.
          </p>
          <div class="box cobalt">
            <strong class="text-transform--uppercase">Tip</strong>
            <p>You can learn more about Pixel Art, and design your own monsters in the Silver Maker badges.</p>
          </div>
        </div>
        <div class="col">
          <p>An image is formed when many pixels are placed side by side, displaying different colours or tones.</p>
          <p>
            In computer vision, computers are trained to process an image at pixel level, so rather than viewing an image as a whole, the computer
            divides the image into pixels. Each pixel is assigned a number, allowing the computer to interpret and store the image based on the
            resulting
            <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">array</span>
            of numbers.
          </p>
        </div>
      </div>

      <div class="flex flex--space-between holder--pixelated-img flex--center width--full">
        <figure data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <img src="/badge-assets/computer-vision/_global/svg/matrix--greyscale.svg" alt="Pixelated image" />
          <figcaption class="text-transform--uppercase text-align--center">
            <strong>An image</strong>
          </figcaption>
        </figure>

        <figure data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img src="/badge-assets/computer-vision/_global/svg/matrix--index-greyscale.svg" alt="Pixelated image showing greyscale index in pixels" />
          <figcaption class="text-transform--uppercase text-align--center">
            <strong>How a computer processes the image</strong>
          </figcaption>
        </figure>

        <figure data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img src="/badge-assets/computer-vision/_global/svg/matrix--index.svg" alt="Matrix showing greyscale index in pixels" />
          <figcaption class="text-transform--uppercase text-align--center">
            <strong>How a computer stores the image</strong>
          </figcaption>
        </figure>
      </div>

      <img
        class="width--auto"
        src="/badge-assets/computer-vision/_global/svg/greyscale.svg"
        alt="Grayscale indexes"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="600"
      />

      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
        <div class="col">
          <p>Notice that this is a grayscale image.</p>
          <p>
            Grayscale images are made up of different intensities of white and black. The computer reads these as numbers between 0 to 255. 0 is black
            and 255 is white.
          </p>
        </div>
        <div class="col">
          <p>The grayscale image that we see, is actually ‘seen’ by the computer as numbers in a grid. The grid is the same size as the image.</p>
          <p>Editing the numbers in the grid will change how the image looks.</p>
        </div>
      </div>
    </div>
    @include('vendor.digitalmarmalade.badges.computer-vision.task_2')
  </section>

  <section class="hide jsScrollAnchor2">
    <div class="holder flex flex--column flex--center">
      <h2 class="section__title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">How about images with colour?</h2>

      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="col">
          <p>Colour is made by mixing other basic colours; in this case, the RGB (Red, Green, Blue) colour model is used.</p>
          <p>
            The main purpose of the RGB colour model is for the sensing, representation, and the display of images in electronic systems, such as
            televisions and computers.
          </p>
          <p></p>
          <p>As with the grayscale image, the computer reads each colour as numbers between 0 and 255.</p>
        </div>
        <div class="col">
          <p>0 means that there’s no colour element in the pixel, while 255 means that we maximised the intensity of that particular colour.</p>
          <p>
            This means that instead of having only one number to describe a colour, we now need three numbers per pixel. This is known as the RGB
            value. It’s a lot more information to process, compared to a simple grayscale image.
          </p>
        </div>
      </div>

      <picture class="flex flex--center width--full" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <source media="(min-width:600px)" srcset="/badge-assets/computer-vision/_global/svg/illustration--rgb.svg" />
        <img class="width--auto" src="/badge-assets/computer-vision/_global/svg/illustration--rgb-sm.svg" alt="Representation of rgb matrix." />
      </picture>

      <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        This is an example of what each pixel looks like with RGB values.
      </p>

      <div class="col-single box cobalt" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <strong class="text-transform--uppercase">Tip</strong>
        <p>You can learn more about colour manipulation, models, spaces and schemes in the Colours Bronze badge.</p>
      </div>
    </div>
    @include('vendor.digitalmarmalade.badges.computer-vision.task_3')
  </section>

  <div class="tooltip_templates">
    <span id="tooltip1_content">
      <p>A range of numbers.</p>
    </span>
  </div>
</main>
@endsection @section('javascript')

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_2.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_3.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/text-box/step_2_intro.js"></script>
<script>
  $(document).ready(function () {
    var triggerMode = "hover";

    if ($("body").hasClass("touch")) {
      triggerMode = "click";
    }

    $(".jsTooltip").tooltipster({
      trigger: triggerMode,
      maxWidth: 350,
    });
  });
</script>
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>

@endsection
