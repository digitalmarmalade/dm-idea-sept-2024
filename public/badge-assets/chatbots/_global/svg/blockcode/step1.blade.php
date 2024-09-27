@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main>
    @include('vendor.digitalmarmalade.badges.chatbots.header', ['title' =>
    'Header']) @include('vendor.digitalmarmalade.badges.chatbots.main-chat')

    <section class="jsStep hide">

        @include('vendor.digitalmarmalade.badges.chatbots.side-chat')
        <aside class="step__counter">
          <ol>
            <li class="step__counter--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
              <span class="jsTooltip" data-tooltip-content="#tooltip13_content">
                1
              </span>
            </li>
            <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">
              <span class="jsTooltip" data-tooltip-content="#tooltip14_content">
                2
              </span>
            </li>
            <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="350">
              <span class="jsTooltip" data-tooltip-content="#tooltip15_content">
                3
              </span>
            </li>
            <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
              <span class="jsTooltip" data-tooltip-content="#tooltip16_content">
                4
              </span>
            </li>
            <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
              <span class="jsTooltip" data-tooltip-content="#tooltip17_content">
                5
              </span>
            </li>
          </ol>
        </aside>

        <section>
            <div class="container__large">
                <div class="container__small">
                    <h1 class="step__title--level-1 heading-orange">
                        What<br />
                        is a Chatbot?
                    </h1>
                </div>

                <p class="container__small">
                    A chatbot is a software application used to conduct an
                    online chat conversation via text or text-to-speech, instead
                    of having direct contact with a live human.
                </p>

                <p class="container__small">
                    Chatbots are essentially computer programs that mimic
                    conversation with people, using rules or artificial
                    intelligence they can transform the way you interact with
                    the internet from a series of self-initiated tasks to a full
                    conversation.
                </p>

                <img
                    class="step-1__title--image"
                    src="/badge-assets/chatbots/_global/svg/illustration--step-1-cropped.svg"
                    alt="Chatbot appearing from screen"
                />

                <p class="container__small">
                    For several years chatbots were typically used in customer
                    service environments but chatbots are now being used in a
                    variety of other roles to improve communication, such as in:
                </p>

                <ul class="list__double-col container__small">
                    <li>Individual people's daily lives</li>
                    <li>Businesses (small and large)</li>
                    <li>Charities</li>
                    <li>Governments</li>
                    <li>International Initiatives</li>
                    <li>Educational Establishments</li>
                </ul>
            </div>
        </section>

        <section class="jsRuleBased">
            <div class="container__large">
                <div class="container__small">
                    <h2 class="step__title--level-2 heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                        Different<br />
                        types<br />
                        of Chatbots
                    </h2>

                    <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">Rule-based Chatbots</h3>
                </div>

                <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
                    Rule-based chatbots, sometimes referred to as "linguistic
                    based" chatbots are developed using a tree-like flow to help
                    users get answers to their queries. The chatbot will guide
                    the user with follow-up questions to eventually locate the
                    correct answer. The structure and answers are all
                    pre-programmed, so the developer is always in control of the
                    conversation, this is often referred to as the "black box".
                </p>

                <div class="step-1__activity container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
                    <h4>
                        Which conversation do you think is a rule-based chatbot?
                    </h4>

                    <div class="fail--box hide">
                        Oops, that is not a rule-based chatbot conversation,
                        please try again.
                    </div>

                    <div class="step-1__activity--conversation-container">
                        <div
                            class="jsWrongOption step-1__activity--conversation-option"
                        >
                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> C </span>

                                <p>
                                    <span>
                                        <strong> Capacity </strong>

                                        1:21 pm
                                    </span>

                                    Welcome to Capacity! How can I help you
                                    today?
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Joe </strong>

                                        1:21 pm
                                    </span>

                                    When will I receive my refund?
                                </p>

                                <span> J </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> C </span>

                                <p>
                                    <span>
                                        <strong> Capacity </strong>

                                        1:21 pm
                                    </span>

                                    Let me check...
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> C </span>

                                <p>
                                    <span>
                                        <strong> Capacity </strong>

                                        1:21 pm
                                    </span>

                                    Your refund is being processed. You will
                                    receive the refund back on your original
                                    form of payment in the next 3-5 working
                                    days.
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Joe </strong>

                                        1:22 pm
                                    </span>

                                    Thanks so much!
                                </p>

                                <span> J </span>
                            </div>
                        </div>

                        <div
                            class="jsCorrectOption step-1__activity--conversation-option"
                        >
                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    How can I help you?<br />

                                    <span>Order Status</span>
                                    <span>Cancel Order</span>
                                    <span>Return Request</span>
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Joe </strong>

                                        1:21 pm
                                    </span>

                                    When will I receive my refund?
                                </p>

                                <span> J </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    I am sorry, but I don't understand your
                                    request. Please select one of the following
                                    options:<br />

                                    <span>Order Status</span>
                                    <span>Cancel Order</span>
                                    <span>Return Request</span>
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Joe </strong>

                                        1:22 pm
                                    </span>

                                    When will I get my money back?
                                </p>

                                <span> J </span>
                            </div>
                        </div>
                      </div>

                    <div class="success--box hide">Brilliant!</div>
                </div>

                <section class="jsSuccessStory hide" >
                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                        Rule-based chatbots can use "if/then" logic to create
                        conversational flows. Language conditions can then be
                        created to look at the words, their order, their
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip1_content"
                            >synonyms</span
                        >, and common ways to phrase a question, to ensure that
                        questions with the same meaning receive the same answer.
                    </p>

                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
                        If a
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip2_content"
                            >rule-based</span
                        >
                        chatbot provides an incorrect answer, it's possible for
                        the developer to fine-tune the conditions easily.
                        Chatbots based on a purely linguistic model may feel
                        rigid to the user but can be developed quickly and are
                        often more affordable.
                    </p>

                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
                        Though rule-based chatbots use a basic form of Natural
                        Language Processing, interactions with them are quite
                        specific and structured, and tend to resemble
                        interactive
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip3_content"
                            >FAQs</span
                        >, often revealing their capabilities to be quite basic.
                        These are the most common type of chatbots, of which
                        many of us are likely to have interacted with, either on
                        a live chat, through an e-commerce website, or on
                        Facebook messenger.
                    </p>
                </section>
            </div>
        </section>

        <section class="jsAI hide">
            <div class="container__large">
                <div class="container__small">
                    <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                        Artificial Intelligence Chatbots
                    </h3>
                </div>

                <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
                    <span
                        class="tooltipster jsTooltip"
                        data-tooltip-content="#tooltip4_content"
                        >AI chatbots</span
                    >
                    are more complex than rule-based chatbots, and tend to be
                    more sophisticated, conversational, data-driven and
                    interactive. Through the conversations they experience, they
                    record data over time. This bank of data forms experiences
                    and makes them more aware, allowing them to understand what
                    a user needs and apply predictive intelligence to
                    personalise a user's experience.
                </p>

                <div class="step-1__activity container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
                    <h4>
                        Which conversation do you think is a artificial
                        intelligence chatbot?
                    </h4>

                    <div class="fail--box hide">
                        Oops, that is not an AI chatbot conversation, please try
                        again.
                    </div>

                    <div class="step-1__activity--conversation-container">
                        <div
                            class="jsWrongOption step-1__activity--conversation-option"
                        >
                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> C </strong>

                                        1:21 pm
                                    </span>

                                    Cancel my order.
                                </p>

                                <span> C </span>
                            </div>
                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    Ok, I can help you with that. What is your
                                    order number? Note that order numbers start
                                    with the letter O, following by a dash, and
                                    then X numbers. For example, O-12345678.
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> C </strong>

                                        1:21 pm
                                    </span>

                                    O-12345678.
                                </p>

                                <span> C </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    Your order has been cancelled.
                                </p>
                            </div>
                        </div>

                        <div
                            class="jsCorrectOption step-1__activity--conversation-option"
                        >
                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> C </strong>

                                        1:21 pm
                                    </span>

                                    Let's get some donut ice cream.
                                </p>

                                <span> C </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> D </span>

                                <p>
                                    <span>
                                        <strong> D </strong>

                                        1:21 pm
                                    </span>

                                    I don't like ice cream anymore, and no ice
                                    cream is going to change that!
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> C </strong>

                                        1:22 pm
                                    </span>

                                    Not even the beet-kale super combo we used
                                    to eat every day when we were 7??
                                </p>

                                <span> C </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> D </span>

                                <p>
                                    <span>
                                        <strong> D </strong>

                                        1:21 pm
                                    </span>

                                    We used to eat it every morning before
                                    school and it never became a craving to
                                    have.
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> C </strong>

                                        1:22 pm
                                    </span>

                                    You got sick of our cherished childhood
                                    breakfast. I don't know if I know you at all
                                    anymore!
                                </p>

                                <span> C </span>
                            </div>
                        </div>

                        <!-- If answer is correct apply class 'step-1__success--border'
               on step-1__activity--conversation-option.
               Otherwise, class 'step-1__fail--border'.

               Or toggle styles:
                border: 0.2em solid #29a366; // correct
                border: 0.2em solid #f68352; // incorrect
          -->
                    </div>

                    <div class="success--box hide">Brilliant!</div>
                </div>
                <section class="jsSuccessStory hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                    <p class="container__small">
                        AI chatbots can incorporate Natural Language Processing
                        (NLP) which refers to the branch of computer science
                        concerned with giving computers the ability to
                        understand text and spoken words in much the same way
                        human beings can.
                    </p>

                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
                        AI chatbots will try to understand the intent of the
                        user, meaning what it is that the user wants. The more
                        that the AI chatbot interacts with users, the better it
                        will become at understanding their intent, and the
                        better it will become at answering user's requests.
                    </p>

                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
                        Conversational systems based on
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip5_content"
                            >machine learning</span
                        >
                        can be impressive and often require huge amounts of
                        training data and highly skilled human specialists
                        during their development which can be costly. In
                        addition, a machine learning chatbot functions as a
                        black box, so if something does go wrong with the model
                        it can be hard for the developer(s) to intervene, let
                        alone correct, optimize and improve.
                    </p>
                </section>
            </div>
        </section>

        <section class="jsHybridModel hide">
            <div class="container__large">
                <div class="container__small">
                    <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                        Hybrid Chatbots
                    </h3>
                </div>

                <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
                    While rule-based and AI chatbot models have a place in
                    developing many types of conversational systems, taking a
                    hybrid approach offers the best of both worlds, and allows
                    the developer to adopt all the advantages of rule-based and
                    AI chatbots, by merging them into one hybrid chatbot.
                </p>

                <div class="step-1__activity container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
                    <h4>
                        Which conversation do you think is a hybrid chatbot?
                    </h4>

                    <div class="fail--box hide">
                        Oops, that is not a hybrid chatbot conversation, please
                        try again.
                    </div>

                    <div class="step-1__activity--conversation-container">
                        <div
                            class="jsCorrectOption step-1__activity--conversation-option"
                        >
                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    Good morning Becky, you're through to
                                    customer support, how may I help you today?
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Becky </strong>

                                        1:21 pm
                                    </span>

                                    Yes, I'd like some help with my new GS4000
                                    please. When does my plan expire?
                                </p>

                                <span> B </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    No problem Becky, I will pass you over to
                                    Dan in our GS team. One moment...
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span class="step-1__activity-entry-left-blue">
                                    D
                                </span>

                                <p class="step-1__activity-entry-left-blue">
                                    <span>
                                        <strong> Dan </strong>

                                        1:21 pm
                                    </span>

                                    Hi Becky, I am Dan. I gather your problem is
                                    with the new GS4000. What's your GS
                                    reference number?
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Becky </strong>

                                        1:21 pm
                                    </span>

                                    Hi Dan, my GS reference is 45686921.
                                </p>

                                <span> B </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span class="step-1__activity-entry-left-blue">
                                    D
                                </span>

                                <p class="step-1__activity-entry-left-blue">
                                    <span>
                                        <strong> Dan </strong>

                                        1:21 pm
                                    </span>

                                    No problem Becky. Your plan covers you fully
                                    until March 2023. Can I contact you nearer
                                    the time to see if you'd like to renew?
                                </p>
                            </div>
                        </div>

                        <div
                            class="jsWrongOption step-1__activity--conversation-option"
                        >
                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    How can I help you?<br />

                                    <span>Order Status</span>
                                    <span>Cancel Order</span>
                                    <span>Return Request</span>
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Joe </strong>

                                        1:21 pm
                                    </span>

                                    When will I receive my refund?
                                </p>

                                <span> J </span>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-left"
                            >
                                <span> B </span>

                                <p>
                                    <span>
                                        <strong> Bot </strong>

                                        1:21 pm
                                    </span>

                                    I am sorry, but I don't understand your
                                    request. Please select one of the following
                                    options:<br />

                                    <span>Order Status</span>
                                    <span>Cancel Order</span>
                                    <span>Return Request</span>
                                </p>
                            </div>

                            <div
                                class="step-1__activity--conversation-option-chat-entry step-1__activity--conversation-option-chat-entry-right"
                            >
                                <p>
                                    <span>
                                        <strong> Joe </strong>

                                        1:22 pm
                                    </span>

                                    When will I get my money back?
                                </p>

                                <span> J </span>
                            </div>
                        </div>

                    </div>

                    <div class="success--box hide">Brilliant!</div>
                </div>

                <section class="jsSuccessStory hide">
                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                        Hybrid chatbots allow for conversational systems to be
                        built without large amounts of training data. It
                        provides the developer open transparency in how the
                        system operates and ensures that a consistent
                        personality is maintained in terms of the behaviour it
                        exhibits to the users.
                    </p>

                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
                        At the same time,
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip6_content"
                            >hybrid</span
                        >
                        chatbots allow for machine learning integrations to go
                        beyond the realm of
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip7_content"
                            >linguistic</span
                        >
                        rules. to make smart and complex
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip8_content"
                            >inferences</span
                        >
                        in areas where a linguistic only approach is difficult,
                        or even impossible to create.
                    </p>

                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
                        Hybrid chatbots can also include a human element, this
                        is usually in the form of a direct link to a technical
                        support agent. This is usually a feature of businesses
                        or organisations who have a historical customer base
                        that is used to dealing with a human element and serves
                        to make their customers feel that a human element of
                        service is still available to them.
                    </p>

                    <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
                        Hybrid chatbots allow
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip9_content"
                            >statistical algorithms</span
                        >
                        to be embedded alongisde the
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip10_content"
                            >linguistic conditioning</span
                        >, mainting them in the same
                        <span
                            class="tooltipster jsTooltip"
                            data-tooltip-content="#tooltip11_content"
                            >visual interface</span
                        >. Building conversational applications using only
                        linguistic or machine learning methods is hard, resource
                        intensive and often too intensive, but many see it as
                        the future of chatbots.
                    </p>
                </section>
            </div>
        </section>

        <section class="jsSummary hide">
            <div class="container__large">
                <div class="container__small">
                    <h2 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Summary</h2>
                </div>

                <div class="container__small">
                    <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">Rule-based chatbots</h3>
                </div>

                <div class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
                    <div class="two-col-table__container">
                        <table class="two-col-table">
                            <thead>
                                <tr>
                                    <th>
                                        Advantages
                                        <img
                                            src="/badge-assets/chatbots/_global/svg/icon--success.svg"
                                            alt="Advantages icon"
                                        />
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        Doesn't need extensive training which
                                        makes the implementation process faster
                                        and less complicated.<br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Technology and implementation are
                                        simple, the price is usually also more
                                        affordable.
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        In pre-defining the questions and
                                        answers, you can better control the
                                        behaviour and responses of the chatbot.
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="two-col-table">
                            <thead>
                                <tr>
                                    <th>
                                        Disadvantages
                                        <img
                                            src="/badge-assets/chatbots/_global/svg/icon--fail.svg"
                                            alt="Disadvantages icon"
                                        />
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        Can't capture typos which means that in
                                        some cases it won't understand the user,
                                        which can cause frustrations.
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Interactions with a simple chatbot feel
                                        robotic rather than conversational.

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Cannot learn on their own which means
                                        that any improvements need to be made
                                        manually.</br></br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="container__small">
                    <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">AI Chatbots</h3>
                </div>

                <div class="container__small">
                    <div class="two-col-table__container" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="550">
                        <table class="two-col-table" >
                            <thead>
                                <tr>
                                    <th>
                                        Advantages
                                        <img
                                            src="/badge-assets/chatbots/_global/svg/icon--success.svg"
                                            alt="Advantages icon"
                                        />
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        Can understand typos and grammatical
                                        mistakes, so it is still able to respond
                                        to the question. </br></br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Continuously improve without the
                                        developer needed for further assistance.

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Conversing with an AI chatbot feels much
                                        more natural and human-like.
                                        <br /><br /><br />
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="two-col-table">
                            <thead>
                                <tr>
                                    <th>
                                        Disadvantages
                                        <img
                                            src="/badge-assets/chatbots/_global/svg/icon--fail.svg"
                                            alt="Disadvantages icon"
                                        />
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        Goes through a learning process, which
                                        makes their implementation process more
                                        complicated and longer.
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        By not using rule-based structures, the
                                        conversation led by an AI chatbot are
                                        less predictable.
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        When an AI chatbot is wrongly taught
                                        something, it takes a while before it
                                        “unlearns” and can learn the correct
                                        behaviour.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="container__large" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="550">
                <p class="step__completed">
                    <a
                        class="btn btn-orange"
                        onclick="oBadges.stepCompleted();"
                        href="{{ $links['next'] }}"
                    >
                        Continue
                        <svg
                            width="25"
                            height="25"
                            viewBox="0 0 25 25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g id="icon" clip-path="url(#clip0_1585_16111)">
                                <path
                                    id="arrow / circle_right"
                                    d="M12.4011 24.7544C5.77604 24.7471 0.407178 19.3788 0.399902 12.7544V12.5144C0.531833 5.91985 5.96196 0.667964 12.5579 0.755472C19.1539 0.842981 24.4427 6.23707 24.3996 12.8328C24.3565 19.4285 18.9976 24.7531 12.4011 24.7544ZM12.4011 3.15441C7.09864 3.15441 2.80014 7.45248 2.80014 12.7544C2.80014 18.0563 7.09864 22.3544 12.4011 22.3544C17.7036 22.3544 22.0021 18.0563 22.0021 12.7544C21.9961 7.45494 17.7011 3.16037 12.4011 3.15441ZM12.4011 18.7544L10.7089 17.0624L13.8052 13.9544H6.4005V11.5544H13.8052L10.7089 8.44641L12.4011 6.75441L18.4017 12.7544L12.4011 18.7544Z"
                                />
                            </g>
                            <defs>
                                <clipPath id="clip0_1585_16111">
                                    <rect
                                        width="24"
                                        height="24"
                                        fill="white"
                                        transform="translate(0.399902 0.754395)"
                                    />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </p>
            </div>
        </section>

        <div class="chatbot__toggle--icon">
            <button>
                <img
                    src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg"
                    alt="Chatbot icon"
                />
            </button>
        </div>


        <div class="tooltip_templates">
            <span id="tooltip1_content">
                <p>
                  A word of phrase that means exactly or nearly the same as another word. For example, in the English language
                  the words begin, commence, start and initiate are all synonyms of one another.
                </p>
            </span>

            <span id="tooltip2_content">
                <p>
                  In computer science, rule-based refers to a system used to store and manipulate knowledge to interpret information
                  in a useful way. It is often used in artifical intelligence operations and intelligence.
                </p>
            </span>

            <span id="tooltip3_content">
                <p>
                  Frequently Asked Questions (FAQs) is often used in articles, websites, email lists and online forums where common
                  questions tend to recur, for example through posts or queries by new users related to common
                  knowledge gaps.
                </p>
            </span>

            <span id="tooltip4_content">
                <p>
                  An AI chatbot (Artificial Intelligence chatbot) is a chatbot that's powered by artifical intelligence. Unlike regular chatbots,
                  AI chatbots are able to understand user queries through natural language processing (NLP) and give intelligent answers to them.
                </p>
            </span>

            <span id="tooltip5_content">
                <p>
                  Is the study of computer algorithms that can improve automatically through experience and by the use of data.
                  It is seen as part of artificial intelligence.
                </p>
            </span>

            <span id="tooltip6_content">
                <p>
                  Refers to something made by combining two different elements. In terms of chatbots, it refers to a chatbot that is developed using a combination
                  of rule-based, AI and/or live agent services.
                </p>
            </span>

            <span id="tooltip7_content">
                <p>
                  The scientific study of language. It encompasses the analysis of every aspect of language, as well as the methods for studying and modelling them.
                </p>
            </span>

            <span id="tooltip8_content">
                <p>
                  A conclusion reached on the basis of evidence and reasoning.
                </p>
            </span>

            <span id="tooltip9_content">
                <p>
                  A statistical model of input data represented as a tree structure.
                </p>
            </span>

            <span id="tooltip10_content">
                <p>
                  The process of training or accustoming a chatbot to behave in a certain way or to accept certain circumstances.
                </p>
            </span>

            <span id="tooltip11_content">
                <p>
                  A form of user interface that allows users to interact with electronic technology through graphical icons and audio indicators.
                </p>
            </span>

            <span id="tooltip12_content">
              <p>
                A combination of beliefs and emotions that explains an action based mainly on emotion instead of reason.
              </p>
          </span>

          <span id="tooltip13_content">
            <p>
              Understand different types of Chatbot
            </p>
          </span>

          <span id="tooltip14_content">
            <p>
              Chatbot design process, NPL and AI
            </p>
          </span>

          <span id="tooltip15_content">
            <p>
              Research a range of chatbot case studies
            </p>
          </span>

          <span id="tooltip16_content">
            <p>
              Make a chatbot
            </p>
          </span>

          <span id="tooltip17_content">
            <p>
              Test and deploy a chatbot
            </p>
          </span>
        </div>
    </section>
</main>

@endsection @section('javascript')

<!-- below just to show functionality -->
<!-- <script>
    const closeBtn = $(".jsStep #chatbot__button--close-chat");
    const chatbot = $(".jsStep .chatbot__toggle--icon");
    const overlay = document.querySelector(".overlay");

    closeBtn.click(() => {
        console.log("object");
        $(".jsStep .overlay").toggleClass("hide");
    });

    chatbot.click(() => {
        $(".jsStep .overlay").toggleClass("hide");
    });
</script> -->
<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/chatbots/main_chatbot.js"></script>
<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/chatbots/step_1.js"></script>
<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/step_1_tasks.js"></script>
<script>
    $(document).ready(function () {
        var triggerMode = "hover";

        if ($("body").hasClass("touch")) {
            triggerMode = "click";
        }

        $(".jsTooltip").tooltipster({
            trigger: triggerMode,
            maxWidth: 350,
        });
    });
</script>

@endsection
