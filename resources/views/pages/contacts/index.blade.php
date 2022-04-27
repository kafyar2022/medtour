@extends('layouts.app')

@section('content')
   <main class="contacts-page" data-id="contacts-page">
      <div class="container">
         <h1 class="heading txt-center">{{__('Контакты')}}</h1>
         <p class="txt-center">
            {{__('На этой странице доступна наша контактная информация. Чтобы получить бесплатную консультацию, заполните контактную форму.')}}
         </p>
         <br>
         <p class="txt-center">
            {{__('Заполните контактную форму для получения бесплатной консультации у наших специалистов:')}}
         </p>
         <br>
         <form class="form" action="{{route('mails.contact')}}" method="post">
            @csrf
            <fieldset class="form-fieldset">
               <legend class="form-legend">{{__('Контактная форма')}}</legend>
               <span class="form-status">@if (Session::get('success')) {{Session::get('success')}} @endif</span>
               <label class="form-label">
                  <input class="form-input contact-form__input--name" type="text" name="fullname" placeholder="{{__('Ф.И.О')}}" autocomplete="off" value="{{old('fullname')}}">
                  @error('fullname') <span>{{$message}}</span> @enderror
               </label>
               <label class="form-label">
                  <input class="form-input" type="text" name="email" placeholder="{{__('E-mail')}}" autocomplete="off" value="{{old('email')}}">
                  @error('email') <span>{{$message}}</span> @enderror
               </label>
               <label class="form-label">
                  <input class="form-input" type="number" name="phone" placeholder="{{__('Телефон')}}" autocomplete="off" value="{{old('phone')}}">
                  @error('phone') <span>{{$message}}</span> @enderror
               </label>
               <label class="form-label">
                  <textarea class="form-textarea" name="message" placeholder="{{__('Сообщение')}}" autocomplete="off">{{old('message')}}</textarea>
                  @error('message') <span>{{$message}}</span> @enderror
               </label>
            </fieldset>
            <button class="button form-submit hidden" type="submit" data-id="submit-btn">
               <span class="form-submit__text">{{__('Отправить')}}</span>
               <span class="spinner">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
               </span>
            </button>
         </form>
      </div>
   </main>
@endsection
