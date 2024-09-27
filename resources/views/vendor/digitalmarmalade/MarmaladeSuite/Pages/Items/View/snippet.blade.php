<div class="row snippet">						
    <div class="col lg-col-1-1">
        <div class="column-content @if ($settings['type'] === 'none')no-link @endif">				
            <h2>{{ $settings['title'] }}</h2>
            <div class="copy">
                <p>
                    {{ $settings['description'] }}
                </p>
            </div>
            @if ($settings['type'] !== 'none')
            <div class="link-container">
               <!-- <a href="#">Download</a>-->
                
                    @if ($settings['type'] === 'link')
                    <a href="{{ $settings['link'] }}" target="{{ ($settings['linknewwindow'] ? '_blank' : '') }}">
                        @if (strlen($settings['linktext']))
                            {{ $settings['linktext'] }}
                        @else
                            {{ $settings['link'] }}
                        @endif
                    </a>
                @elseif ($settings['type'] === 'download')
                    <a href="{{ route('msuiteDownloadPageItemSetting', ['itemId' => $item->getId(), 'settingName' => 'downloadfilepath']) }}" target="_blank">{{ $settings['downloadbuttontext'] }}</a></p>
                @elseif ($settings['type'] === 'email')
                    <a href="mailto://{{ $settings['email'] }}">{{ $settings['emailtext'] }}</a></p>
                @endif
            </div>
              @endif
        </div>
    </div>
</div>