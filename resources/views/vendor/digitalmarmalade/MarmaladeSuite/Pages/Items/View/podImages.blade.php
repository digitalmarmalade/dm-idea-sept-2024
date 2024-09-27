<div class="row pod-images no-of-images-{{ count($settings['pods']) }}">		
    @foreach ($settings['pods'] as $podId => $pod)				
    <div class="col @if ($pod['includelink']) has-link @endif lg-col-1-{{ count($settings['pods']) }}">
        <div class="column-content">				
            <div class="img">
                <img src="{{ route('msuiteDownloadPageItemSetting', ['itemId' => $item->getId(), 'settingName' => 'imagefilepath', 'podId' => $podId]) }}" alt="{{ $pod['title'] }}" />
                <div class="cover"><div></div><div></div></div>
                <div class="more"><div class="bg"></div><span>More</span></div>
            </div>
            <div class="copy">
                <h2>{{ $pod['title'] }}</h2>
                <p>{{ $pod['description'] }}</p>
            </div>            
        </div>
        @if ($pod['includelink'])
        <a href="{{ SwimWalesUrl::urlFromUrl($pod['link']) }}" target="{{ $pod['linknewwindow'] ? '_blank' : '' }}">{{ $pod['title'] }}</a>
        @endif
    </div> 
    @endforeach    
 </div>  