<header class="header">
   <div class="container">
      <div class="header-top-wrapper">
         <a class="home-link" href="{{route('home')}}">
            <img class="logo" src="{{asset('img/logo.png')}}" alt="{{__('Логотип компании')}}">
         </a>
         <form class="search hidden">
            <input class="search__input" type="search" placeholder="{{__('Поиск')}}">
            <button class="search__button" type="button"></button>
         </form>
         <ul class="socials">
            <li class="socials__item">
               <a class="socials__link socials__link--logout" href="{{route('auth.logout')}}">{{__('Выйти')}}</a>
            </li>
         </ul>
         <ul class="localizations">
            <li class="localizations__item">
               <a class="localizations__link {{App::currentLocale() == 'en' ? 'localizations__link--active' : ''}}" href="{{route('localization')}}?lang=en">en</a>
            </li>
            <li class="localizations__item">
               <a class="localizations__link {{App::currentLocale() == 'ru' ? 'localizations__link--active' : ''}}" href="{{route('localization')}}?lang=ru">ru</a>
            </li>
         </ul>
         <button class="hamburger" type="button">{{__('Меню')}}</button>
      </div>
      <nav class="header__navigation">
         <ul class="pages-navigation">
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'about' || $route == 'gallery' ? 'pages-navigation__link--active' : ''}}">{{__('О Компании')}}</a>
               <ul class="dropdown-links">
                  <li class="dropdown-links__item">
                     <a class="dropdown-links__link" href="{{route('about')}}">{{__('О нас')}}</a>
                  </li>
                  <li class="dropdown-links__item">
                     <a class="dropdown-links__link" href="{{route('gallery')}}">{{__('Галлерея')}}</a>
                  </li>
               </ul>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'services' ? 'pages-navigation__link--active' : ''}}" href="{{route('services')}}">{{__('Услуги')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'worksystem' ? 'pages-navigation__link--active' : ''}}" href="{{route('worksystem')}}">{{__('Система работы')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'countries' ? 'pages-navigation__link--active' : ''}}" href="{{route('countries')}}">{{__('Страны')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'partners' ? 'pages-navigation__link--active' : ''}}" href="{{route('partners')}}">{{__('Партнеры')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'reviews' ? 'pages-navigation__link--active' : ''}}" href="{{route('reviews')}}">{{__('Отзывы')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'contacts' ? 'pages-navigation__link--active' : ''}}" href="{{route('contacts')}}">{{__('Контакты')}}</a>
            </li>
         </ul>
      </nav>
   </div>
   <ul class="mobile-navigation hidden">
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link">{{__('О Компании')}}</a>
         <ul class="mobile-dropdown-links hidden">
            <li class="mobile-dropdown-links__item">
               <a class="mobile-dropdown-links__link" href="{{route('about')}}">{{__('О нас')}}</a>
            </li>
            <li class="mobile-dropdown-links__item">
               <a class="mobile-dropdown-links__link" href="{{route('gallery')}}">{{__('Галлерея')}}</a>
            </li>
         </ul>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('services')}}">{{__('Услуги')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('worksystem')}}">{{__('Система работы')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('countries')}}">{{__('Страны')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('partners')}}">{{__('Партнеры')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('reviews')}}">{{__('Отзывы')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('contacts')}}">{{__('Контакты')}}</a>
      </li>
   </ul>
</header>