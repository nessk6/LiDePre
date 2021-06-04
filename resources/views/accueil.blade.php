@extends('layouts/layout2')
@section('content')
    
<!-- #region main -->
<main class="accueil">
    <div class="dernierlivre">
        <h1>Les derniers livres</h1>
    </div>
    <div class="logoaccueil">
        <div class="rechercherlivre">
            <input type="submit" class="button" value="Parcourir tous les livres">
        </div>
        <img src="/assets/img/imageLivre2.png" alt="plongeon-livre-lidepre">
    </div>

    <div class="containerLivre">

        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>
        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>

        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>

        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>

        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>

        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>

        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>

        <div class="infolivre">
            <div class="livreimage">
                <img src="/assets/img/image5.jpg" alt="Le Chaperon Rouge">
            </div>

            <div class="info">
                <span>Le petit Chaperon Rouge</span><br><br>
                <span>Fantastique</span><br><br>
                <span>286 pages</span><br>
            </div>

            <div class="boutonlivre">
                <a class="button" href="{{route ('get.detaillivre')}}">Voir le livre</a>
            </div>
        </div>

    </div>


</main>
<!-- #endregion main -->
@endsection
