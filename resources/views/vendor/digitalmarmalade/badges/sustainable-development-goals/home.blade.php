@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="home"
@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.sustainable-development-goals.header', ['title' => 'Header'])

<main class="">

	<section class="no-min-height">
		<img src="/badge-assets/{{$url['slug']}}/_global/img/home/globe.svg" class="home__globe" />

		<div class="home__intro">
			<h1 class="home__title">

				<div data-aos="fade-up" data-aos-delay="100">Sustainable</div>
				<div  data-aos="fade-up" data-aos-delay="200"><span>Development Goals</span></div>
				 
			</h1>

			<div class="home__intro-text">    			
    			<p data-aos="fade-up" data-aos-delay="300">Getting to know the UN Global Goals and why they matter, helps us all better understand how we can play our part. This iamtheCODE badge helps decode the Goals and shows how individuals, businesses, communities and technology can all help advance them, and change the world.</p>
    			<p data-aos="fade-up" data-aos-delay="400">In this badge you will: </p>
			</div>
		</div>

		<div class="home__people">

			<div class="home__characters">

				<img src="/badge-assets/{{$url['slug']}}/_global/img/home/illustration--history.png" class="home__people-history" />

				<img src="/badge-assets/{{$url['slug']}}/_global/img/home/illustration--importance.png" class="home__people-importance" />

				<img src="/badge-assets/{{$url['slug']}}/_global/img/home/illustration--goal-keeper.png" class="home__people-goal-keeper" />
	

				<img src="/badge-assets/{{$url['slug']}}/_global/img/home/illustration--technology.png" class="home__people-technology" />
			</div>
			
			<img src="/badge-assets/{{$url['slug']}}/_global/img/home/people-desktop.png" class="home__people-image" />
			
			<div class="home__button-start">	
				<a  onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--large" data-aos="fade-up" data-aos-delay="100">Let's Begin!</a>
			</div>
		</div>

	</section>
</main>
  @endsection


@section('javascript')

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script>

@endsection
