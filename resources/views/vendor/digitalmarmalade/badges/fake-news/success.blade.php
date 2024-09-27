@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')
@include('vendor.digitalmarmalade.badges.fake-news.header', ['title' => 'Header'])

<main class="main-content">
  <section class="container">
    <div class="well-done" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <svg class="well-done__blob grow-1-25" width="404" height="142" viewBox="0 0 404 142" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="bg--3" d="M39.7003 115.711C45.5786 115.483 51.0838 113.923 55.9417 111.335C96.605 90.1845 146.123 95.5164 181.362 124.866C194.325 135.669 211.203 141.904 229.419 141.204C256.336 140.167 279.114 124.25 290.086 101.727C304.769 71.8894 342.998 62.4685 370.05 82.0604L370.049 82.0404C373.753 84.7296 378.352 86.2563 383.287 86.0673C394.921 85.6191 403.97 75.8771 403.503 64.3065C403.035 52.7384 393.227 43.7233 381.598 44.1721C376.661 44.3612 372.201 46.2378 368.724 49.204L368.723 49.1856C343.335 70.7986 304.466 64.3477 287.426 35.7337C274.669 14.1254 250.682 0.0105219 223.763 1.04581C205.547 1.74974 189.224 9.26556 177.172 21.0338L177.171 21.033C144.409 53.0039 95.4725 62.1297 53.2305 44.1731C48.1808 41.9679 42.5657 40.8346 36.6884 41.0613C15.9639 41.8594 -0.164711 59.2189 0.667054 79.8333C1.50048 100.445 18.9753 116.51 39.7003 115.711" fill="url(#paint0_linear_2134_10641)"/>
        <defs>
          <linearGradient id="paint0_linear_2134_10641" x1="87.1714" y1="-32.9539" x2="371.289" y2="220.159" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFC444"/>
            <stop offset="0.996403" stop-color="#F36F56"/>
            <stop offset="1" stop-color="#F36F56"/>
          </linearGradient>
        </defs>
      </svg>

      <svg class="well-done__circle-lines rotate__40" width="191" height="189" viewBox="0 0 191 189" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="circle--lines">
          <mask id="mask0_2134_10642" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-17" width="193" height="224">
            <g id="lines">
              <rect id="Rectangle 38" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 179.593 -11.6719)" fill="#C4C4C4"/>
              <rect id="Rectangle 39" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 179.89 -6.53125)" fill="#C4C4C4"/>
              <rect id="Rectangle 40" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 180.188 -1.38672)" fill="#C4C4C4"/>
              <rect id="Rectangle 41" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 180.485 3.75391)" fill="#C4C4C4"/>
              <rect id="Rectangle 42" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 180.783 8.89453)" fill="#C4C4C4"/>
              <rect id="Rectangle 43" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 181.08 14.0352)" fill="#C4C4C4"/>
              <rect id="Rectangle 44" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 181.378 19.1758)" fill="#C4C4C4"/>
              <rect id="Rectangle 45" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 181.675 24.3203)" fill="#C4C4C4"/>
              <rect id="Rectangle 46" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 181.973 29.4609)" fill="#C4C4C4"/>
              <rect id="Rectangle 47" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 182.27 34.6016)" fill="#C4C4C4"/>
              <rect id="Rectangle 48" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 182.568 39.7422)" fill="#C4C4C4"/>
              <rect id="Rectangle 49" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 182.865 44.8867)" fill="#C4C4C4"/>
              <rect id="Rectangle 50" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 183.163 50.0273)" fill="#C4C4C4"/>
              <rect id="Rectangle 51" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 183.46 55.168)" fill="#C4C4C4"/>
              <rect id="Rectangle 52" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 183.758 60.3086)" fill="#C4C4C4"/>
              <rect id="Rectangle 53" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 184.055 65.4492)" fill="#C4C4C4"/>
              <rect id="Rectangle 54" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 184.353 70.5938)" fill="#C4C4C4"/>
              <rect id="Rectangle 55" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 184.65 75.7344)" fill="#C4C4C4"/>
              <rect id="Rectangle 56" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 184.948 80.875)" fill="#C4C4C4"/>
              <rect id="Rectangle 57" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 185.245 86.0156)" fill="#C4C4C4"/>
              <rect id="Rectangle 58" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 185.543 91.1562)" fill="#C4C4C4"/>
              <rect id="Rectangle 59" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 185.84 96.3008)" fill="#C4C4C4"/>
              <rect id="Rectangle 60" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 186.138 101.441)" fill="#C4C4C4"/>
              <rect id="Rectangle 61" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 186.435 106.582)" fill="#C4C4C4"/>
              <rect id="Rectangle 62" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 186.733 111.723)" fill="#C4C4C4"/>
              <rect id="Rectangle 63" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 187.03 116.863)" fill="#C4C4C4"/>
              <rect id="Rectangle 64" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 187.328 122.008)" fill="#C4C4C4"/>
              <rect id="Rectangle 65" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 187.625 127.148)" fill="#C4C4C4"/>
              <rect id="Rectangle 66" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 187.923 132.289)" fill="#C4C4C4"/>
              <rect id="Rectangle 67" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 188.22 137.43)" fill="#C4C4C4"/>
              <rect id="Rectangle 68" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 188.518 142.574)" fill="#C4C4C4"/>
              <rect id="Rectangle 69" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 188.815 147.715)" fill="#C4C4C4"/>
              <rect id="Rectangle 70" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 189.113 152.855)" fill="#C4C4C4"/>
              <rect id="Rectangle 71" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 189.41 157.996)" fill="#C4C4C4"/>
              <rect id="Rectangle 72" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 189.708 163.137)" fill="#C4C4C4"/>
              <rect id="Rectangle 73" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 190.005 168.281)" fill="#C4C4C4"/>
              <rect id="Rectangle 74" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 190.302 173.422)" fill="#C4C4C4"/>
              <rect id="Rectangle 75" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 190.6 178.562)" fill="#C4C4C4"/>
              <rect id="Rectangle 76" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 190.897 183.703)" fill="#C4C4C4"/>
              <rect id="Rectangle 77" width="1.7212" height="179.643" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 191.195 188.844)" fill="#C4C4C4"/>
            </g>
          </mask>
          <g mask="url(#mask0_2134_10642)">
            <ellipse id="Ellipse 5" rx="89.9901" ry="89.8213" transform="matrix(0.0576123 0.995708 -1.00094 0.0579413 95.5789 95.3629)" fill="url(#paint0_linear_2134_10642)"/>
          </g>
        </g>
        <defs>
          <linearGradient id="paint0_linear_2134_10642" x1="0" y1="93.0512" x2="223.258" y2="93.0512" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFC444"/>
            <stop offset="0.996403" stop-color="#F36F56"/>
            <stop offset="1" stop-color="#F36F56"/>
          </linearGradient>
        </defs>
      </svg>

      <svg class="well-done__circle-solid-1 grow-1-25" width="89" height="88" viewBox="0 0 89 88" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="circle--solid">
          <path id="circle--solid_2" d="M16.5421 28.4666C25.1883 13.2543 44.5765 7.91044 59.8483 16.5347C75.1182 25.1573 80.4911 44.4807 71.8449 59.693C63.1986 74.9076 43.8091 80.2496 28.5377 71.6267C13.2672 63.0043 7.89612 43.6796 16.5421 28.4666Z" fill="url(#paint0_linear_2134_10689)"/>
        </g>
        <defs>
          <linearGradient id="paint0_linear_2134_10689" x1="24.08" y1="28.0104" x2="181.872" y2="20.6275" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FF9085"/>
            <stop offset="1" stop-color="#FB6FBB"/>
          </linearGradient>
        </defs>
      </svg>

      <svg class="well-done__circle-solid-2 grow-1-25" width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="circle--solid">
          <path id="circle--solid_2" d="M50.5015 65.7706C35.8104 71.913 18.9252 65.0384 12.7886 50.4122C6.65245 35.7882 13.5859 18.9509 28.277 12.8084C42.9694 6.66444 59.8544 13.5411 65.9915 28.1661C72.1283 42.7903 65.1928 59.6275 50.5015 65.7706Z" fill="url(#paint0_linear_2134_10687)"/>
        </g>
        <defs>
          <linearGradient id="paint0_linear_2134_10687" x1="51.3287" y1="23.7056" x2="14.8102" y2="40.894" gradientUnits="userSpaceOnUse">
            <stop stop-color="#311944"/>
            <stop offset="1" stop-color="#893976"/>
          </linearGradient>
        </defs>
      </svg>

      <h1 class="heading-orange well-done__heading" data-aos="fade-up" data-aos-duration="1500" style="font-size:5.5rem;">
        Congratulations
      </h1>
    </div>

    <article class="t-centre" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">You have successfully completed the Fake News Detector badge!</p>
      <h2 class="inherit">
        In this badge, you have:
      </h2>

      <ul class="container list list--one-col mb-xl">
        <li class="list__item list__item--grey">
        Explored different types of fake news and techniques you can use to determine whether a news article is real or fake 
        </li>

        <li class="list__item list__item--grey">
        Discovered how machine learning can help us to identify news that is potentially fake and how computers use natural language processing (NLP) to process text
        </li>

        <li class="list__item list__item--grey">
        Gained an understanding of supervised vs. unsupervised learning models 
        </li>

        <li class="list__item list__item--grey">
        Created and trained your own fake news detector using machine learning 
        </li>

        <li class="list__item list__item--grey">
        Assessed the benefits and limitations of fake news detectors and considered how you could improve your model
        </li>
      </ul>

    </article>

  </section>

  <a onclick="oBadges.stepCompleted();"
    class="btn btn--orange force-centre"
    href="{{$links['submit']}}"
  >
    Go Back to <span style="text-transform: none; margin-left: 4px;">i</span>DEA
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
</main>

@include('vendor.digitalmarmalade.badges.fake-news.footer_animation')

@endsection @section('javascript')
<script type="module" src="/badge-assets/{{ $url['slug'] }}/_global/js/spicy-sections.js"></script>
@endsection
