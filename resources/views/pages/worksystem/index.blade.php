@extends('layouts.app')

@section('content')
  <main class="worksystem">
    <div class="container">
      <h1 class="heading txt-center">{{ __('Система работы - Henes Medtours') }}</h1>
      <p class="txt-center">{{ __('В данной странице представлена информация о процессе получения услуг по лечению.') }}</p>
      <section class="process">
        <h2 class="title txt-center">{{ __('Процесс получения услуги по лечению') }}:</h2>
        <ol class="process-list">
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process1.jpg') }}">
            <h3 class="process-item__title">Первичная консультация</h3>
            <p class="process-item__text">
              Прием пациентов в офисе, короткое информирование по системе нашей работы
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process2.jpg') }}">
            <h3 class="process-item__title">Врачебная консультация</h3>
            <p class="process-item__text">
              Подготовка документов и всех необходимых информаций для онлайн консультаций с врачами
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process3.jpg') }}">
            <h3 class="process-item__title">Выбор</h3>
            <p class="process-item__text">
              Страны, госпиталя, маршрута, плана пребывания и предварительный бюджет на все расходы
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process4.jpg') }}">
            <h3 class="process-item__title">Организация тура</h3>
            <p class="process-item__text">
              Виза, авиабилеты, перевод документов, открытие банковского счета или карты, транспорт до аэропорта
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process5.jpg') }}">
            <h3 class="process-item__title">Прилет</h3>
            <p class="process-item__text">
              Прием в стране пребывания, размещение, правила пребывания, Сим карта, переводчик, транспорт, питание, визовая поддержка в случе необходимости и т.д.)
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process6.jpg') }}">
            <h3 class="process-item__title">Врач</h3>
            <p class="process-item__text">
              Консультация врача в госпитале/клинике
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process7.jpg') }}">
            <h3 class="process-item__title">Диагностика</h3>
            <p class="process-item__text">
              Все необходимые диагностические мероприятия
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process8.jpg') }}">
            <h3 class="process-item__title">Лечение</h3>
            <p class="process-item__text">
              Все необходимые лечебные мероприятия
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process9.jpg') }}">
            <h3 class="process-item__title">Реабилитация</h3>
            <p class="process-item__text">
              Все необходимые восстановительные мероприятия
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process10.jpg') }}">
            <h3 class="process-item__title">Сопровождение</h3>
            <p class="process-item__text">
              В стране пребывания (Покупки, тур поездки по городу и по стране)
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process11.jpg') }}">
            <h3 class="process-item__title">Вылет</h3>
            <p class="process-item__text">
              Транспорт до аэропорта, помощь в подготовке к вылету
            </p>
          </li>
          <li class="process-item">
            <img class="process-item-img" src="{{ asset('img/process12.jpg') }}">
            <h3 class="process-item__title">Постоянная связь </h3>
            <p class="process-item__text">
              Постлечебный мониторинг и консультация
            </p>
          </li>
        </ol>
      </section>
    </div>
  </main>
@endsection
