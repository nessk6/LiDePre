@extends('layouts/layout2')
@section('content')
    
<!-- #region main -->
<main class="creationlivre">
    <div class="formulairecreation">
        <h1>Entrer les informations du livre</h1><br>
        <form action="#" method="POST">
            <div class="input-form">
                <label for="isbn"></label>
                <input type="text" id="isbn" name="isbn" placeholder="ISBN*" required>
                <a class="button" href="https://books.google.fr/"> GOOGLE BOOKS</a>
            </div>
            <div class="input-form">
                <label for="titre"></label>
                <input type="text" id="titre" name="titre" placeholder="Titre*" required>
            </div>
            <div class="input-form">
                <label for="auteur"></label>
                <input type="text" id="auteur" name="auteur" placeholder="Auteur*" required>
            </div>
            <div class="input-form">
                <label for="editeur"></label>
                <input type="text" id="editeur" name="editeur" placeholder="Editeur*" required>
            </div>
            <div class="input-form">
                <label for="dateedition"></label>
                <input type="text" id="dateedition" name="dateedition" placeholder="Date d'édition*" required>
            </div>
            <div class="input-form">
                <label for="nbpage"></label>
                <input type="text" id="nbpage" name="nbpage" placeholder="Nombre de pages*" required>
            </div>
            <div class="input-form">
                <label for="etat"></label>
                <select name="etat" id="etat">
                    <option value="">Etat</option>
                    <option value="bon">Bon</option>
                    <option value="moyen">Moyen</option>
                    <option value="mediocre">Mediocre</option>
                </select>

            </div>
            <div class="input-form">
                <label for="genre"></label>
                <input type="text" id="genre" name="genre" placeholder="Genre*" required>
            </div>
            <div class="input-form">

                <label for="select"></label>
                <input type="text" name="select" id="select" placeholder="Insérer un lien de l'image de couverture">
            </div>
            <div class="input-form">
                <label for="resume"></label>
                <textarea name="resume" id="resume" placeholder="resume*" maxlength="1000" spellcheck="true"
                    cols="19" rows="4"></textarea>
            </div>
            <div class="input-form">
                <label for="commentaire"></label>
                <textarea name="commentaire" id="commentaire" placeholder="commentaire*" maxlength="1000"
                    spellcheck="true" cols="19" rows="4"></textarea>
            </div>
        </form>
    </div>
    <div class="containercreation">
        <img src="/assets/img/lire2.png" alt="femme qui joue au telephone">
    </div>
</main>
<!--#endregion main-->
@endsection
