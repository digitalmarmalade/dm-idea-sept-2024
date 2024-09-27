@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="task-3">
      <section class="top grad-pink">
        <div class="holder">
          <div class="cols">
            <div>
              <h1 data-aos="fade-right">Task</h1>
              <p data-aos="fade-right" data-aos-delay="100">Let’s see how good you are at cryptography! Are you able to decipher the cryptographic message below? Each symbol below corresponds to a letter in the alphabet. Can you type in all the correct letters to reveal the message?</p>
              <p data-aos="fade-right" data-aos-delay="200"><b>Tip:</b> As you type in, the correct letters will turn green.</p>
            </div>
            <div>
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/task-3.png" />
            </div>
          </div>

          <div class="diagram">
            <ul>

              <li>
                <input name="C" class="letter-input" data-answer="c" value="" name="C" maxlength="1" type="text" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="y" maxlength="1" type="text" name="Y" value=""data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-Y.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="p" maxlength="1" type="text" name="P" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-P.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="o" maxlength="1" type="text" name="O" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-O.svg" />
                </div>
              </li>

              <li>
                <input  name="C"  class="letter-input" data-answer="c" maxlength="1" type="text" name="C" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="u" maxlength="1" type="text" name="U" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-U.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="n" maxlength="1" type="text" name="N" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-N.svg" />
                </div>
              </li>

              <li>
                <input name="C" class="letter-input" data-answer="c" maxlength="1" type="text" name="C" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="i" maxlength="1" type="text" name="I" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-I.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="s" maxlength="1" type="text" name="S" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-S.svg" />
                </div>
              </li>

            </ul>

            <ul>

              <li>
                <input class="letter-input" data-answer="a" maxlength="1" type="text" name="A" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-A.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

            </ul>


            <ul>

              <li>
                <input class="letter-input" data-answer="d" maxlength="1" type="text" name="D" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-D.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="i" maxlength="1" type="text" name="I" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-I.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="g" maxlength="1" type="text" name="G" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-G.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="i" maxlength="1" type="text" name="I" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-I.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="a" maxlength="1" type="text" name="A" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-A.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="l" maxlength="1" type="text" name="L" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-L.svg" />
                </div>
              </li>

            </ul>

            <ul>
              <li>
                <input name="C" class="letter-input" data-answer="c" maxlength="1" type="text" name="C" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="u" maxlength="1" type="text" name="U" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-U.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="n" maxlength="1" type="text" name="N" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-N.svg" />
                </div>
              </li>

              <li>
                <input name="C" class="letter-input" data-answer="c" maxlength="1" type="text" name="C" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="i" maxlength="1" type="text" name="I" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-I.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="s" maxlength="1" type="text" name="S" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-S.svg" />
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="h" maxlength="1" type="text" name="H" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-H.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="a" maxlength="1" type="text" name="A" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-A.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <input class="letter-input" data-answer="u" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-U.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="s" maxlength="1" type="text" name="s" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-S.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

            </ul>

            <ul>
              <li>
                <input name="C" class="letter-input" data-answer="c" maxlength="1" type="text" name="C" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="y" maxlength="1" type="text" name="Y" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-Y.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="p" maxlength="1" type="text" name="P" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-P.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="o" maxlength="1" type="text" name="O" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-O.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="g" maxlength="1" type="text" name="G" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-G.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="a" maxlength="1" type="text" name="A" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-A.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="p" maxlength="1" type="text" name="P" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-P.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="h" maxlength="1" type="text" name="H" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-H.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="y" maxlength="1" type="text" name="Y" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-Y.svg" />
                </div>
              </li>

            </ul>

            <ul>
              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input letter-trigger" data-answer="o" maxlength="1" type="text" name="O" value="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-O.svg" />
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <input class="letter-input" data-answer="s" maxlength="1" type="text" name="S" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-S.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

              <li>
                <input name="C" class="letter-input" data-answer="c" maxlength="1" type="text" name="C" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="u" maxlength="1" type="text" name="U" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-U.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <input class="letter-input" data-answer="a" maxlength="1" type="text" name="A" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-A.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="n" maxlength="1" type="text" name="N" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-N.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="d" maxlength="1" type="text" name="D" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-D.svg" />
                </div>
              </li>
            </ul>

            <ul>

              <li>
                <input class="letter-input" data-answer="v" maxlength="1" type="text" name="V" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-V.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="e" maxlength="1" type="text" name="E" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-E.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="i" maxlength="1" type="text" name="I" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-I.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="f" maxlength="1" type="text" name="F" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-F.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="y" maxlength="1" type="text" name="Y" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-Y.svg" />
                </div>
              </li>

            </ul>

            <ul>

              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="r" maxlength="1" type="text" name="R" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-R.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="a" maxlength="1" type="text" name="A" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-A.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="n" maxlength="1" type="text" name="N" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-N.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="s" maxlength="1" type="text" name="S" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-S.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="a" maxlength="1" type="text" name="A" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-A.svg" />
                </div>
              </li>

              <li>
                <input name="C" class="letter-input" data-answer="c" maxlength="1" type="text" name="C" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-C.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="t" maxlength="1" type="text" name="T" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-T.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="i" maxlength="1" type="text" name="I" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-I.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="o" maxlength="1" type="text" name="O" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-O.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="n" maxlength="1" type="text" name="N" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-N.svg" />
                </div>
              </li>

              <li>
                <input class="letter-input" data-answer="s" maxlength="1" type="text" name="S" value="" data-aos="zoom-in" data-aos-delay="100" data-aos-anchor=".letter-trigger">.
                <div class="icon" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor=".letter-trigger">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-icon-S.svg" />
                </div>
              </li>

            </ul>

        </div>

      </div>

      </section>

      <section class="bottom grad-blue feedback feedback-success hide">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Well done!</h1>
                <a  onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" data-aos="zoom-in" data-aos-delay="200">Continue</a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 7);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/task-3.js"></script>
<script>
</script>
@endsection
