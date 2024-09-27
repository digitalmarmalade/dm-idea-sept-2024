<div class="row faq">
    <div class="col lg-col-1-1">
        <div class="column-content">		
            <h2>Frequently Asked Questions</h2>                    
            <ul class="ul-faq">
                @foreach ($settings['items'] as $question) 
                <li>
                    <h3 class="trigger">{{ $question['question'] }} <span class="close"></span></h3>                       
                    <div class="copy">
                    <p>{!! nl2br(e($question['answer'])) !!}</p>
                    </div>                    
                </li>
                @endforeach                          
            </ul>
        </div>
    </div>
</div>
