@extends('layouts.app')

@section('content')
  <main class="reviews-page">
    <div class="container">
      <h1 class="heading txt-center">{{ __('Отзывы наших клиентов') }}</h1>
      <ul class="reviews">
        <li class="reviews__item">
          <img class="reviews__img" src="{{ asset('img/nikolay.png') }}">
          <div class="reviews__wrapper">
            <h3 class="reviews__author">Нелли</h3>
            {{-- <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
            <p>Выражаю огромную благодарность всему коллективу Henes Medtours Tajikistan не только профессионализм, но и такие человеческие чувства, как доброта, внимательность, отзывчивость, что очень не хватает и очень важно больному человеку. Всем вам здоровья! Большое человеческое спасибо Вам за Ваш профессионализм!</p>
          </div>
        </li>
        <li class="reviews__item">
          <img class="reviews__img" src="{{ asset('img/nikolay.png') }}">
          <div class="reviews__wrapper">
            <h3 class="reviews__author">Шарофиддин</h3>
            {{-- <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
            <p>HENES MEDTOURS TAJIKISTAN Лучший оператор медицинского туризма!!! У моей Матери была сложная операция по замене коленного сустава в Индии, все сделали по высшему уровню. Оперативно и профессионально консультируют, сопровождают весь процесс лечения от и до! Круглосуточно на связи и помогут в любой ситуации, которая может возникнуть в ходе лечения и пребывания в другой стране!</p>
          </div>
        </li>
        <li class="reviews__item">
          <img class="reviews__img" src="{{ asset('img/nikolay.png') }}">
          <div class="reviews__wrapper">
            <h3 class="reviews__author">Александр</h3>
            {{-- <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
            <p>Благодарю компанию Henes Medtours Tajikistan за прекрасную организацию моего пребывания на лечении в Индии. Несмотря на сложную операцию по онкологии, я чувствовала себя спокойно и уверенно. Врачи были подобраны самой высокой квалификации. Всё прошло очень слаженно и в максимально короткие сроки. Спасибо большое! Всем про Вас рассказываю и рекомендую!</p>
          </div>
        </li>
        <li class="reviews__item">
          <img class="reviews__img" src="{{ asset('img/nikolay.png') }}">
          <div class="reviews__wrapper">
            <h3 class="reviews__author">Мадина</h3>
            {{-- <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
            <p>Я хотела бы от души поблагодарить компанию HENES MEDTOURS TAJIKISTAN за прекрасную работу по организации моей поездки в Турцию. Все было идеально спланировано от встречи в аэропорту до бронирования номера в отеле Gorrion Hotel Istanbul, на все вопросы четко и быстро отвечали и объясняли все в подробностях.</p>
          </div>
        </li>
        <li class="reviews__item">
          <img class="reviews__img" src="{{ asset('img/nikolay.png') }}">
          <div class="reviews__wrapper">
            <h3 class="reviews__author">Сохиб</h3>
            {{-- <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
            <p>Огромное спасибо вам за правильное и нужное направление в выборе клиники. Очень вам благодарна за вашу отзывчивость, доброту и терпение, за то что всегда были на связи и до сих пор также на связи, за понимание и поддержку в сложные моменты для меня.</p>
          </div>
        </li>
        <li class="reviews__item">
          <img class="reviews__img" src="{{ asset('img/nikolay.png') }}">
          <div class="reviews__wrapper">
            <h3 class="reviews__author">Нигина</h3>
            {{-- <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small> --}}
            <p>Здравствуйте, сегодня хочу поделиться впечатлениями о HENES MEDTOURS TAJIKISTAN . Наша семья столкнулась с проблемой - у младшего брата обнаружили серьёзные проблемы с сердцем. К сожалению наша медицина оказалась бессильной и нам посоветовали обратится в клинику Индии. Я по своей сути являясь скрытным человеком и не любящим выносить сор из избы не хотела писать данный отзыв, но подумала вдруг у кого-то тоже такая же ситуация, и если моя информация кому-то поможет - это будет лучшее, с моей стороны, что я могла бы сделать.</p>
          </div>
        </li>
      </ul>
    </div>
  </main>
@endsection
