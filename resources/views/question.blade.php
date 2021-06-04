@extends('layouts/layout2')
@section('content')
    
<!-- #region main -->
<main class="faq">
    <div class="containerfaq">
        <h2>Foire aux questions – tout ce que vous devez savoir à propos de LiDePre</h2>
        <img src="assets/img/faqLIDEPRE.jpg" alt="image FAQ">
        <h3>
            Bienvenue sur la Foire Aux Questions de LIDEPRE. Parcourez les questions, cherchez les informations dont
            vous avez besoin.
        </h3>

        <strong>
            Cette FAQ se décompose en deux parties : les bases et l'échange de livres.
        </strong>

        <h4>LIDEPRE: les bases</h4>

        <p>

            Q : Quel est le principe du site LIDEPRE ?<br>
            R : LIDEPRE est une plateforme qui permet d'échanger des livres. <br><br>

            Q : Comment puis-je échanger des livres sur LIDEPRE ?<br>
            R : L'échange de livres se fait grâce à un système de points. Vous gagnerez des points en envoyant des
            livres et vous pouvez ensuite emprunter des livres gratuitement grâce
            à ces points. <br><br>

            Q : Pourquoi dois-je créer un compte ?<br>
            R : Vous devez créer un compte sur la plateforme LIDEPRE pour pouvoir ajouter dans votre bibliothèque
            LIDEPRE les livres que vous proposerez à l'échange. <br><br>
            Q : Puis-je proposer des livres dans une autre langue que le français ?<br>
            R : Non. Les livres proposés sur la plateforme LIDEPRE DOIVENT être en FRANÇAIS. Tous les livres dans
            une autre langue seront rejetés. <br><br>

            Q : Est-ce que je peux acheter des livres sur cette plateforme ?<br>
            R : Le principe de cette plate-forme est d'échanger des livres. Il n'est donc pas possible d'acheter des
            livres. Vous devrez vous inscrire sur LIDEPRE afin de pouvoir proposer vos livres et en emprunter.
            <br><br>

            Q : Comment sont calculés les points pour chaque livre ?<br>
            R : C'est simple ! Voici le barème des points : <br>
            • un livre emprunté : -1 jeton. <br>
            • un livre déposé : +1 jeton. <br><br>
            Q : Comment puis-je supprimer mon compte ?<br>
            R : Si vous souhaitez supprimer votre compte, vous avez un lien supprimer mon compte, accessible dans le
            menu de votre espace personnel.<br><br>

        </p>
        <h4>LIDEPRE : l'échange de livres</h4>
        <p>


            Q : Combien de livres puis-je proposer sur LIDEPRE ?<br>
            R : Il n'y a pas de minimum imposé par LIDEPRE. Vous pouvez ajouter à votre bibliothèque LIDEPRE tous
            les livres que vous souhaitez envoyer.<br>
            Cependant, nous vous recommandons de proposer au moins 5 à 10 livres à l'échange de manière à optimiser
            vos chances de trouver des lecteurs intéressés par vos livres. Ainsi, vous pourrez échanger et recevoir
            de nouveaux livres plus rapidement !<br>
            Plus vous proposerez de livres à l'échange, plus vos livres seront commandés et plus vous gagnerez de
            points.<br><br>

            Q : Dans quelles conditions doivent être les livres proposés à l'échange ?<br>
            R : Les livres que vous mettrez sur cette plateforme doivent être en bonne condition. Le livre entier
            doit être lisible. Voici les conditions à respecter avant de proposer un livre à l'échange :<br>
            • pas de page(s) manquante(s)<br>
            • pas de parties illisibles<br>
            • pas de tâches, salissures ou moisissures<br>
            Si votre livre contient des marques d'usure (pages cornées, déchirées mais quand même lisibles,
            détachées) ou des annotations, vous devez l'indiquer dans le champ État du livre lorsque vous ajouter le
            livre à LIDEPRE<br><br>

            Q : Quels types de livres puis-je échanger ?<br>
            R : Sur LIDEPRE, vous pouvez échanger tout type de livres, qu'il s'agisse de romans, de livres
            historiques, de guides de voyage, de livres de cuisine, de bandes dessinées, de mangas... . Lorsque vous
            ajouterez vos livres, vous devrez sélectionner la catégorie de chacun.<br><br>

            Q : Comment puis-je proposer un livre à l'échange ?<br>
            R : C'est très simple : vous devez ajouter un livre à votre bibliothèque. Après avoir créé votre compte,
            vous aurez accès à votre espace personnel et à votre bibliothèque. Il vous suffira alors de cliquer sur
            le bouton « Déposer un livre » et de suivre les instructions. L'ajout d'une photo est conseillé mais pas
            obligatoire. Une fois votre livre ajouté, il devra être approuvé par un administrateur.<br><br>

            Q : Pourquoi dois-je faire une ou plusieurs photos de mon livre ?<br>
            R : La ou les photos de votre livre que vous aurez uploadé sur la fiche du livre permettent de montrer
            aux autres membres de LIDEPRE l'état général du livre. Comme les livres échangés sont des livres
            d'occasion, il est intéressant pour l'utilisateur de savoir dans quel état est le livre qui l'intéresse.
            Aussi, les livres proposés à l'échange qui ont une photo ont plus de chance d'être demandés par d'autres
            LIDEPRETEURS.<br><br>

            Q : J'ai reçu une demande d'échange pour un livre que je propose. Que dois-je faire maintenant ?<br>
            R : Dès qu'un membre veut un livre, un email est automatiquement envoyé à son propriétaire pour l'en
            informer. Si vous avez reçu un tel email, vous devez confirmer l'échange sur la plateforme. Vous verrez
            alors les détails du membre qui a demandé votre livre afin de pouvoir convenir un rendez-vous. Vous
            serez créditez du jeton correspondant à cet échange dès que l'autre membre en aura confirmé
            l’échange.<br><br>

            Q : Comment puis-je récupérer le livre que je veux ?<br>
            R : Si vous avez suffisamment de jeton pour commander le livre qui vous intéresse, cliquez sur «
            Emprunter » sur la page du livre. Un email sera alors automatiquement envoyé au détenteur de ce livre
            pour l'informer que quelqu'un est intéressé par ce livre. Le détenteur du livre, recevra vos
            informations pour convenir d’un lieu et date de l’échange. Dès que vous aurez reçu le livre, vous devrez
            confirmer la réception dans vos échanges.<br><br>

            Plus de questions ? Contactez-nous, nous sommes là pour vous aider !<br>
        </p>
    </div>



</main>
<!-- #endregion main -->
@endsection
