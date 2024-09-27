@if (config('app.debug'))
<div class="current-nav" style="width: 100px; right: 200px;"><a href="#" class="js-debug-data" style="color: #fff">Debug Data</a></div>
<div class="current-nav" style="width: 200px; text-align: right;">{{ Route::current()->getUri() }}</div>
<div class="current-nav" style="right: 300px; width: 200px; "></div>
<div style="display: none;" class="js-debug-data-content">
    {{ \App\Http\Resources\DigitalMarmalade\Debug\Dumper\Dumper::get($__data) }}
</div>
<script>
    $(document).ready(function() {
        if (window.name === "") {
            window.name = 'MsuiteWindow_' + (new Date().getTime());
        }
        $('.js-debug-data').on('click', function(event) {
            event.preventDefault();
            var w = window.open('', 'debug' + window.name, 'width=800,height=800,resizeable,scrollbars');
            w.document.write($('.js-debug-data-content').text());
            w.document.close();
            if (localStorage.getItem('debug' + window.name) === null) {
                localStorage.setItem('debug' + window.name, 1);
            }
            window.setInterval(function() {
                if (w.closed) {
                    localStorage.removeItem('debug' + window.name);
                }
            }, 200);
        });
        if (localStorage.getItem('debug' + window.name) == 1) {
            $('.js-debug-data').click();
        }
    });
</script>
@endif