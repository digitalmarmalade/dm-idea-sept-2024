<!--
<div>
    <h2>{{ $settings['title'] }}</h2>
    
    @if ($settings['includelink'])
        <a href="{{ $settings['link'] }}" target="{{ ($settings['linknewwindow'] ? '_blank' : '') }}">
    @endif
    
    <img src="{{ route('msuiteDownloadPageItemSetting', ['itemId' => $item->getId(), 'settingName' => 'bannerfilepath']) }}" alt="{{ $settings['banneralt'] }}" style="height: 200px" />
    
    @if ($settings['includelink'])
        </a>
    @endif
    
    <p>{{ $settings['description'] }}</p>
</div>

<hr />
-->

<div class="grid">
	<article class="col-1-1 widget-teaser-vertical">
        <div class="column-content">
			<div class="widget-image-holder"><figure><img src="{{ route('msuiteDownloadPageItemSetting', ['itemId' => $item->getId(), 'settingName' => 'bannerfilepath']) }}" alt="{{ $settings['banneralt'] }}"><figcaption></figcaption></figure></div>
			<h1>{{ $settings['title'] }}</h1>
			<div class="widget-text-holder">
				<p>{{ $settings['description'] }}</p>				
			</div>	
            @if ($settings['includelink'])
            <div class="widget-cta-holder"><a class="btn-primary-cta" href="{{ $settings['link'] }}" target="{{ ($settings['linknewwindow'] ? '_blank' : '') }}">Read more</a></div>
            
            @endif
			
        </div>
    </article>
</div>