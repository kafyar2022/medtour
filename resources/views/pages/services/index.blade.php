@extends('layouts.app')

@section('content')
   <main class="medservice-page">
      <setion class="medservice">
         <div class="container">
            <h1 class="heading txt-center">{{__('Услуги')}}</h1>
            <p class="medservice__text txt-center">
               {{__('Обеспечение информационной, организаторской, технической и всех необходимых 
               услуг для Медицинских Туристов и их сопровождающих лиц от пункта А до Я и обратно 
               с обеспечением максимального комфорта и поддержки. Наша концепция позволит выбрать 
               индивидуальную программу для каждого пациента. В соответствии с требованиями 
               международных стандартов качества мы внимательно подходим к выбору клиник, врачей, 
               партнеров. Рекомендуя пациентам то или иное медицинское учреждение, мы в первую 
               очередь используем систематический статистический подход.')}}
            </p>
            <h2 class="title txt-center"  id="medservices">{{__('Медицинские услуги')}}</h2>
            <ul class="services">
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/profilactica.png')}}">
                  <h3 class="services__title">Профилактика</h3>
                  <ul>
                     <li>
                        Общая проверка организма, индивидуальные программы по проверке организма, 
                        вакцинация, профилактические программы и т.д.)
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/telemed.png')}}">
                  <h3 class="services__title">Телемедицина</h3>
                  <ul>
                     <li>
                        Организация онлайн консультаций с врачами/специалистами из других стран мира
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/diagnos.png')}}">
                  <h3 class="services__title">Диагностика</h3>
                  <ul>
                     <li>Все виды и методы современной диагностики</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/treatment.png')}}">
                  <h3 class="services__title">Лечение</h3>
                  <ul>
                     <li>Все виды современного лечения</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/reability.png')}}">
                  <h3 class="services__title">Реабилитация</h3>
                  <ul>
                     <li>Все виды реабилитационных мероприятий</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/cosmetology.png')}}">
                  <h3 class="services__title">Косметология</h3>
                  <ul>
                     <li>Хирургическая и не-хирургическая</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/sanatory.png')}}">
                  <h3 class="services__title">Cанаторно-курортное лечение</h3>
                  <ul>
                     <li>Все виды</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/sanitary.png')}}">
                  <h3 class="services__title">Санитарная авиация</h3>
                  <ul>
                     <li>Авиация, предназначенная для оказания экстренной медицинской помощи</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/posttreat.png')}}">
                  <h3 class="services__title">Постлечебное планирование</h3>
                  <ul>
                     <li>Составление индивидуальных журналов, мониторинг пациентов и т.д.)</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/medstrah.png')}}">
                  <h3 class="services__title">Медицинская страховка</h3>
                  <ul>
                     <li>Все виды</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/altermed.png')}}">
                  <h3 class="services__title">Альтернативная медицина</h3>
                  <ul>
                     <li>Аюрведа, Акупунктура, Гомеопатия, Натуропатия и другие виды</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/medtour.png')}}">
                  <h3 class="services__title">Объездной медицинский туризм </h3>
               </li>
            </ul>
            <h2 class="title txt-center" id="nomedservices">{{__('Не медицинские услуги')}}</h2>
            <ul class="services">
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/doctrans.png')}}">
                  <h3 class="services__title">Перевод документов</h3>
                  <ul>
                     <li>
                        Перевод всех видов медицинских и не-медицинских документов на все 
                        необходимые языки 
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/visa.png')}}">
                  <h3 class="services__title">Визовая поддержка</h3>
                  <ul>
                     <li>
                        Вся цепочка услуг по получению визы
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/spend.png')}}">
                  <h3 class="services__title">Расходы</h3>
                  <ul>
                     <li>
                        Предоставление предварительного бюджета по всем видам расходов – начиная 
                        от визы, авиабилетов, гостиниц, стоимости лечения, питания и т.д. в стране 
                        пребывания
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/bilet.png')}}">
                  <h3 class="services__title">Авиабилеты</h3>
                  <ul>
                     <li>Помощь в бронировании, покупке, замене, возврате и т.д. авиабилетов</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/bank.png')}}">
                  <h3 class="services__title">Банковские</h3>
                  <ul>
                     <li>
                        Помощь в открытии банковского счета и получении карт в стране проживания и 
                        по возможности в стране пребывания
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/transport.png')}}">
                  <h3 class="services__title">Транспорт</h3>
                  <ul>
                     <li>Организация транспорта внутри страны проживания и пребывания</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/sleep.png')}}">
                  <h3 class="services__title">Место проживания</h3>
                  <ul>
                     <li>
                        Помошь в выборе и бронировании различных уровней гостевых/гостиниц/ВИП 
                        аппартаментов
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/translator.png')}}">
                  <h3 class="services__title">Переводчик</h3>
                  <ul>
                     <li>В и вне медицинского учреждения</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/sopro.png')}}">
                  <h3 class="services__title">Сопровождение</h3>
                  <ul>
                     <li>В и вне медицинского учреждения</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/countryinfo.png')}}">
                  <h3 class="services__title">Информация по Стране</h3>
                  <ul>
                     <li>
                        Правила пребывания, общая информация, особенности медицинского туризма 
                        и т.д. в стране пребывания
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/connection.png')}}">
                  <h3 class="services__title">Постоянная связь</h3>
                  <ul>
                     <li>(24х7</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/borrow.png')}}">
                  <h3 class="services__title">Аренда Авто</h3>
                  <ul>
                     <li>Помощь по аренде автомобиля в стране пребывания</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/goods.png')}}">
                  <h3 class="services__title">Питание</h3>
                  <ul>
                     <li>
                        Предоставление информации по местам/заказу питания согласно 
                        необходимым  требованиям туристов
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/bought.png')}}">
                  <h3 class="services__title">Покупки</h3>
                  <ul>
                     <li>Помощь в покупке лекарств, медицинских оборудований и т.д.</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/tour.png')}}">
                  <h3 class="services__title">Тур поездки </h3>
                  <ul>
                     <li>Организация индивидуальных туров внутри города/страны пребывания</li>
                  </ul>
               </li>
            </ul>
         </div>
      </setion>
   </main>
@endsection