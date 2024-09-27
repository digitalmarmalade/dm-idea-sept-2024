@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>

  <section class='flex flex--center flex--column'>
    <div class='holder'>

    <img src="/badge-assets/agnes/_global/svg/animation--intro.svg" alt="" />


    <h1>Digital Ethics</h1>




    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong> { copy } </strong></li>
      <li class='box flex flex--center'><strong> { copy } </strong></li>
      <li class='box flex flex--center'><strong> { copy } </strong></li>
      <li class='box flex flex--center'><strong> { copy } </strong></li>
      <li class='box flex flex--center'><strong> { copy } </strong></li>
      <li class='box flex flex--center'><strong> { copy } </strong></li>
    </ul>

    <a class="btn btn--yellow inline-flex flex--center btn--margin-bottom" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400" > { copy } </a>



  </div>
</section>

</main>



@endsection
@section('javascript')


@endsection
