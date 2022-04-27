@extends('layouts.app')

@section('content')
  <main class="partners-page">
    <h1 class="heading txt-center">{{ __('Наши партнеры') }}</h1>
    <section class="partners">
      <div class="container partners__container">
        <p class="partners__text txt-center">
          {{ __('Мы имеем все необходимые лицензии и сертификаты для оказания медицинских услуг, вот почему нам доверяют.') }}
        </p>
        <ul class="partners-list partners-page__partners-list">
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner1.png') }}" width="192" height="192">
            {{-- <h3 class="txt-center">Министерство Здравоохранения Турецкой Республики</h3> --}}
          </li>
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner2.jpg') }}" width="192" height="192">
            {{-- <h3 class="txt-center">USHAŞ при Министерстве Здравоохранения</h3> --}}
          </li>
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner3.png') }}" width="192" height="192">
            {{-- <h3 class="txt-center">Турецкие Авиалинии</h3> --}}
          </li>
          <li class="partners-item">
            <img class="partners-img" src="{{ asset('img/partner4.jpg') }}" width="192" height="192">
            {{-- <h3 class="txt-center">Ассоциации туристических агентств</h3> --}}
          </li>
        </ul>
      </div>
    </section>
    <section class="invitation">
      <div class="container invitation__container">
        <h2 class="title txt-center">{{ __('Приглашаем к сотрудничеству') }}</h2>
        <p class="invitation__text">
          {{ __('Мы заинтересованы в развитии и тесном сотрудничестве с другими медицинскими организациями и центрами, а также открытие представительств в странах Америки, Европы и стран СНГ.') }}
        </p>
        <a class="button invitation__link" href="{{ route('contacts') }}">{{ __('Оставить заявку') }}</a>
        <div class="invitation-info">
          <img class="invitation-img" src="{{ asset('img/invitation.png') }}">
          <b class="invitation-info__title">Мы предоставляем всю информацию и открыты для сотрудничества.</b>
          <p class="invitation-info__text">Упрощаем жизнь. Создаём комфорт. Демонстрируем качество.</p>
          <p class="invitation-info__text">
            <strong>Приглашаем к сотрудничеству государственные и коммерческие структуры здравоохранения,
              а также медицинские образовательные учреждения.</strong> Мы открыты к диалогу и партнёрству,
            к совместным проектам и благотворительным вечерам, к выставкам связанные с тематикой медицинского
            и туристического профиля, совместным презентациям и мероприятиям медицинского направления.
            Приглашаем наших любимых, дорогих и уважаемых врачей, доцентов и академиков к совместному
            взаимодействию. Вместе будем содействовать в развитии медицины и медицинского туризма. Медицина
            и врачи достойны, чтобы о них говорили и узнавали за рубежом!
          </p>
          <p class="invitation-info__text">
            <strong>Henes Medtours</strong> также предоставляет возможность стать представителем компании в любом регионе
            или лечебном учреждении и будет полностью обеспечено всеми информационными материалами, работа будет построена
            на тесном и взаимовыгодном взаимодействии с руководителями международного сектора компании.
          </p>
          <p class="invitation-info__text">Приглашаем к совместной работе:</p>
          <ul class="whywe-list">
            <li class="whywe-item">Медицинские учреждения</li>
            <li class="whywe-item">Туристические компании</li>
            <li class="whywe-item">Медицинских работников</li>
            <li class="whywe-item">Реабилитационные центры</li>
            <li class="whywe-item">Страховые компании</li>
            <li class="whywe-item">Фармацевтические предприятия</li>
            <li class="whywe-item">Местные и Международные организации НПО </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
@endsection
