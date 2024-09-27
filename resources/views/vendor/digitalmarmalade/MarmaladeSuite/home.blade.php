@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('main')

<div class="dashboard-banner" style="background-image:url({{ asset('vendor/digitalmarmalade/MarmaladeSuite/img/dashboard-banner.jpg') }})"></div>

<nav class="dashboard-minor-links">
    <ul>
        <li><a href="{{ route('msuiteUsers') }}">Admin Users</a></li>	
        <li><a href="{{ route('msuiteTranslations') }}">Label Translations</a></li>
    </ul>
</nav>

<div class="dashboard-holder">

    <div class="dashboard-logo-holder">
        <div class="dashboard-logo">
            <img src="{{ asset('vendor/digitalmarmalade/MarmaladeSuite/img/dashboard-logo.png') }}" alt="Digital Marmalade" />
        </div>
    </div>

    <h1 class="dashboard-heading">Hello {{ Auth::user()->name }}</h1>
    <h2 class="dashboard-subheading js-random-statement">You're looking good. Have you done something different with your hair?</h2>



    <ul class="dashboard-links clearfix">
        @foreach ($navigation->get() as $section)
        <li class="{{ ($section->isActive() ? 'on' : '') }}"><a href="{{ $section->getUrl() }}">{{ $section->getName() }}</a></li>
        @endforeach
    </ul>

    <p>Version: {{ Config::get('msuite.app.name') }} {{ Config::get('msuite.app.version') }}</p>

</div>


<script>

//Put a random statement on the homepage
    var items = [
        "You're looking good. Have you done something different with your hair?",
        "Looks like rain again. Typical.",
        "Man alive. You're looking gooooood!",
        "Snow in November in Moscow means that the swallows will fly early in London.",
        "If your names not down, you're not coming in.",
        "Strangers in the night, exchanging glances",
        "Ooh stick you, your mama too. And your daddy.",
        "A bird in the hand is worth two in the bush.",
        "Roads? Where we're going, we don't need roads.",
        "Good grief Penfold.",
        "Eric is Bananaman",
        "No Mr Bond, I expect you to die.",
        "Gotham City is in trouble. Send for Batman.",
        "Game over man. Game over.",
        "Help me Obi Wan Kenobi, you're my only hope",
        "Toto, I've got a feeling we're not in Kansas anymore.",
        "Go ahead. Make my day.",
        "I love the smell of content management in the morning.",
        "Made it, Ma! Top of the world!",
        "A census taker once tried to test me. I ate his liver with some fava beans and a nice Chianti.",
        "I'll have what she's having.",
        "You're gonna need a bigger boat.",
        "If you build it, They will come.",
        "We'll always have Paris.",
        "You've got to ask yourself one question: 'Do I feel lucky?' Well, do ya, punk?",
        "You had me at 'hello.'",
        "Say 'hello' to my little friend!",
        "Mrs. Robinson, you're trying to seduce me. Aren't you?",
        "Of all the gin joints in all the towns in all the world, she walks into mine.",
        "Here's Johnny!",
        "Open the pod bay doors, HAL.",
        "I am serious... and don't call me Shirley.",
        "Those aren't pillows!",
        "I'll be back",
        "Get to da choppa!",
        "If he dies, he dies",
        "I just wanted to say good luck, we're all counting on you.",
        "You talking to me?",
        "Just keep swimming, swimming, swimming",
        "A martini. Shaken, not stirred",
        "I feel the need - the need for speed!",
        "Carpe diem. Seize the day, boys. Make your lives extraordinary.",
        "I'm king of the world!"
    ];
    var item = items[Math.floor(Math.random() * items.length)];
    $('.js-random-statement').text(item);


</script>











@endsection


