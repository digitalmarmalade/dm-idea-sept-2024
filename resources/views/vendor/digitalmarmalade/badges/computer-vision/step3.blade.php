@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main>

  @include('vendor.digitalmarmalade.badges.computer-vision.header', ['title' => 'Header'])
  @include('vendor.digitalmarmalade.badges.computer-vision.steps', ['title' =>
  'Steps'])
  <section>
    <div class='holder flex flex--column flex--center '>

      <h1 class="section__title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Image Editing</h1>

      <div class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <p>As you have just seen, when you are editing an image, you are actually changing the numbers on the pixels.</p>
          <p>If you have ever played with a photo editor, such as using filters on Instagram, you are adjusting the effects of your photo by adjusting the numbers on pixels – this is called the convolution process.</p>
          <p>But if each pixel needs to be adjusted, how do you apply one effect across an entire image?</p>
      </div>
    </div>
  </section>
  <section>
    <div class='holder flex flex--column flex--center '>
      <h2 class="section-subheading" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Convolution Kernel</h1>

      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
        <div class="col flex flex--center" >
          <figure data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300" class="illustration--kernel">
            <img  src="/badge-assets/computer-vision/_global/svg/illustration--kernel.svg" alt="Kernel"  />
            <figcaption class='text-transform--uppercase text-align--center'><strong>Kernel</strong></figcaption>
          </figure>
        </div>
        <div class="col flex flex-grow--1 flex--justify-center flex--column" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" class="illustration--kernel">
          <p>The convolution process uses a ‘kernel’ to apply effects such as blurring, sharpening, outlining or embossing. </p>
          <p>A convolution kernel is simply a <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">matrix</span> of numbers. Here, we display a 3x3 convolution kernel where the numbers represent the effect that we want to apply to an image.</p>
        </div>
      </div>
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
        <div class="col flex flex--center text-align--center" >
          <figure data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
            <img class="illustration--pixel-matrix" src="/badge-assets/computer-vision/_global/svg/illustration--pixels-matrix.svg" alt="Matrix of pixels"  />
            <figcaption class='text-transform--uppercase text-align--center'><strong>Pixels Matrix</strong></figcaption>
          </figure>
        </div>
        <div class="col flex flex-grow--1 flex--justify-center flex--column" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
            <p>To apply the effect to an image, you place the convolution kernel over an image displayed as pixels.</p>
            <p>You then multiply each number in the kernel by its corresponding pixel value on the image, and add up all of the values.</p>
            <p>This gives you the new value for the pixel at the centre of the  kernel. The new value represents that pixel with the added effect.</p>
            <p>But what happens along the edges of the image? For example, the top left corner of the input image only has three neighbours. One way to fix this is to extend the edge values out by one in the original image while keeping our new image the same size.</p>
            <p>As the pixel value of the top left corner is 7, you would extend 7 outwards to a column to the left and a row above.</p>
          </div>
      </div>
    </div>
  </section>
  @include('vendor.digitalmarmalade.badges.computer-vision.task_4')


  <!-- Hassan The content below is  hidden until user clicks on the continue button successfully on the activity above -->
  @include('vendor.digitalmarmalade.badges.computer-vision.task_5')



  <!-- Hassan The content below is  hidden until user clicks on the continue button successfully on the activity above -->
  @include('vendor.digitalmarmalade.badges.computer-vision.task_6')


  <!-- Hassan The content below is  hidden until user clicks on the continue button successfully on the activity above -->
  @include('vendor.digitalmarmalade.badges.computer-vision.task_7')


  <!-- Hassan The content below is  hidden until user clicks on the continue button successfully on the activity above -->
  @include('vendor.digitalmarmalade.badges.computer-vision.task_8')

    <div class="tooltip_templates">
        <span id="tooltip1_content">
            <p>
                A matrix is an arrangement of data (e.g. numbers or letters)
                in rows and columns which is used in solving mathematical
                problems.
            </p>
        </span>
    </div>

    <section class="jsScrollAnchor1"></section>
</main>
@endsection @section('javascript')

<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/task_5.js"></script>

<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/task_4.js"></script>


<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/task_6.js"></script>

<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/task_7.js"></script>

<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/task_8.js"></script>
<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/text-box/two_filter.js"></script>

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
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>

@endsection
