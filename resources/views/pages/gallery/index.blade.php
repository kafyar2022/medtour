@extends('layouts.app')

@section('content')
   <main class="gallery-page">
      <div class="container">
         <h1 class="heading txt-center">{{__('Галлерея')}}</h1>
         <div class="gallery">
            <a class="big" href="{{asset('img/gallery/full/01.jpg')}}">
               <img src="{{asset('img/gallery/thumb/01.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/02.jpg')}}">
               <img src="{{asset('img/gallery/thumb/02.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/03.jpg')}}">
               <img src="{{asset('img/gallery/thumb/03.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/04.jpg')}}">
               <img src="{{asset('img/gallery/thumb/04.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/05.jpg')}}">
               <img src="{{asset('img/gallery/thumb/05.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/06.jpg')}}">
               <img src="{{asset('img/gallery/thumb/06.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a class="big" href="{{asset('img/gallery/full/07.jpg')}}">
               <img src="{{asset('img/gallery/thumb/07.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/08.jpg')}}">
               <img src="{{asset('img/gallery/thumb/08.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a class="big" href="{{asset('img/gallery/full/09.jpg')}}">
               <img src="{{asset('img/gallery/thumb/09.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/10.jpg')}}">
               <img src="{{asset('img/gallery/thumb/10.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/11.jpg')}}">
               <img src="{{asset('img/gallery/thumb/11.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
            <a href="{{asset('img/gallery/full/12.jpg')}}">
               <img src="{{asset('img/gallery/thumb/12.jpg')}}" alt="Красивая картинка" title="Красивая картинка">
            </a>
         </div>
      </div>
   </main>
@endsection