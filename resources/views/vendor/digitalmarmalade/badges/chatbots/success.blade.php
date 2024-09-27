@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main class="badge__title--page">
  @include('vendor.digitalmarmalade.badges.chatbots.header',
  ['title' => 'Header'])

  <section>
    <div class="container__large">
      <div class="container__small">
        <div class="animation-holder animation-holder__success">
          <h1 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            Well<br /> Done!
          </h1>

          <svg id="blob--purple-large-success" class="grow-1-25" xmlns="http://www.w3.org/2000/svg" fill="none" width="365.94" height="119.79" viewBox="0.58 0.93 365.94 119.79">
            <path id="bg--3" d="M335.763 34.4508C330.427 34.2797 325.255 35.2666 320.534 37.1697C281.08 52.6589 237.072 45.0451 209.072 17.8624C198.773 7.8573 184.346 1.49972 167.811 0.965968C143.378 0.17857 120.75 12.3204 107.921 30.822C90.7924 55.3218 55.0596 60.9728 33.1823 42.6084L33.1808 42.6256C30.186 40.1054 26.2331 38.5198 21.7534 38.3745C11.1937 38.0343 1.76008 45.7696 0.679202 55.6527C-0.400726 65.5337 7.28259 73.8202 17.8385 74.1596C22.3197 74.3049 26.5898 72.9836 30.1135 70.6731L30.1121 70.6888C55.8362 53.8575 90.0866 61.7636 101.754 87.1904C110.464 106.385 130.285 119.894 154.72 120.683C171.254 121.214 186.965 115.826 199.373 106.552L199.374 106.552C233.1 81.3575 278.46 76.6222 314.261 94.5365C318.533 96.728 323.455 98.0416 328.79 98.2134C347.602 98.8198 364.415 85.0363 366.341 67.4283C368.265 49.8229 354.576 35.0566 335.763 34.4508" fill="url(#paint0_linear_1921_48886)"/>
            <defs>
              <linearGradient id="paint0_linear_1921_48886" x1="-40.7535" y1="33.5128" x2="267.748" y2="-180.457" gradientUnits="userSpaceOnUse">
                <stop stop-color="#AA80F9"/>
                <stop offset="0.996403" stop-color="#6165D7"/>
                <stop offset="1" stop-color="#6165D7"/>
              </linearGradient>
            </defs>
          </svg>

          <svg id="circle--lines-orange-medium-success" class="rotate__40" width="125" height="128" viewBox="0 0 125 128" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g>
                <mask id="mask0_1846_19029" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-33" width="127" height="194">
                  <g id="lines">
                    <rect id="Rectangle 44" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 3.07465 128.437)" fill="#C4C4C4"/>
                    <rect id="Rectangle 45" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.97827 123.834)" fill="#C4C4C4"/>
                    <rect id="Rectangle 46" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.88196 119.231)" fill="#C4C4C4"/>
                    <rect id="Rectangle 47" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.78558 114.628)" fill="#C4C4C4"/>
                    <rect id="Rectangle 48" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.68921 110.025)" fill="#C4C4C4"/>
                    <rect id="Rectangle 49" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.59283 105.422)" fill="#C4C4C4"/>
                    <rect id="Rectangle 50" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.49646 100.819)" fill="#C4C4C4"/>
                    <rect id="Rectangle 51" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.40015 96.2166)" fill="#C4C4C4"/>
                    <rect id="Rectangle 52" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.30377 91.6138)" fill="#C4C4C4"/>
                    <rect id="Rectangle 53" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.2074 87.0107)" fill="#C4C4C4"/>
                    <rect id="Rectangle 54" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.11102 82.408)" fill="#C4C4C4"/>
                    <rect id="Rectangle 55" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.01465 77.8049)" fill="#C4C4C4"/>
                    <rect id="Rectangle 56" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.91827 73.2021)" fill="#C4C4C4"/>
                    <rect id="Rectangle 57" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.8219 68.5994)" fill="#C4C4C4"/>
                    <rect id="Rectangle 58" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.72552 63.9963)" fill="#C4C4C4"/>
                    <rect id="Rectangle 59" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.62915 59.3936)" fill="#C4C4C4"/>
                    <rect id="Rectangle 60" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.53284 54.7908)" fill="#C4C4C4"/>
                    <rect id="Rectangle 61" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.43646 50.1877)" fill="#C4C4C4"/>
                    <rect id="Rectangle 62" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.34009 45.585)" fill="#C4C4C4"/>
                    <rect id="Rectangle 63" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.24371 40.9819)" fill="#C4C4C4"/>
                    <rect id="Rectangle 64" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.14734 36.3792)" fill="#C4C4C4"/>
                    <rect id="Rectangle 65" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.05103 31.7764)" fill="#C4C4C4"/>
                    <rect id="Rectangle 66" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.954651 27.1733)" fill="#C4C4C4"/>
                    <rect id="Rectangle 67" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.858276 22.5706)" fill="#C4C4C4"/>
                    <rect id="Rectangle 68" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.761902 17.9675)" fill="#C4C4C4"/>
                    <rect id="Rectangle 69" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.665527 13.3647)" fill="#C4C4C4"/>
                    <rect id="Rectangle 70" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.569214 8.76196)" fill="#C4C4C4"/>
                    <rect id="Rectangle 71" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.472839 4.15894)" fill="#C4C4C4"/>
                  </g>
                </mask>
                <g mask="url(#mask0_1846_19029)">
                  <ellipse id="Ellipse 5" rx="61.7225" ry="61.6067" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 62.3971 63.7689)" fill="url(#paint0_linear_1846_19029)"/>
                </g>
              </g>
              <defs>
                <linearGradient id="paint0_linear_1846_19029" x1="0" y1="63.8221" x2="153.128" y2="63.8221" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FFC444"/>
                  <stop offset="0.996403" stop-color="#F36F56"/>
                  <stop offset="1" stop-color="#F36F56"/>
                </linearGradient>
              </defs>
            </svg>

            <svg id="circle--lines-orange-x-large-success" class="rotate__40" width="170" height="169" viewBox="0 0 170 169" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="circle--lines">
                <mask id="mask0_1921_37002" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-43" width="173" height="255">
                  <g id="lines">
                    <rect id="Rectangle 43" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.97461 -6.43292)" fill="#C4C4C4"/>
                    <rect id="Rectangle 44" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.75427 -0.437866)" fill="#C4C4C4"/>
                    <rect id="Rectangle 45" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.53381 5.55713)" fill="#C4C4C4"/>
                    <rect id="Rectangle 46" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.31348 11.5522)" fill="#C4C4C4"/>
                    <rect id="Rectangle 47" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.09314 17.5472)" fill="#C4C4C4"/>
                    <rect id="Rectangle 48" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.8728 23.5423)" fill="#C4C4C4"/>
                    <rect id="Rectangle 49" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.65234 29.5374)" fill="#C4C4C4"/>
                    <rect id="Rectangle 50" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.43201 35.5324)" fill="#C4C4C4"/>
                    <rect id="Rectangle 51" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.21167 41.5275)" fill="#C4C4C4"/>
                    <rect id="Rectangle 52" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.99133 47.5225)" fill="#C4C4C4"/>
                    <rect id="Rectangle 53" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.771 53.5176)" fill="#C4C4C4"/>
                    <rect id="Rectangle 54" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.55054 59.5126)" fill="#C4C4C4"/>
                    <rect id="Rectangle 55" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.3302 65.5077)" fill="#C4C4C4"/>
                    <rect id="Rectangle 56" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.10986 71.5027)" fill="#C4C4C4"/>
                    <rect id="Rectangle 57" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.88953 77.4978)" fill="#C4C4C4"/>
                    <rect id="Rectangle 58" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.66919 83.4929)" fill="#C4C4C4"/>
                    <rect id="Rectangle 59" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.44873 89.4879)" fill="#C4C4C4"/>
                    <rect id="Rectangle 60" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.22839 95.4829)" fill="#C4C4C4"/>
                    <rect id="Rectangle 61" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.00806 101.478)" fill="#C4C4C4"/>
                    <rect id="Rectangle 62" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.78772 107.473)" fill="#C4C4C4"/>
                    <rect id="Rectangle 63" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.56726 113.468)" fill="#C4C4C4"/>
                    <rect id="Rectangle 64" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.34692 119.463)" fill="#C4C4C4"/>
                    <rect id="Rectangle 65" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.12659 125.458)" fill="#C4C4C4"/>
                    <rect id="Rectangle 66" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.90625 131.453)" fill="#C4C4C4"/>
                    <rect id="Rectangle 67" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.68591 137.448)" fill="#C4C4C4"/>
                    <rect id="Rectangle 68" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.46545 143.443)" fill="#C4C4C4"/>
                    <rect id="Rectangle 69" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.24512 149.438)" fill="#C4C4C4"/>
                    <rect id="Rectangle 70" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.02478 155.433)" fill="#C4C4C4"/>
                    <rect id="Rectangle 71" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 0.804443 161.429)" fill="#C4C4C4"/>
                    <rect id="Rectangle 72" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 0.584106 167.424)" fill="#C4C4C4"/>
                  </g>
                </mask>
                <g mask="url(#mask0_1921_37002)">
                  <ellipse id="Ellipse 5" rx="81.6532" ry="81.5" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 85.1758 85.1414)" fill="url(#paint0_linear_1921_37002)"/>
                </g>
              </g>
              <defs>
                <linearGradient id="paint0_linear_1921_37002" x1="0" y1="84.4307" x2="202.575" y2="84.4307" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FFC444"/>
                  <stop offset="0.996403" stop-color="#F36F56"/>
                  <stop offset="1" stop-color="#F36F56"/>
                </linearGradient>
              </defs>
            </svg>

            <svg id="blob--orange-medium-success" class="grow-1-25" width="272" height="99" viewBox="0 0 272 99" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="bg--3" d="M246.246 23.027C242.284 23.0307 238.54 23.9738 235.207 25.6513C207.318 39.333 174.113 34.3086 151.104 12.9069C142.641 5.02943 131.43 0.235275 119.151 0.243863C101.005 0.257656 85.2845 10.7599 77.3506 26.1821C66.7407 46.6081 40.7767 52.1721 23.0415 37.7927L23.0418 37.8067C20.6135 35.8332 17.555 34.6471 14.2281 34.6488C6.38585 34.6548 0.0572439 41.2119 0.0901544 49.2953C0.123588 57.3769 6.50696 63.9239 14.3463 63.9174C17.6744 63.9156 20.7227 62.7241 23.1353 60.7467L23.1356 60.7595C40.7518 46.3525 66.7613 51.8768 77.5368 72.2857C85.5987 87.6948 101.403 98.1729 119.55 98.1602C131.83 98.1493 143.001 93.3369 151.4 85.4456L151.401 85.4461C174.234 64.0084 207.399 58.9324 235.399 72.5715C238.744 74.2429 242.497 75.1813 246.459 75.1782C260.43 75.1677 271.709 63.4836 271.651 49.0821C271.591 34.6827 260.218 23.016 246.246 23.027" fill="url(#paint0_linear_1846_19028)"/>
              <defs>
                <linearGradient id="paint0_linear_1846_19028" x1="210.675" y1="125.477" x2="19.2451" y2="-51.7435" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FFC444"/>
                  <stop offset="0.996403" stop-color="#F36F56"/>
                  <stop offset="1" stop-color="#F36F56"/>
                </linearGradient>
              </defs>
            </svg>

            <svg id="circle--solid-pink-small-success" class="grow-1-5" width="59" height="61" viewBox="0 0 59 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g>
                <path id="circle--solid_2" d="M47.876 42.4956C41.6856 52.8791 28.5038 56.0957 18.4328 49.6773C8.36299 43.2601 5.21589 29.6395 11.4063 19.256C17.5968 8.87093 30.7794 5.65566 40.8502 12.0731C50.9204 18.4902 54.0663 32.1116 47.876 42.4956Z" fill="url(#paint0_linear_1846_19076)"/>
              </g>
              <defs>
                <linearGradient id="paint0_linear_1846_19076" x1="42.7905" y1="42.6152" x2="-63.6115" y2="43.7088" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF9085"/>
                  <stop offset="1" stop-color="#FB6FBB"/>
                </linearGradient>
              </defs>
            </svg>

            <svg id="circle--solid-purple-small-success" class="grow-1-5" width="62" height="59" viewBox="0 0 62 59" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="circle--solid">
                <path id="circle--solid_2" d="M39.6839 49.181C28.212 53.9774 15.0269 48.6092 10.2349 37.188C5.44336 25.7685 10.8575 12.6207 22.3294 7.82424C33.8023 3.02656 46.9874 8.39633 51.7797 19.8166C56.5717 31.2363 51.156 44.384 39.6839 49.181Z" fill="url(#paint0_linear_1921_48882)"/>
              </g>
              <defs>
                <linearGradient id="paint0_linear_1921_48882" x1="40.3299" y1="16.3336" x2="11.8135" y2="29.7555" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#311944"/>
                  <stop offset="1" stop-color="#893976"/>
                </linearGradient>
              </defs>
            </svg>
        </div>
      </div>
    </div>

    <div class="container__large">
      <div class="container__small">
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">You have successfully completed the Chatbots badge!</p>
        <h2 class="badge__goals--title" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
          In this badge you have:
        </h2>

        <ul class="list__single-col badge__goals--list container__small" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="150">
          <li>Discovered how and why we use chatbots</li>
          <li>Learnt about some of the different types of chatbots</li>
          <li>Found out about some of the technology behind chatbots including artificial intelligence (AI) and natural language processing (NLP)</li>
          <li>Designed, programmed, tested, deployed and maintained a chatbot</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="complete">
    <div class="container__large">
      <p class="step__completed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <a onclick="oBadges.stepCompleted();" class="btn btn-orange" href="{{$links['submit']}}">Return to <span style="text-transform: none; margin-left: 0.25em;">i</span>DEA</a>
      </p>
    </div>
  </section>

  <svg id="badge__title--svg-1" class="badge__title--svg grow-1-25" fill="none" xmlns="http://www.w3.org/2000/svg" width="707.91" height="227.09" viewBox="-398.79 346.76 707.91 227.09">
    <g id="bg--4">
      <path id="bg--3" d="M-326.466 545.909C-316.142 545.117 -306.6 542.196 -298.292 537.659C-228.706 500.514 -141.067 505.563 -76.3144 550.49C-52.4946 567.028 -22.2105 575.894 9.77985 573.446C57.0526 569.825 95.6514 542.437 112.859 505.215C135.914 455.896 202.311 437.899 251.746 467.634L251.742 467.602C258.512 471.684 266.747 473.821 275.414 473.159C295.844 471.594 310.86 455.184 308.959 436.503C307.057 417.827 288.956 403.954 268.533 405.519C259.863 406.181 252.189 409.539 246.347 414.587L246.343 414.558C203.682 451.348 134.678 443.72 102.021 398.669C77.5565 364.641 34.0266 343.543 -13.2495 347.161C-45.2391 349.614 -73.2634 362.949 -93.3752 382.853L-93.3769 382.852C-148.05 436.927 -233.316 455.22 -309.329 429.226C-318.421 426.024 -328.408 424.596 -338.73 425.387C-375.127 428.174 -401.89 457.416 -398.504 490.698C-395.114 523.975 -362.863 548.697 -326.466 545.909Z" fill="url(#paint0_linear_1259_86978)"></path>
      <g id="circle--lines">
        <mask id="mask0_1259_86978" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="84" y="384" width="224" height="302">
          <g id="lines">
            <rect id="Rectangle 37" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 202.052 384.066)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 38" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 204.61 390.418)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 39" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 207.169 396.766)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 40" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 209.727 403.117)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 41" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 212.285 409.469)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 42" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 214.844 415.816)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 43" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 217.402 422.168)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 44" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 219.96 428.52)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 45" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 222.518 434.871)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 46" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 225.077 441.219)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 47" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 227.635 447.57)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 48" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 230.193 453.922)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 49" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 232.752 460.27)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 50" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 235.31 466.621)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 51" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 237.868 472.973)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 52" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 240.426 479.32)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 53" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 242.985 485.672)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 54" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 245.543 492.023)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 55" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 248.101 498.371)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 56" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 250.66 504.723)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 57" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 253.218 511.074)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 58" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 255.776 517.426)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 59" width="2.37314" height="119.237" transform="matrix(0.35934 0.891975 -0.985321 0.325983 258.335 523.773)" fill="#C4C4C4"></rect>
          </g>
        </mask>
      </g>
    </g>
    <defs>
      <linearGradient id="paint0_linear_1259_86978" x1="397.496" y1="469.215" x2="-85.95" y2="956.183" gradientUnits="userSpaceOnUse">
        <stop stop-color="#AA80F9"></stop>
        <stop offset="0.996403" stop-color="#6165D7"></stop>
        <stop offset="1" stop-color="#6165D7"></stop>
      </linearGradient>
      <linearGradient id="paint1_linear_1259_86978" x1="0" y1="61.7622" x2="148.056" y2="61.7622" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FFC444"></stop>
        <stop offset="0.996403" stop-color="#F36F56"></stop>
        <stop offset="1" stop-color="#F36F56"></stop>
      </linearGradient>
      <linearGradient id="paint2_linear_1259_86978" x1="328.52" y1="542.749" x2="173.433" y2="436.002" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FF9085"></stop>
        <stop offset="1" stop-color="#FB6FBB"></stop>
      </linearGradient>
    </defs>
  </svg>

  <svg id="badge__title--svg-2" class="badge__title--svg rotate__40" width="125" height="128" viewBox="0 0 125 128" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g>
      <mask id="mask0_1846_19029" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-33" width="127" height="194">
        <g id="lines">
          <rect id="Rectangle 44" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 3.07465 128.437)" fill="#C4C4C4"/>
          <rect id="Rectangle 45" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.97827 123.834)" fill="#C4C4C4"/>
          <rect id="Rectangle 46" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.88196 119.231)" fill="#C4C4C4"/>
          <rect id="Rectangle 47" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.78558 114.628)" fill="#C4C4C4"/>
          <rect id="Rectangle 48" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.68921 110.025)" fill="#C4C4C4"/>
          <rect id="Rectangle 49" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.59283 105.422)" fill="#C4C4C4"/>
          <rect id="Rectangle 50" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.49646 100.819)" fill="#C4C4C4"/>
          <rect id="Rectangle 51" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.40015 96.2166)" fill="#C4C4C4"/>
          <rect id="Rectangle 52" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.30377 91.6138)" fill="#C4C4C4"/>
          <rect id="Rectangle 53" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.2074 87.0107)" fill="#C4C4C4"/>
          <rect id="Rectangle 54" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.11102 82.408)" fill="#C4C4C4"/>
          <rect id="Rectangle 55" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 2.01465 77.8049)" fill="#C4C4C4"/>
          <rect id="Rectangle 56" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.91827 73.2021)" fill="#C4C4C4"/>
          <rect id="Rectangle 57" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.8219 68.5994)" fill="#C4C4C4"/>
          <rect id="Rectangle 58" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.72552 63.9963)" fill="#C4C4C4"/>
          <rect id="Rectangle 59" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.62915 59.3936)" fill="#C4C4C4"/>
          <rect id="Rectangle 60" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.53284 54.7908)" fill="#C4C4C4"/>
          <rect id="Rectangle 61" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.43646 50.1877)" fill="#C4C4C4"/>
          <rect id="Rectangle 62" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.34009 45.585)" fill="#C4C4C4"/>
          <rect id="Rectangle 63" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.24371 40.9819)" fill="#C4C4C4"/>
          <rect id="Rectangle 64" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.14734 36.3792)" fill="#C4C4C4"/>
          <rect id="Rectangle 65" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 1.05103 31.7764)" fill="#C4C4C4"/>
          <rect id="Rectangle 66" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.954651 27.1733)" fill="#C4C4C4"/>
          <rect id="Rectangle 67" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.858276 22.5706)" fill="#C4C4C4"/>
          <rect id="Rectangle 68" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.761902 17.9675)" fill="#C4C4C4"/>
          <rect id="Rectangle 69" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.665527 13.3647)" fill="#C4C4C4"/>
          <rect id="Rectangle 70" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.569214 8.76196)" fill="#C4C4C4"/>
          <rect id="Rectangle 71" width="1.51182" height="123.213" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 0.472839 4.15894)" fill="#C4C4C4"/>
        </g>
      </mask>
      <g mask="url(#mask0_1846_19029)">
        <ellipse id="Ellipse 5" rx="61.7225" ry="61.6067" transform="matrix(-0.0212467 -1.01486 0.984471 -0.0204627 62.3971 63.7689)" fill="url(#paint0_linear_1846_19029)"/>
      </g>
    </g>
    <defs>
      <linearGradient id="paint0_linear_1846_19029" x1="0" y1="63.8221" x2="153.128" y2="63.8221" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FFC444"/>
        <stop offset="0.996403" stop-color="#F36F56"/>
        <stop offset="1" stop-color="#F36F56"/>
      </linearGradient>
    </defs>
  </svg>

  <svg id="badge__title--svg-3" class="badge__title--svg grow-1-5" width="59" height="61" viewBox="0 0 59 61" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g>
      <path id="circle--solid_2" d="M47.876 42.4956C41.6856 52.8791 28.5038 56.0957 18.4328 49.6773C8.36299 43.2601 5.21589 29.6395 11.4063 19.256C17.5968 8.87093 30.7794 5.65566 40.8502 12.0731C50.9204 18.4902 54.0663 32.1116 47.876 42.4956Z" fill="url(#paint0_linear_1846_19076)"/>
    </g>
    <defs>
      <linearGradient id="paint0_linear_1846_19076" x1="42.7905" y1="42.6152" x2="-63.6115" y2="43.7088" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FF9085"/>
        <stop offset="1" stop-color="#FB6FBB"/>
      </linearGradient>
    </defs>
  </svg>

  <svg id="badge__title--svg-4" class="badge__title--svg grow-1-25" fill="none" xmlns="http://www.w3.org/2000/svg" width="594.28" height="191.48" viewBox="137.59 263.43 594.28 191.48">
    <g id="bg--3">
      <path id="bg--3_2" d="M683.27 340.164C674.609 339.18 666.159 340.072 658.399 342.491C593.572 362.045 522.428 343.991 478.208 296.726C461.944 279.33 438.803 267.226 411.964 264.17C372.303 259.655 334.97 276.088 313.259 304.013C284.282 340.971 225.961 345.264 191.277 312.938L191.274 312.965C186.526 308.53 180.178 305.464 172.907 304.635C155.766 302.684 140.077 313.816 137.857 329.501C135.64 345.183 147.735 359.478 164.869 361.428C172.143 362.257 179.143 360.709 184.976 357.478L184.973 357.503C227.556 333.971 282.833 351.194 300.598 393.472C313.849 425.374 345.42 449.651 385.083 454.168C411.922 457.22 437.701 450.683 458.295 437.481L458.296 437.482C514.272 401.62 588.192 400.077 645.519 433.536C652.358 437.615 660.292 440.374 668.952 441.359C699.488 444.836 727.451 424.999 731.405 397.054C735.356 369.113 713.807 343.64 683.27 340.164Z" fill="url(#paint0_linear_1259_86979)"></path>
      <g id="circle--lines">
        <mask id="mask0_1259_86979" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="209" y="298" width="243" height="264">
          <g id="lines">
            <rect id="Rectangle 56" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 227.614 452.93)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 57" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 226.784 447.223)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 58" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 225.953 441.52)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 59" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 225.123 435.816)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 60" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 224.293 430.113)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 61" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 223.463 424.41)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 62" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 222.633 418.707)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 63" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 221.803 413.004)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 64" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 220.973 407.301)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 65" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 220.143 401.594)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 66" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 219.313 395.891)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 67" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 218.483 390.188)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 68" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 217.653 384.484)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 69" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 216.823 378.781)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 70" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 215.993 373.078)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 71" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 215.163 367.375)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 72" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 214.333 361.672)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 73" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 213.503 355.965)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 74" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 212.673 350.262)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 75" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 211.843 344.559)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 76" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 211.012 338.855)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 77" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 210.182 333.152)" fill="#C4C4C4"></rect>
            <rect id="Rectangle 78" width="2" height="202.033" transform="matrix(-0.138342 -0.950603 1.02864 -0.131545 209.352 327.449)" fill="#C4C4C4"></rect>
          </g>
        </mask>
      </g>
    </g>
    <defs>
      <linearGradient id="paint0_linear_1259_86979" x1="71.5781" y1="288.524" x2="571.803" y2="-30.3974" gradientUnits="userSpaceOnUse">
        <stop stop-color="#AA80F9"></stop>
        <stop offset="0.996403" stop-color="#6165D7"></stop>
        <stop offset="1" stop-color="#6165D7"></stop>
      </linearGradient>
      <linearGradient id="paint1_linear_1259_86979" x1="0" y1="104.649" x2="244.886" y2="104.649" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FFC444"></stop>
        <stop offset="0.996403" stop-color="#F36F56"></stop>
        <stop offset="1" stop-color="#F36F56"></stop>
      </linearGradient>
    </defs>
  </svg>

  <svg id="badge__title--svg-5" class="badge__title--svg rotate__40" width="170" height="169" viewBox="0 0 170 169" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="circle--lines">
      <mask id="mask0_1921_37002" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-43" width="173" height="255">
        <g id="lines">
          <rect id="Rectangle 43" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.97461 -6.43292)" fill="#C4C4C4"/>
          <rect id="Rectangle 44" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.75427 -0.437866)" fill="#C4C4C4"/>
          <rect id="Rectangle 45" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.53381 5.55713)" fill="#C4C4C4"/>
          <rect id="Rectangle 46" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.31348 11.5522)" fill="#C4C4C4"/>
          <rect id="Rectangle 47" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 6.09314 17.5472)" fill="#C4C4C4"/>
          <rect id="Rectangle 48" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.8728 23.5423)" fill="#C4C4C4"/>
          <rect id="Rectangle 49" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.65234 29.5374)" fill="#C4C4C4"/>
          <rect id="Rectangle 50" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.43201 35.5324)" fill="#C4C4C4"/>
          <rect id="Rectangle 51" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 5.21167 41.5275)" fill="#C4C4C4"/>
          <rect id="Rectangle 52" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.99133 47.5225)" fill="#C4C4C4"/>
          <rect id="Rectangle 53" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.771 53.5176)" fill="#C4C4C4"/>
          <rect id="Rectangle 54" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.55054 59.5126)" fill="#C4C4C4"/>
          <rect id="Rectangle 55" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.3302 65.5077)" fill="#C4C4C4"/>
          <rect id="Rectangle 56" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 4.10986 71.5027)" fill="#C4C4C4"/>
          <rect id="Rectangle 57" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.88953 77.4978)" fill="#C4C4C4"/>
          <rect id="Rectangle 58" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.66919 83.4929)" fill="#C4C4C4"/>
          <rect id="Rectangle 59" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.44873 89.4879)" fill="#C4C4C4"/>
          <rect id="Rectangle 60" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.22839 95.4829)" fill="#C4C4C4"/>
          <rect id="Rectangle 61" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 3.00806 101.478)" fill="#C4C4C4"/>
          <rect id="Rectangle 62" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.78772 107.473)" fill="#C4C4C4"/>
          <rect id="Rectangle 63" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.56726 113.468)" fill="#C4C4C4"/>
          <rect id="Rectangle 64" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.34692 119.463)" fill="#C4C4C4"/>
          <rect id="Rectangle 65" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 2.12659 125.458)" fill="#C4C4C4"/>
          <rect id="Rectangle 66" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.90625 131.453)" fill="#C4C4C4"/>
          <rect id="Rectangle 67" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.68591 137.448)" fill="#C4C4C4"/>
          <rect id="Rectangle 68" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.46545 143.443)" fill="#C4C4C4"/>
          <rect id="Rectangle 69" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.24512 149.438)" fill="#C4C4C4"/>
          <rect id="Rectangle 70" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 1.02478 155.433)" fill="#C4C4C4"/>
          <rect id="Rectangle 71" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 0.804443 161.429)" fill="#C4C4C4"/>
          <rect id="Rectangle 72" width="2" height="163" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 0.584106 167.424)" fill="#C4C4C4"/>
        </g>
      </mask>
      <g mask="url(#mask0_1921_37002)">
        <ellipse id="Ellipse 5" rx="81.6532" ry="81.5" transform="matrix(-0.0367272 0.999175 0.999475 0.0367395 85.1758 85.1414)" fill="url(#paint0_linear_1921_37002)"/>
      </g>
    </g>
    <defs>
      <linearGradient id="paint0_linear_1921_37002" x1="0" y1="84.4307" x2="202.575" y2="84.4307" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FFC444"/>
        <stop offset="0.996403" stop-color="#F36F56"/>
        <stop offset="1" stop-color="#F36F56"/>
      </linearGradient>
    </defs>
  </svg>
</main>



@endsection
@section('javascript')


@endsection
