<div id="case-study-activity-2-consequences-{{$case}}" class="flex flex--column gap--lg box box--task bg--offwhite">
    <div class="col flex flex--column gap--xlg flex--center">
        <div class="flex flex--column gap--sm">
            <p>{{ $data['openingStatement'] }}</p>
            <p><i>Please select an answer for each statement.</i></p>
        </div>
        <table>
            <thead>
            <tr>
                <th>Potential Consequence</th>
                <th colspan="2">Impact</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['questions'] as $id => $statement)
                <tr>
                    <td>
                        <p>{!!html_entity_decode($statement['statement'])!!}</p>
                    </td>
                    <td>
                        <div class="flex height--full">
                            <input type="radio" id="option{{$case}}-{{$statement['number']}}-1"
                                   name="options{{$case}}-{{$id+1}}" value="positive" class=""
                                   onclick="checkConsequences('option{{$case}}-{{$statement['number']}}-1', 'option{{$case}}-{{$statement['number']}}-2', 'options{{$case}}-{{$statement['number']}}', '{{ $statement['answer']}}', {{$statement['number']}})">
                            <label for="option{{$case}}-{{$statement['number']}}-1">Positive</label>
                        </div>
                    </td>
                    <td>
                        <div class="flex height--full">
                            <input type="radio" id="option{{$case}}-{{$statement['number']}}-2"
                                   name="options{{$case}}-{{$id+1}}" value="negative"
                                   onclick="checkConsequences('option{{$case}}-{{$statement['number']}}-1', 'option{{$case}}-{{$statement['number']}}-2', 'options{{$case}}-{{$statement['number']}}', '{{$statement['answer']}}', {{$statement['number']}})">
                            <label for="option{{$case}}-{{$statement['number']}}-2" class="">Negative</label>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <button id="submitCase{{$case}}Activity1" type="button" class="submitButton btn"
                onclick="submitConsequences({{$case}}, {{$statement['number']}})">Continue
        </button>
        <div class='success feedback animate__animated animate__zoomIn animate__fastsusccess jsFeedbackSuccess1 hide'
             id="jsFeedbackSuccess-{{$case}}">
            <div class="feedback__content">
                <p>{{ $data['feedbacks']['success'] }}</p>
                <a class="btn"
                   onclick="continueToSlider({{$case}})">Next</a>
            </div>
        </div>

        <div class='fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail hide'
             id="jsFeedbackFail-{{$case}}">
            <div class="feedback__content">
                <p>Please correct the wrong answers before moving on.</p>

                <button class="btn"
                        onclick="tryAgainConsequence({{$case}})">Close
                </button>
            </div>
        </div>

        <div class='fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail hide'
             id="jsFeedbackFail-empty-1-{{$case}}">
            <div class="feedback__content">
                <p>Oops, please make sure you have made a selection for each statement.</p>

                <button class="btn"
                        onclick="tryAgainConsequence({{$case}})">Close
                </button>
            </div>
        </div>
    </div>
</div>

