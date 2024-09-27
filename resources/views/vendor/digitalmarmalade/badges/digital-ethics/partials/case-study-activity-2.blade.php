<div id="case-study-activity-2-slider-{{$case}}" class="flex flex--column gap--lg box box--task bg--offwhite">
    <div class="col flex flex--column gap--xlg flex--center">
        <div class="flex flex--column gap--sm">
            <p>{{ $data['openingStatement'] }} <strong> individuals, society and the world</strong>.</p>
            <p><i>When you have made a selection of low, medium or high for all three sliders, click submit.</i></p>
        </div>

        <div class="flex flex--column col flex--center">

            @php
                $i = 0;
            @endphp
            @foreach($data['questions'] as $group => $statement)
                <div class="flex flex--column col flex--center container--input-range-has-feedback">
                    <div class="container--input-range flex">
                        <h3>{{ $group }}</h3>
                        <div class="flex flex--column gap--sm container--input">
                            <div class="container--input-range__values">
                                <span id="sliderLabel-{{$group}}-{{$case}}"
                                      class="hide container--input-range__value"></span>
                            </div>
                            <input id="sliderQuestion-{{$group}}-{{$case}}" type="range" min="0" max="3" value="0">
                        </div>
                    </div>
                    <div class='hide neutral-1 feedback input-range animate__animated animate__zoomIn animate__fastsusccess'
                         id="jsFeedback-{{$group}}-low-{{$case}}">
                        <div class="feedback__content">
                            <p>{{$statement['low']}}</p>
                        </div>
                    </div>
                    <div class='hide neutral-1 input-range  feedback animate__animated animate__zoomIn animate__fastsusccess'
                         id="jsFeedback-{{$group}}-medium-{{$case}}">
                        <div class="feedback__content">
                            <p>{{$statement['medium']}}</p>
                        </div>
                    </div>
                    <div class='hide neutral-1 input-range  feedback animate__animated animate__zoomIn animate__fastsusccess'
                         id="jsFeedback-{{$group}}-high-{{$case}}">
                        <div class="feedback__content">
                            <p>{{$statement['high']}}</p>
                        </div>
                    </div>
                </div>
                @php $i++; @endphp
            @endforeach


        </div>
        <button id="submitCase{{$case}}Activity2" type="button" class="submitButton btn"
                onclick="submitSlider({{$case}})">Submit
        </button>

        <div class=' success feedback animate__animated animate__zoomIn animate__fastsusccess jsFeedbackSuccess1 hide'
             id="jsFeedbackSuccess-slider-{{$case}}">
            <div class="feedback__content">
                <p>{{ $data['feedbacks']['success'] }}</p>
                <a class="btn" onclick="continueToNextCase()">Continue</a>
            </div>
        </div>

        <div class='fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail-empty-1 hide'
             id="jsFeedbackFail-slider-{{$case}}">
            <div class="feedback__content">
                <p>You won’t be able to move on until you have made a selection on all three of the sliders. </p>

                <button class="btn" onclick="tryAgainSlider({{$case}})">Close</button>
            </div>
        </div>


    </div>



</div>

<div class="flex flex--column gap--xlg flex--center hide" id="jsFeedback-final-slider-{{$case}}">
    <div class="flex flex--column gap--lg flex--center col text-align--center feedback">
        <h3 class="animate__animated animate__zoomIn animate__fast flex--center padding-top--lg">You did a
            great job!</h3>
        <p class="animate__animated animate__zoomIn animate__fast flex--center">It’s
            important to think carefully about how you harness and
            manage technologies and digital solutions. The decisions made
            along the way can have implications for individuals, communities
            and the world.</p>
        <p class="animate__animated animate__zoomIn animate__fast flex--center">There are
            people who specialise in understanding these
            implications and helping others to weigh the moral and ethical
            impacts of their decisions. These people are known as digital
            ethicists.
            Let’s find out more about them next.</p>

        <a class="btn animate__animated animate__zoomIn animate__fast flex--center"
            onclick="oBadges.stepCompleted();" href="{{$links['next']}}">
            Continue
        </a>

    </div>
</div>