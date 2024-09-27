@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
class="success bg-cream"
@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.sustainable-development-goals.header', ['title' => 'Header'])

<main class="">


	<section class="no-min-height success">
		<div class="success__intro">
			<h1 class="success__title" data-aos="fade-up" data-aos-delay="100">Congratulations</span></h1>

			<div class="success__intro-text">    			
    			<p data-aos="fade-up" data-aos-delay="200">You have reached the end of the Global Goals badge. You have:</p>
			</div>
		</div>  		

		<div class="success__people">

			<div class="success__characters">

				<img src="/badge-assets/{{$url['slug']}}/_global/img/success/history.png" class="success__people-history" />

				<img src="/badge-assets/{{$url['slug']}}/_global/img/success/matter.svg" class="success__people-importance" />

				<img src="/badge-assets/{{$url['slug']}}/_global/img/success/goalkeeper.svg" class="success__people-goal-keeper" />
	

				<img src="/badge-assets/{{$url['slug']}}/_global/img/success/technology.svg" class="success__people-technology" />
			</div>
			
			<img src="/badge-assets/{{$url['slug']}}/_global/img/home/people-desktop.png" class="success__people-image" />

			<div class="success-wrapper">
				<div class="success-download">
					<p>Before you go, don't forget to download your complete <strong>iamtheCODE</strong> guide to Sustainable Development Goals:</p>
					<a href="/badge-assets/{{$url['slug']}}/_global/pdf/iamthecode-guide-to-sustainable-development.pdf" class="btn btn-download" target="_blank">
						<svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M76.6669 6.66675H53.3334C51.4924 6.66675 50.0001 8.15909 50.0001 10C50.0001 11.841 51.4924 13.3333 53.3334 13.3333H73.3334V73.3333H6.66673V13.3333H26.6668C28.5077 13.3333 30.0001 11.841 30.0001 10C30.0001 8.15909 28.5077 6.66675 26.6668 6.66675H3.33329C1.49235 6.66675 0 8.15909 0 10V76.6668C0 78.5077 1.49235 80 3.33329 80H76.6667C78.5077 80 80 78.5077 80 76.6668V10C80.0002 8.15909 78.5078 6.66675 76.6669 6.66675Z" fill="#322722"/>
						<path d="M25.6894 27.643C24.3877 26.3412 22.277 26.3412 20.9753 27.643C19.6736 28.9447 19.6736 31.0553 20.9753 32.357L37.6421 49.0238C37.6427 49.0244 37.6433 49.0247 37.6438 49.0253C37.721 49.1023 37.8019 49.1753 37.8863 49.2445C37.9249 49.2763 37.9655 49.3038 38.0052 49.3334C38.0525 49.3689 38.0989 49.4056 38.1483 49.4386C38.1958 49.4703 38.245 49.4978 38.2938 49.5269C38.3385 49.5536 38.3821 49.5816 38.428 49.6063C38.4777 49.6328 38.5286 49.6553 38.5794 49.6792C38.6274 49.7019 38.6746 49.7258 38.7236 49.7463C38.7728 49.7666 38.8232 49.7831 38.8732 49.8009C38.9258 49.8198 38.9777 49.84 39.0314 49.8562C39.0814 49.8714 39.1324 49.8825 39.1829 49.8952C39.2377 49.9091 39.2919 49.9244 39.3477 49.9355C39.4063 49.947 39.4654 49.9541 39.5243 49.9625C39.5729 49.9694 39.6207 49.9787 39.67 49.9836C39.8888 50.0052 40.1093 50.0052 40.328 49.9836C40.3772 49.9787 40.425 49.9695 40.4738 49.9625C40.5327 49.9541 40.5919 49.9472 40.6504 49.9355C40.7063 49.9244 40.7604 49.9091 40.8152 49.8952C40.8658 49.8825 40.9166 49.8714 40.9666 49.8562C41.0204 49.84 41.0724 49.8198 41.1249 49.8009C41.1749 49.783 41.2252 49.7666 41.2744 49.7463C41.3236 49.7259 41.3707 49.7019 41.4186 49.6792C41.4693 49.6553 41.5204 49.6328 41.57 49.6063C41.616 49.5816 41.6596 49.5536 41.7043 49.5269C41.753 49.4978 41.8022 49.4703 41.8497 49.4386C41.8991 49.4056 41.9454 49.3689 41.9929 49.3334C42.0325 49.3038 42.0732 49.2763 42.1118 49.2445C42.1961 49.1753 42.2772 49.1023 42.3543 49.0253C42.3549 49.0247 42.3555 49.0244 42.356 49.0238L59.0227 32.357C60.3245 31.0553 60.3245 28.9447 59.0227 27.643C57.721 26.3412 55.6104 26.3412 54.3087 27.643L43.3324 38.6192V3.33328C43.3324 1.49234 41.84 0 39.9991 0C38.1582 0 36.6658 1.49234 36.6658 3.33328V38.6192L25.6894 27.643Z" fill="#322722"/>
						</svg>
						Download!
					</a>

				</div>
				<div class="success-claim-points">
					<p>Don’t forget you can find out more about <strong>iamtheCODE</strong> by looking at their website, but first remember to claim your points and win your badge!</p>
					<a href="{{$links['submit']}}" class="btn btn-claim-points">Claim iDEA points</a>

				</div>
			</div>
		</div>

	</section>
</main>
@endsection

@section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script>

@endsection
