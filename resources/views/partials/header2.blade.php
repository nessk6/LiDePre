<header class="header_accueil">
    <hgroup>
        <h1>LiDePre</h1>
        <h3>"Lisez, Deposez, Prenez"</h3>
    </hgroup>
    <img src="/assets/img/logolidepre.png" alt="logo-lidepre">
    <nav>
        <a href="{{route ('get.accueil')}}">Accueil </a>
        <a href="{{route ('get.creationlivre')}}">Déposer un livre </a>
        <a href="{{route ('get.question')}}">F.A.Q </a>
        <a href="">Contact </a>
        <a href="{{route ('get.index')}}"><i class="fas fa-sign-out-alt" title="Deconnexion"></i></a>
    </nav>
    <div class="rechercher">
        <form action="/" method="POST">
            <select name="search" id="search">
                <option value="ISBN">ISBN</option>
                <option value="auteur">Auteur</option>
                <option value="titre">Titre</option>
                <option value="genre">Genre</option>
                <option value="codepostal">Code postal</option>
            </select>
            <input type="text" name="recherche" placeholder="Rechercher">
            <input type="submit" value="OK">
        </form>
    </div>
</header>