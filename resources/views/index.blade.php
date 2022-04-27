@extends('layouts.app')

@section('content')
  <main class="home">
    <section class="vitrin">
      <video class="vitrin-video" src="{{ asset('videos/vitrin.webm') }}" autoplay loop muted></video>
      <div class="container vitrin__container">
        <div class="vitrin-wrapper">
          <h1 class="heading vitrin__heading">{{ __('Henes Medtours Tajikistan – Первое широкопрофильное Агентство по Медицинскому Туризму в Таджикистане.') }}</h1>
          <a class="button vitrin__button" href="{{ route('contacts') }}">{{ __('Свяжитесь с нами') }}</a>
          <a class="button vitrin__button button--white" href="{{ route('about') }}">{{ __('О нас') }}</a>
        </div>
      </div>
    </section>
    <section class="home-service">
      <h2 class="title txt-center">{{ __('Услуги') }}</h2>
      <ul class="countries-list home__countries-list">
        <li class="countries-item">
          <a class="countries-link" href="{{ route('services') }}">{{ __('Медицинские услуги') }}</a>
        </li>
        <li class="countries-item">
          <a class="countries-link" href="{{ route('services') }}#nomedservices">{{ __('Не медицинские услуги') }}</a>
        </li>
      </ul>
    </section>
    <section class="partners">
      <div class="container">
        <h2 class="title txt-center">{{ __('Наши партнеры') }}</h2>
        <p class="partners__text txt-center">
          {{ __('Мы имеем все необходимые лицензии и сертификаты для оказания медицинских услуг, вот почему нам доверяют.') }}
        </p>
        <ul class="partners-list home__partners-list">
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner1.png') }}" width="240" height="240">
            {{-- <h3 class="txt-center">Министерство Здравоохранения Турецкой Республики</h3> --}}
          </li>
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner2.jpg') }}" width="240" height="240">
            {{-- <h3 class="txt-center">USHAŞ при Министерстве Здравоохранения</h3> --}}
          </li>
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner3.png') }}" width="240" height="240">
            {{-- <h3 class="txt-center">Турецкие Авиалинии</h3> --}}
          </li>
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner4.jpg') }}" width="240" height="240">
            {{-- <h3 class="txt-center">Ассоциации туристических агентств</h3> --}}
          </li>
        </ul>
      </div>
    </section>
    <section class="comments">
      <div class="container">
        <h2 class="title txt-white txt-center">{{ __('Отзывы наших клиентов') }}:</h2>
        <div class="owl-carousel comments-slide">
          <div class="comments-slide-item">
            <img class="comments__img" src="{{ asset('img/nikolay.png') }}">
            <div class="comments-info txt-white">
              <h3>Нелли</h3>
              {{-- <small class="comments__time">Россия:<time datetime="2015-05-12">12 мая 2015</time></small> --}}
              <p class="comments__text">Выражаю огромную благодарность всему коллективу Henes Medtours Tajikistan не только профессионализм, но и такие человеческие чувства, как доброта, внимательность, отзывчивость, что очень не хватает и очень важно больному человеку. Всем вам здоровья! Большое человеческое спасибо Вам за Ваш профессионализм!</p>
              <a class="button comments__further" href="{{ route('reviews') }}">{{ __('Читать все отзывы') }}</a>
            </div>
          </div>
          <div class="comments-slide-item">
            <img class="comments__img" src="{{ asset('img/nikolay.png') }}">
            <div class="comments-info txt-white">
              <h3>Шарофиддин</h3>
              {{-- <small class="comments__time">Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
              <p class="comments__text">HENES MEDTOURS TAJIKISTAN Лучший оператор медицинского туризма!!! У моей Матери была сложная операция по замене коленного сустава в Индии, все сделали по высшему уровню. Оперативно и профессионально консультируют, сопровождают весь процесс лечения от и до! Круглосуточно на связи и помогут в любой ситуации, которая может возникнуть в ходе лечения и пребывания в другой стране!</p>
              <a class="button comments__further" href="{{ route('reviews') }}">{{ __('Читать все отзывы') }}</a>
            </div>
          </div>
          <div class="comments-slide-item">
            <img class="comments__img" src="{{ asset('img/nikolay.png') }}">
            <div class="comments-info txt-white">
              <h3>Александр</h3>
              {{-- <small class="comments__time">Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
              <p class="comments__text">Благодарю компанию Henes Medtours Tajikistan за прекрасную организацию моего пребывания на лечении в Индии. Несмотря на сложную операцию по онкологии, я чувствовала себя спокойно и уверенно. Врачи были подобраны самой высокой квалификации. Всё прошло очень слаженно и в максимально короткие сроки. Спасибо большое! Всем про Вас рассказываю и рекомендую!</p>
              <a class="button comments__further" href="{{ route('reviews') }}">{{ __('Читать все отзывы') }}</a>
            </div>
          </div>
          <div class="comments-slide-item">
            <img class="comments__img" src="{{ asset('img/nikolay.png') }}">
            <div class="comments-info txt-white">
              <h3>Мадина</h3>
              {{-- <small class="comments__time">Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
              <p class="comments__text">Я хотела бы от души поблагодарить компанию HENES MEDTOURS TAJIKISTAN за прекрасную работу по организации моей поездки в Турцию. Все было идеально спланировано от встречи в аэропорту до бронирования номера в отеле Gorrion Hotel Istanbul, на все вопросы четко и быстро отвечали и объясняли все в подробностях.</p>
              <a class="button comments__further" href="{{ route('reviews') }}">{{ __('Читать все отзывы') }}</a>
            </div>
          </div>
          <div class="comments-slide-item">
            <img class="comments__img" src="{{ asset('img/nikolay.png') }}">
            <div class="comments-info txt-white">
              <h3>Сохиб</h3>
              {{-- <small class="comments__time">Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
              <p class="comments__text">Огромное спасибо вам за правильное и нужное направление в выборе клиники. Очень вам благодарна за вашу отзывчивость, доброту и терпение, за то что всегда были на связи и до сих пор также на связи, за понимание и поддержку в сложные моменты для меня.</p>
              <a class="button comments__further" href="{{ route('reviews') }}">{{ __('Читать все отзывы') }}</a>
            </div>
          </div>
          <div class="comments-slide-item">
            <img class="comments__img" src="{{ asset('img/nikolay.png') }}">
            <div class="comments-info txt-white">
              <h3>Нигина</h3>
              {{-- <small class="comments__time">Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
              <p class="comments__text">Здравствуйте, сегодня хочу поделиться впечатлениями о HENES MEDTOURS TAJIKISTAN . Наша семья столкнулась с проблемой - у младшего брата обнаружили серьёзные проблемы с сердцем. К сожалению наша медицина оказалась бессильной и нам посоветовали обратится в клинику Индии. Я по своей сути являясь скрытным человеком и не любящим выносить сор из избы не хотела писать данный отзыв, но подумала вдруг у кого-то тоже такая же ситуация, и если моя информация кому-то поможет - это будет лучшее, с моей стороны, что я могла бы сделать.</p>
              <a class="button comments__further" href="{{ route('reviews') }}">{{ __('Читать все отзывы') }}</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
