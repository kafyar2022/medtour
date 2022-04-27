@extends('auth.master')

@section('content')  
   <main class="login-page">
      <div class="container login-page__container">
         <img class="login-img" src="{{asset('img/login.png')}}">
         <h1 class="heading txt-center login-title">{{__('Вход')}}</h1>
         <form class="login-form" action="{{route('auth.check')}}" method="POST">
            @csrf
            @if (Session::get('fail'))
            <p class="login-form__fail-msg">{{Session::get('fail')}}</p>
            @endif
            <label class="login-form__label login-form__label--login">
               <input class="login-form__input" type="text" name="login" placeholder="Логин" value="{{old('login')}}">
               @error('login')
               <span class="login-form__error">{{$message}}</span>
               @enderror
            </label>
            <label class="login-form__label login-form__label--password">
               <input class="login-form__input" type="password" name="password" placeholder="Пароль" value="{{old('password')}}">
               @error('password')
               <span class="login-form__error">{{$message}}</span>
               @enderror
            </label>
            <button class="button login-form__submit-btn" type="submit">{{__('Вход')}}</button>
         </form>
      </div>
   </main>
@endsection