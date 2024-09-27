@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
 class="step-7" onload="init();"
@endsection

@section('page')

 <main>

<div class="page-header">

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="current"></li>
        </ol>
    </div>

    <div class="animation-holder" id="animationHolder">
        <div id="animation_container" class="animation-container" >
		<canvas id="canvas" style="position: absolute; display: block;"></canvas>
		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; position: absolute; left: 0px; top: 0px; display: block;">
		</div>
	</div>
    </div>
    <div class="page-header-triangles"></div>
</div><!--/page-header-->
    
<div class="holder intro-holder">
<h1>How can you ensure your company is GDPR compliant?</h1>
<p>There are five phases of work that can help ensure that your company is compliant with GDPR.</p>


</div>

<div class="compliance-step-1">

<div class="compliance-intro">
<span class="compliance-intro-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">1</span>
    <div class="compliance-intro__text">
    <h2><span class="compliance-intro__number">1</span> Discovery</h2>
    <p>Identify what personal data your organisation holds and where this is stored.</p>
    </div>
</div>

<div class="compliance-holder">

<div class="compliance-text">
<h3>Know what information your organisation holds</h3>
<p>In order to protect the personal data that your organisation holds, the flows of personal data into and out of the business should be mapped, documented and routinely updated. This data mapping exercise will allow your organisation to ensure that it has a dynamic record of all the personal data held by the organisation, and to use that documentation as the basis of providing documentary evidence of compliance with the 7 Principles of the GDPR.</p>
<p>The data mapping flows should include:</p>

<ul class="data-mapping">
<li>All data fields collected</li>
<li>The source of the data</li>
<li>The volumes of data collected</li>
<li>The location of the data (servers, websites, platforms, apps, cloud, email etc.)</li>
<li>The purpose for which the data is used</li>
<li>Who, internally and externally, may access the personal data, and by what method</li>
<li>To whom is the personal data transferred and by what method</li>
<li>For how long the personal data is retained and for what reason</li>
</ul>

<h3>State your lawful basis for processing personal data</h3>
<p>Once the data mapping task is complete, your organisation will need to undertake the formal process of confirming, documenting and filing the legal basis on which it collects personal data. Defining the legal basis for processing is a key requirement under GDPR, and failure to do so is considered one of the most serious offences.</p>

</div>
    <div class="compliance-quote-holder paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
        <div class="compliance-quote">
            <p>the flows of personal data should be mapped, documented and routinely updated</p>
        </div>
    </div>
</div>
</div><!--/step-1-->

<div class="compliance-step-2">

<div class="compliance-intro">
<span class="compliance-intro-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">2</span>
    <div class="compliance-intro__text">
    <h2><span class="compliance-intro__number">2</span> Management</h2>
    <p>Manage and communicate how personal data is accessed, collected and used.</p>
    </div>
</div>

<div class="compliance-holder compliance-holder--quote-right">
<div class="compliance-text">
<h3>Communicate privacy information</h3>
<p>When you collect personal data you have to give people certain information, such as your identity and how you intend to use their information. This is usually done through a ‘privacy policy’ (in some companies this is called a 'privacy notice'). You must also tell people your ‘lawful basis’ for processing the data, how long you plan to keep their information and that they have a right to complain to the Information Commissioner’s Office (ICO) if they think there is a problem with the way you are handling their data. GDPR requires this information to be provided in concise, easy to understand and clear plain English. If you have inaccurate personal data and have shared this with another organisation, you will have to tell the other organisation so it can correct its own records.</p>

</div>
<div class="compliance-quote-holder paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
<div class="compliance-quote">
    <p>When you collect personal data you have to give people certain information, such as your identity and how you intend to use their information.</p>
</div>
</div>
</div><!--holder-->

<div class="compliance-holder compliance-holder--quote-left">
<div class="compliance-quote-holder paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
<div class="compliance-quote">
    <p>There must be a positive opt-in; consent cannot be inferred from silence, pre-ticked boxes or inactivity</p>
</div>
</div>

<div class="compliance-text">
<h3>Gain consent</h3>
<p>Review how you seek, record and manage consent. Consent must be freely given and the message around it must be specific, informed and unambiguous. There must be a positive opt-in; consent cannot be inferred from silence, pre-ticked boxes or inactivity. It must also be separate from other terms and conditions, and you must have simple ways for people to withdraw their consent. Consent has to be verifiable and people generally have more rights where you rely on consent to process their data.</p>

</div>

</div><!--holder-->


<div class="if-applicable">

<div class="if-applicable-content">
<span class="if-applicable-title-holder">
<span class="if-applicable-title"><span class="flip-text">If Applicable</span></span>
</span>
<h3>Name your Data Protection Officer (if applicable)</h3>
<p>Designate someone to take responsibility for data protection compliance, if you don’t already have someone in this role. </p>

<div class="if-applicable-tip">
<h4>Top Tip</h4>
<p>Remember only the following organisations require a Data Protection Officer:</p>
<ol>
<li>1. Public authorities</li>
<li>2. Organisations that engage in large-scale systematic monitoring</li>
<li>3. Organisations that engage in large scale processing of sensitive personal data</li>
</ol>
</div>

</div>

</div>



<div class="compliance-holder compliance-holder--quote-left">
<div class="compliance-quote-holder paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
<div class="compliance-quote">
    <p>If relevant to your business, put systems in place to verify people’s ages and to obtain parental or guardian consent for any data processing activity</p>
</div>
</div>

<div class="compliance-text">
<h3>Protect children</h3>
<p>GDPR introduces special protection for children’s personal data, particularly in the context of commercial internet services such as social networking. If relevant to your business, put systems in place to verify people’s ages and to obtain parental or guardian consent for any data processing activity. Children can give their own consent to processing at age 16 (although this may be lowered to 13 in the UK). If a child is younger, you will need to get consent from a person holding ‘parental responsibility’.</p>

</div>

</div><!--holder-->

<div class="compliance-holder compliance-holder--quote-right">
<div class="compliance-text">
<h3>International - know which rules apply</h3>
<p>If your business operates in more than one EU member state, find out which will be your lead data protection supervisory authority and make sure you apply the relevant rules.
</p>

</div>
<div class="compliance-quote-holder">
<div class="compliance-quote paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
    <p>They may be varations on GDPR in different EU member states</p>
</div>
</div>
</div><!--holder-->

</div><!--/step-2-->


<div class="compliance-step-3">

<div class="compliance-intro">
<span class="compliance-intro-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">3</span>
    <div class="compliance-intro__text">
    <h2><span class="compliance-intro__number">3</span> Protection</h2>
    <p>Establish control measures to prevent, detect and respond to data breaches and infrastructure vulnerabilities.</p>
    </div>
</div>

<div class="compliance-holder compliance-holder--quote-right">
<div class="compliance-text">
<h3>Deal with data breaches</h3>
<p>Make sure you have the right procedures in place to detect, report and investigate a personal data breach. You may need to notify the ICO (and possibly some other bodies) if you suffer a personal data breach that is likely to result in anyone being at risk of discrimination, damage to reputation, financial loss, loss of confidentiality or any other significant economic or social disadvantage. You will also have to notify the people affected.</p>
<h3>Security actions</h3>
<p>Organisations have to demonstrate the security of the data they are processing. They will also have to implement substantial technical and organisational measures to demonstrate their compliance with the GDPR on a continual basis. GDPR has specific instructions for what types of security action are required for:</p>


</div>
<div class="compliance-quote-holder">
<div class="compliance-quote paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
    <p>in the event of a data breach you must notify the people affected</p>
</div>
</div>
</div><!--holder-->


<ul class="data-breach-steps">
<li><h4>1</h4> The encryption and pseudonymisation of personal data.</li>
<li><h4>2</h4> Organisations should make provisions for regular testing, assessment, and evaluations of the effectiveness of technical and organisational policies for ensuring the security of the data</li>
<li><h4>3</h4> Provisions for confidentiality, integrity, availability, and resilience of processing systems and services.</li>
<li><h4>4</h4> In the event of a physical or technical incident, organisations are entitled to restore the availability and access to personal data in a timely manner.</li>
</ul>

</div><!--/step-3-->

<div class="compliance-step-4">

<div class="compliance-intro">
<span class="compliance-intro-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">4</span>
    <div class="compliance-intro__text">
    <h2><span class="compliance-intro__number">4</span> Reporting</h2>
    <p>Acting on data requests, reporting data breaches & maintaining required documentation.</p>
    </div>
</div>

<div class="compliance-holder compliance-holder--quote-right">
<div class="compliance-text">
<h3>Be aware of people’s rights</h3>
<p>Check your procedures to make sure they cover people’s rights, including how you would delete their personal data or provide data electronically and in a ‘commonly used format.’ People have many rights, including to be informed, access their information free-of-charge, have it deleted and not to be subject to automated decision-making, including profiling.
</p>

</div>
<div class="compliance-quote-holder">
<div class="compliance-quote paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
    <p>People have more rights about the way their data is treated and used</p>
</div>
</div>
</div><!--holder-->

<div class="compliance-holder compliance-holder--quote-left">
<div class="compliance-quote-holder paroller" data-paroller-factor="0.1" data-paroller-type="foreground">
<div class="compliance-quote">
    <p>The number of days within which you must comply has been reduced from 40 to 30</p>
</div>
</div>

<div class="compliance-text">
<h3>Handle subject access requests</h3>
<p>Update your procedures on how to handle requests to provide any additional information. Under the new rules, you will have a month to comply, rather than the current 40 days, and you can refuse or charge for requests that are ‘manifestly unfounded’ or excessive. If you refuse a request, you must tell the person why, and let them know that they have the right to complain to the supervisory authority and to a legal remedy.</p>

</div>

</div><!--holder-->




</div><!--/step-4-->

<div class="compliance-step-5">

<div class="compliance-intro">
<span class="compliance-intro-number">5</span>
    <div class="compliance-intro__text">
    <h2><span class="compliance-intro__number">5</span> Demonstrate Compliance</h2>
    <p>The principle of accountability.</p>
    </div>
</div>

<div class="compliance-narrow-text">
<p>The principle of Accountability requires all organisations who
 process personal data to demonstrate compliance with the other 6 Principles. In practice, this means that
 your company must ensure that it:</p>

<ul class="compliance-points">
<li>Establishes an internal governance structure which fosters a culture of data privacy from the
 top down, including:
     <ul>
     <li>designating an individual to be accountable for data protection within the organisation.</li>
     <li>inclusion of data protection within Board and Trustee meetings, and minuting of such discussions.</li>
     <li>the establishment of a specific data protection location (electronic and/or physical)
 where all data protection evidenced documentation is stored and accessible.</li>
     </ul>
 </li>
 <li>Maintains data inventories and records of data processing activities.</li>
 <li>Develops, maintains and reviews data protection policies addressing the key GDPR
 requirements.</li>
 <li>Trains all personnel who process personal data in data protection in general, and the
 organisation’s data protection policies specifically.</li>
</ul>


</div>


</div><!--/step-5-->


    <div class="steps-quiz-row question-row">


<div class="holder">


    <p>Based on what you've just learnt, identify which of the 5 phases the following statements fall into. Don't forget, you can always refer back to the information above should you get stuck.</p>

    <div class="restart hide" id="restart">
        <p>Whoops - you got two wrong, you'll have to start again...</p>
    </div>

<div class="steps-question steps-question--first">

<p class="steps-question-description">Map the flows of information and data through your organisation.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
     <li><a href="#q1Answer" data-answer="true">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q1Answer" data-answer="false">
     <h3>Protection</h3>
     <p>Establish control measures to prevent, detect and respond to data breaches and infrastructure vulnerabilities.</p>
     </a></li>
     <li><a href="#q1Answer" data-answer="false">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 6 Principles of GDPR.</p>
     </a></li>
</ul>

<div id="q1Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>Finding out how your organisation gathers and uses data is one of the first steps of discovery.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Establish procedures to detect whether anyone unauthorised has had access to your data.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q2Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q2Answer" data-answer="true">
     <h3>Protection</h3>
     <p>Establish control measures to prevent, detect and respond to data breaches and infrastructure vulnerabilities.</p>
     </a></li>
     <li><a href="#q2Answer" data-answer="false">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
</ul>

<div id="q2Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>How you detect and prevent data breaches is an important part of the protection of your data.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Define the legal basis you have for processing data.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
     <li><a href="#q3Answer" data-answer="true">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q3Answer" data-answer="false">
     <h3>Protection</h3>
     <p>Establish control measures to prevent, detect and respond to data breaches and infrastructure vulnerabilities.</p>
     </a></li>
     <li><a href="#q3Answer" data-answer="false">
     <h3>Reporting</h3>
     <p>Acting on data requests, reporting data breaches & maintaining required documentation.</p>
     </a></li>
</ul>

<div id="q3Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>Defining the legal basis for processing is a key requirement under GDPR, and is therefore an important part of your discovery.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Give people a way to find out information about you, such as your identity and how you intend to use their data.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q4Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q4Answer" data-answer="false">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
     <li><a href="#q4Answer" data-answer="true">
     <h3>Management</h3>
     <p>Manage and communicate how personal data is accessed, collected and used.</p>
     </a></li>
</ul>

<div id="q4Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>Who you are and how you intend to use the data you are collecting should be part of managing your Privacy Policy.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Make sure that people are aware that they are giving consent for their data to be used.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q5Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q5Answer" data-answer="false">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
     <li><a href="#q5Answer" data-answer="true">
     <h3>Management</h3>
     <p>Manage and communicate how personal data is accessed, collected and used.</p>
     </a></li>
</ul>

<div id="q5Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>Gaining consent from people in a transparent way is an important part of managing your GDPR responsibilities.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Maintain an <span data-title="Definition: a complete list of items such as property, goods in stock, or the contents of a building"  class="tooltip">inventory</span> of data and record the way in which this data has been processed.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q6Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q6Answer" data-answer="true">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
     <li><a href="#q6Answer" data-answer="false">
     <h3>Management</h3>
     <p>Manage and communicate how personal data is accessed, collected and used.</p>
     </a></li>
</ul>

<div id="q6Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>When asked a company must be able to show what data they have collected and what they have done with it. This record is a way of demonstrating compliance with GDPR.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">If applicable, name a Data Protection Officer.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q7Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q7Answer" data-answer="false">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
     <li><a href="#q7Answer" data-answer="true">
     <h3>Management</h3>
     <p>Manage and communicate how personal data is accessed, collected and used.</p>
     </a></li>
</ul>

<div id="q7Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>If you are required to, appointing a Data Protection Officer is a way of managing your approach to GDPR. Ensuring compliance is the Data Protection Officer's responsibility.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Ensure that all personnel who process personal data are trained in general data protection, and in the specifics on the organisation's data protection requirements and keep records of when and what training was completed.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q8Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q8Answer" data-answer="true">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
     <li><a href="#q8Answer" data-answer="false">
     <h3>Reporting</h3>
     <p>Acting on data requests, reporting data breaches & maintaining required documentation.</p>
     </a></li>
</ul>

<div id="q8Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Know which rules apply in the different EU member states in which the company operates.</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q10Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q10Answer" data-answer="false">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
     <li><a href="#q10Answer" data-answer="true">
     <h3>Management</h3>
     <p>Manage and communicate how personal data is accessed, collected and used.</p>
     </a></li>
</ul>

<div id="q10Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>Understanding how your company needs to adjust it's approach according to the rules of different EU states is an important part of managing your approach to GDPR.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->

<div class="steps-question hide">

<p class="steps-question-description">Handle requests from data subjects</p>

<p>Which of the 5 steps does this fall into?</p>
<ul class="steps-question-options">
    <li><a href="#q11Answer" data-answer="false">
     <h3>Discovery</h3>
     <p>Identify what personal data your organisation holds and where this is stored.</p></a></li>
     <li><a href="#q11Answer" data-answer="false">
     <h3>Demonstrate Compliance</h3>
     <p>All organisations who process personal data must demonstrate compliance with the 7 Principles of GDPR.</p>
     </a></li>
     <li><a href="#q11Answer" data-answer="true">
     <h3>Reporting</h3>
     <p>Acting on data requests, reporting data breaches & maintaining required documentation.</p>
     </a></li>
</ul>

<div id="q11Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
    <p>People have a right to know what data you have that relates to them, and you must have a method of reporting this to them.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div><!--/question-->
















</div><!--/holder-->


</div>

<div class="success-row hide top-slant-1" id="successRow">

<div class="confirmation-tick">
    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
</div>

<p>Well done!</p>


<p class="next-step-cta">
    <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn"><span class="btn__text">Next Step</span>
       <svg><use xlink:href="#iconRightArrow"></use></svg>
    </a>
</p>

</div>

</main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 7);
    oBadges.redirectIfPreviousStepNotCompleted(6, '{{$links['last']}}');
</script>

 <script src="/badge-assets/{{$url['slug']}}/js/jquery.paroller.min.js"></script>

<script>
    var correctQuiz = 0,
        wrongQuiz = 0;

       $(function () {
        $('.paroller').paroller();
        });

    $( ".steps-question a" ).on( "click", function(e) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('#restart').addClass('hide');


        if($(this).data('answer')===true) {
            $(this).closest('li').addClass('selected');
            $(this).closest('.steps-question').addClass('disabled');
            $(this).closest('.steps-question').find('.correct').removeClass('hide');
            $(this).closest('.steps-question').find('.wrong').addClass('hide');
            $(this).closest('.steps-question').next('.steps-question').removeClass('hide');

            correctQuiz++;

            scrollTo(target);
        } else {
            $(this).closest('.steps-question').find('.wrong').removeClass('hide');
            wrongQuiz++;
            if(wrongQuiz === 2) {

                $('.steps-question').addClass('hide')
                $('.steps-question').removeClass('disabled');
                $('.steps-question .selected').removeClass('selected');
                $('.steps-question .wrong').addClass('hide');
                $('.steps-question .correct').addClass('hide');
                $('.steps-question--first').removeClass('hide');
                wrongQuiz = 0;
                correctQuiz = 0;
                $('#restart').removeClass('hide');
                location.href = "#restart";
                return false;

            }

        }
        if(correctQuiz === 10) {
            $('#successRow').removeClass('hide');
        }
    });

</script>
<script src="/badge-assets/{{$url['slug']}}/img/step-7/Step-7.js?1529056798951"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	handleComplete();
}
function handleComplete() {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	exportRoot = new lib.Step7();
	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {
		var lastW, lastH, lastS=1;
		window.addEventListener('resize', resizeCanvas);
		resizeCanvas();
		function resizeCanvas() {
			var w = lib.properties.width, h = lib.properties.height;
			var iw = window.innerWidth, ih=window.innerHeight;
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
			if(isResp) {
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
					sRatio = lastS;
				}
				else if(!isScale) {
					if(iw<w || ih<h)
						sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==1) {
					sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==2) {
					sRatio = Math.max(xRatio, yRatio);
				}
			}
			canvas.width = w*pRatio*sRatio;
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;
			stage.scaleY = pRatio*sRatio;
			lastW = iw; lastH = ih; lastS = sRatio;
		}
	}
	makeResponsive(true,'both',false,1);
	fnStartAnimation();
}
</script>
@endsection
