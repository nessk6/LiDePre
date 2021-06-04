@extends('layouts/layout1')
@section('content')

    <!-- #region main -->
    <main class="inscrit">
        @if ($errors->any())
            <div>
                <div>{{ __('Quelque chose s\'est mal passé') }}</div>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="formInscrit">
            <fieldset>
                <h1>Formulaire d'inscription</h1>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="input-form">
                        <label for="name"></label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nom*"  required autofocus autocomplete="name" />
                    </div>
                    <div class="input-form">
                        <label for="prenutil"></label>
                        <input type="text" id="prenutil" name="prenutil" placeholder="Prenom*" required>
                    </div>
                    <div class="input-form">
                        <label for="pseudo"></label>
                        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo*" required>
                    </div>
                    <div class="input-form">
                        <label for="datnai"> Date de naissance* </label>
                        <input type="date" id="datnai" name="datnai" required>
                    </div>
                    <div class="input-form">
                        <label for="adres"></label>
                        <input type="text" id="adres" name="adres" placeholder="Adresse" >
                    </div>
                    <div class="input-form">
                        <label for="villutil"></label>
                        <input type="text" id="villutil" name="villutil" placeholder="Ville*" required>
                        <input type="text" id="codpost" name="codpost" placeholder="Code postal*" required>
                    </div>
                    <div class="input-form">
                        <label for="email"></label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email*" required />
                    </div>
                    <div class="input-form">
                            <label for="email_confirmation"></label>
                            <input type="email" name="email_confirmation" value="{{ old('email') }}" placeholder="Confirmer Email*" required />
                        </div>
                    <div class="input-form">
                        <label for="password"></label>
                        <input type="password" name="password"  placeholder="Mot de passe" required autocomplete="new-password" />
                    </div>
                    <div class="input-form">
                        <label for="password_confirmation"></label>
                        <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required autocomplete="new-password" />
                    </div>
                    <div >
                        <a href="{{ route('login') }}">
                            {{ __('Déjà enregistré?') }}
                        </a>
                    </div>
                    <div class="bouton">
                        <input class="button" type="reset" value="Reset">
                        <input class="button" type="submit" {{ __('Enregistrer') }}>
                    </div>
            </fieldset>
            </form>
        </div>
        <div class="container">
            <img src="/assets/img/imageLivre4.jpg" alt="enfant sur une pile de livre">
        </div>

    </main>
    <!-- #endregion main -->
@endsection
