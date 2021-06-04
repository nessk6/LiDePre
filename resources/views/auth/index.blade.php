@extends('layouts/layout1')
@section('content')
    
<!-- #region main -->
<main class="login">
    
    <div class="container">
        <img src="/assets/img/imageLivre3.jpg" alt="Dessin de livre">
    </div>
    <div class="formIdentif">
       
    <form method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset>
                <h1>Bienvenue</h1>
                <div class="input-form">
                    <label>{{ __('Email') }}</label>
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus  placeholder="Identifiant/Email">
                </div>
                <div class="input-form">
                    <label>{{ __('Mot de passe') }}</label>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" required autocomplete="current-password" placeholder="Entrer mot de passe">
                </div>
                {{-- <div id="checkbox">
                    <label for="rememberMe">Se souvenir de moi</label>
                    <input type="checkbox" id="rememberMe" name="remenberme">
                </div> --}}
                <div class="bouton">
                    <input type="submit" class="button" {{ __('Se connecter') }}>
                    
                </div>
                <div id="forgetpass">
                    <a href="#">Mot de passe oublié?</a>
                </div>
                <div>
                    <a href="{{route ('register')}}">Nouvel utilisateur ?</a>
                </div>
            </fieldset>
        </form>
    </div>
    
</main>
<!-- #endregion main -->
@endsection
