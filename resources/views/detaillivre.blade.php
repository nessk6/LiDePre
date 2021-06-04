@extends('layouts/layout2')
@section('content')
    
<!-- #region main -->
<main class="detaillivre">

    <div class="detail">

        <div class="livreimageprincipal">
            <img src="/assets/img/image5.jpg" alt="Le petit chaperon Rouge">
        </div>
        <div class="boutonemprunter">
            <div class="selection">

                <select name="nombre" id="nombre">
                    <option value="">Exemplaire</option>
                    <option value="1">IDlivre1</option>
                    <option value="2">IDlivre2</option>
                </select>
            </div>
            <input type="button" id="emprunter" value="Emprunter">
        </div>

        <div class="middle">

            <div class="localite">
                <i class="fas fa-map-marked-alt"></i>
                <span>60180</span>
            </div>
            <div class="etat">
                <i class="fas fa-heartbeat"></i>
                <span>Mediocre</span>
            </div>

        </div>
    </div>

    <div class="informationlivre">

        <div class="info">
            <dl>
                <dt>
                    <span class="h1">Le petit Chaperon Rouge</span>
                </dt>
                <dd><strong> ISBN :</strong> 9782747028639</dd>
                <dd><strong> Auteur :</strong> Marie-Hélène Delval</dd>
                <dd><strong> Editeur :</strong> Bayard jeunesse </dd>
                <dd><strong> Date d'édtion :</strong> 2009</dd>
                <dd><strong> Genre :</strong> Fantastique</dd>
            </dl>
        </div>

        <div class="resume">

            <h2>Résumé :</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. aperiam eum, ad id aliquid error tempora
                distinctio. Vitae eum a alias obcaecati tempora reprehenderit dolorum ad iure praesentium ut sed
                quibusdam, pariatur debitis esse rerum beatae id nulla accusantium dicta minus. Ut debitis ad
                numquam distinctio optio tenetur est eligendi neque aut blanditiis nam perspiciatis similique,
                nobis odio earum nisi aliquid suscipit, facilis cum, laborum explicabo consectetur. Nobis
                facilis, explicabo, distinctio quidem atque voluptas fugit nostrum cum non praesentium, rerum
                assumenda ea sequi temporibus? Esse itaque placeat, vitae in tempore dolores ipsa enim nostrum
                voluptate tenetur repellat similique qui nesciunt rem quam necessitatibus magni ipsam, quibusdam
                non aliquid laboriosam sit cumque. Quis repellat placeat atque temporibus praesentium voluptates
                laborum delectus. Minus at ut obcaecati voluptatem earum voluptate eos. Officiis reprehenderit
                itaque quasi laborum quam error facere autem hic sapiente exercitationem.</p>
        </div>

        <div class="commentaire">

            <h2>Commentaire :</h2>
            <p>Lorem ipsum dolor sit amet consectetur sit amet consectetur adipisicing elit. sit amet
                consectetur adipisicing elit. Eaque nesciunt ex optio, sit amet consectetur adipisicing elit.
                Eaque nesciunt ex optio, sit amet consectetur adipisicing elit. Eaque nesciunt ex optio, Eaque
                nesciunt ex optio, sit amet consectetur adipisicing elit. Eaque nesciunt ex optio, adipisicing
                elit. Totam quidem nihil velit,
                omnis
                temporibus deserunt.</p>
        </div>
        <div class="boutoncommentaire">
            <input type="button" id="commentaire" value="Déposer un commentaire ">
        </div>


    </div>

    <div class="bandeau">
        <h2>Livres les plus emprunter</h2>
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
                <a class="button" href="/detaillivre.html">Voir le livre</a>
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
<!--#endregion main-->
@endsection
