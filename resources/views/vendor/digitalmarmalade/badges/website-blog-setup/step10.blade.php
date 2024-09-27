@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-6">
            <div class="top">
                <div class="step">
                    <p>Step 6 of 7<span>Uploading your content (publishing)</span></p>
                </div>
                <h1>Uploading your content (publishing)</h1>
                <div class="holder">
                  <div class="cols">

                    <div class="col">
                        <p>Once you chose your hosting company, you’ll get access to a Control Panel and you need to set up an <b>FTP (<i>File Transfer Protocol</i>) account</b> this is essentially a key to get into your website via an <b>FTP client.</b></p>
                        <p>Alternatively, you can also use a free and a straightforward application, such as <b>Filezilla.</b></p>
                    </div>
                    <div class="col">
                        <p>Download the application, enter your login details, and you’ll be able to access your website’s folder structure. </p>
                        <p>You’ll normally have to navigate to a particular folder to begin uploading. It shouldn’t be very far from the root. Once you're in, you can begin uploading.</p>
                    </div>
                </div>

            </div>
            <img class="hero" src="/badge-assets/{{$url['slug']}}/_global/img/step6-hero.gif" alt="" />
          </div>
          <div class="bottom">
            <a onclick="oBadges.stepCompleted();" class="btn btn-white" href="{{$links['next']}}">Continue</a>
          </div>

        </main>

        @endsection
        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 10);
        </script>
        @endsection
