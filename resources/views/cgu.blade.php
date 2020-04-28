@extends('layouts.app')

@section('content')
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body" >
          <blockquote class="blockquote mb-0 font-italic">
            <p>Conditions générales d'utilisation (CGU)</p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <p><strong>Préambule</strong>
    <br>En utilisant ce service, vous acceptez d’être lié par les conditions suivantes.</p>
    <button type="button" class="btn btn-primary"><a href="#versionCourte" style="color: white;">Version courte</a></button>
    <button type="button" class="btn btn-primary"><a href="#versionComplete" style="color: white;">Version complète</a></button>
</div>
<hr>

<section class="bg-light" id="versionCourte">
  <div class="container">
    <h3>Version courte</h3>

    <p>Pour en faciliter la lecture, nous vous en proposons ci-dessous une version raccourcie reprenant les points essentiels.
      <br>Nous vous respectons :</p>
    <ul>
      <li>Nous n'accepterons pas de publicité envahissant sur vos écrans,</li>
      <li>Nous ne revendons pas vos données personnelles,</li>
      <li>Nous stockons vos données utilisateur sur un serveur hébergé en Europe, nul part ailleurs.</li>
    </ul>

    <h4>Respectes-nous, respectez les autres</h4>
    <ol>
      <li>Respectez les règles sous peine de voir votre compte supprimé,</li>
      <li>Respectez les autres utilisateurs, appliquez les règles basiques de politesse,</li>
      <li>Nos services sont proposé à titre <u>complémentaire</u> à la cellule <em>EPHEC Entreprendre</em> et ne vise aucunement à remplacer ce dernier.</li>
    </ol>
  </div>
</section>
<hr>

<section class="bg-light" id="versionComplete">
  <div class="container">
    <h3>Version complète</h3>

    <h4>Conditions du service</h4>
    <ul>
      <li>L’utilisation du service se fait à vos propres risques. Le service est fourni tel quel.</li>
      <li>Vous ne devez pas modifier un autre site afin de signifier faussement qu’il est associé avec ce service fourni par la cellule <em>EPHEC Entreprendre</em>.</li>
      <li>Les comptes ne peuvent être créés et utilisés que par des humains.
        Les comptes créés par les robots ou autres méthodes automatisées sont interdits et pourront être supprimés sans avertissement <small>(en cas de réussite de création)</small>.</li>
      <li>Vous êtes le seul responsable de la sécurité de votre compte et de votre mot de passe.
        Vous en êtes responsable.</li>
      <li><em>EPHEC Entreprendre</em> ne peut pas et ne sera pas responsable de toutes pertes ou dommages résultant du non respect de cette obligation de sécurité qui vous incombe.</li>
      <li>Vous êtes responsable de tout contenu affiché et de l’activité qui se produit avec votre compte.</li>
      <li>Vous ne pouvez pas utiliser le service à des fins illégales ou non autorisées.</li>
      <li>Vous ne devez pas transgresser les lois de votre pays.</li>
      <li>Vous ne pouvez pas vendre, échanger, revendre, ou exploiter dans un but commercial non autorisé un compte du service utilisé.</li>
    </ul>
    <p>La violation de l'un de ces accords entraînera au moins la résilitation de votre compte, voire des poursuites en justice.
      <br>Vous comprenez et acceptez que la cellule <em>EPHEC Entreprendre</em> et <em>EPHEC ASBL</em> ne peuvent être responsable pours les contenus publiés sur ce service.</p>
    <ul>
      <li>Vous comprenez que la mise en ligne du service ainsi que de votre contenu implique une transmission (en clair ou chiffrée, suivant les services) sur divers réseaux.</li>
      <li>Vous ne devez pas transmettre des vers, des virus, chevaux de Troie ou tout autre code de nature malveillante.</li>
      <li><em>EPHEC Entreprendre</em> ne garantit pas que :
      <ul>
        <li>le service répondra à vos besoins spécifiques,</li>
        <li>le service soit intinterrompu ou exempte de bugs,</li>
        <li>que les erreurs dans le service seront corrigées.
          Vous comprenez et acceptez que <em>EPHEC Entreprendre</em> ne puisse être tenu responsable d'aucun dommage direct, indirect ou fortuit, comprenant les dommages pour perte de profits, de clientèle, d'accès de données ou d'autres pertes intangibles <small>(même si <em>EPHEC Entreprendre</em> est informé de la possibilité de tels dommages)</small> et qui résulteraient de :
        <ul>
          <li>L'utilisation ou de l'impossibilité d'utiliser le service;</li>
          <li>L'accès non autorisé ou altéré de la transmission des données;</li>
          <li>Les déclarations ou les agissements d'un tiers sur le service;</li>
          <li>La résiliation de votre compte;</li>
          <li>Toute autre question relative au service.</li>
        </ul></li>
      </ul></li>
      <li>L'échec de <em>EPHEC Entreprendre</em> à exercer ou appliquer tout droit ou disposition des Conditions Générales d'Utilisation ne xonsittue pas une renonciation à ce droit ou à cette disposition.
        Les conditions d'utilisation constituent l'intégralité de l'accord entre vous et <em>EPHEC Entreprendre</em> et régissent votre utilisation du service, remplaçant tous les accords antérieurs entre vous et <em>EPHEC Entreprendre</em> <small>(y compris les version précédentes des Conditions Générales d'Utilisation)</small>.</li>
      <li>Les questions sur les conditions de service doivent être envoyées via le formulaire de contact disponible à l'adresse suivante : <a href="entreprendre.che2-ephec.be/contact" target="_blank">entreprendre.che2-ephec.be/contact</a></li>
    </ul>

    <h4>Modifications du service</h4>
    <p><em>EPHEC Entreprendre</em> se réserve le droit, à tout moment, de modifier ou d'interrompre, temporairement ou définitivement, le service avec ou sans préavis.
      <br>De plus, <em>EPHEC Entreprendre</em> ne sera pas tenu responsable envers vous ou tout tiers pour toute modification, suspension ou interruption du service.</p>
    
    <h4>Droit d'auteur sur le contenu</h4>
    <ul>
      <li>Vous ne pouvez pas envoyer, télécharger, publier sur un blog, distribuer, diffuser tout contenu illégal, diffamatoire, harcelant, abusif, frauduleux, contrefait, obscène ou autrement répréhensible.</li>
      <li>Nous ne revendiquons aucun droit sur vos données : textes, images, ou tout autre élément, que vous téléchargez ou transmettez depuis votre compte.</li>
      <li>Nous n’utiliserons pas votre contenu pour un autre usage que de vous fournir le service.</li>
      <li>Vous ne devez pas télécharger ou rendre disponible tout contenu qui porte atteinte aux droits de quelqu’un d’autre.</li>
      <li>Nous nous réservons le droit de supprimer tout contenu nous paraissant non pertinent pour l’usage du service, selon notre seul jugement.</li>
      <li>Nous pouvons, si nécessaire, supprimer ou empêcher la diffusion de tout contenu sur le service qui ne respecterait pas les présentes conditions.</li>
    </ul>

    <h4>Édition et partage de données et informations</h4>
    <ul>
      <li>Les fichiers que vous créez avec le service peuvent être lus, copiés, utilisés et redistribués par des gens que vous connaissez ou non.</li>
      <li>En rendant publiques vos données, vous reconnaissez et acceptez que toute personne utilisant ce site web puisse les consulter sans restrictions.</li>
      <li><em>EPHEC Entreprendre</em> et <em>EPHEC ASBL</em> ne peuvent être tenue responsable de tout problème résultant du partage ou de la publication de données entre utilisateurs.</li>
    </ul>

    <h4>Résiliation</h4>
    <p><em>EPHEC Entreprendre</em> et <em>EPHEC ASBL</em>, à leur seule discrétion, à le droit de suspendre ou de résilier votre compte et de refuser toute utilisation actuelle ou future du service.
      Cette résiliation du service entraînera la désactivation de l'accès à votre compte, et la restitution de tout le contenu par demande exprète de votre part.
      <em>EPHEC Entreprendre</em> se réserve le droit de refuser le service à n'importe qui pour n'importe quelle raison à tout moment.</p>
    <p><em>EPHEC Entreprendre</em> se réserve le droit de résilier votre compte si vous ne vous y connectez pas pour une période supérieure à 1 an.</p>
    <hr>

    <h3>Données personnelles</h3>

    <h4>Cadre légal et Règlement Général pour la Protection des Données (RGPD)</h4>
    <p>En Belgique, les données personnelles des citoyens sont notamment protégées par la loi vie privée, la législation européenne et depuis mai 2018 par le biais du Règlement général sur la protection des données.
      <br>Ce règlement apporte encore plus de transparence et de contrôle concernant vos données.
      <br>Veuillez vous référer aux informations disponible aux adresses suivantes :</p>
    <ul>
      <li><a href="https://www.belgium.be/fr/justice/respect_de_la_vie_privee" target="_blank">Loi vie privée (Belgique)</a></li>
      <li><a href="https://www.autoriteprotectiondonnees.be/reglement-general-sur-la-protection-des-donnees-citoyen" target="_blank">Règlement Général sur la Protection des Données - Citoyen (Belgique)</a></li>
    </ul>

    <h4>Conditions générales d'utilisation des services proposés par la cellule <em>EPHEC Entreprendre</em></h4>
    <p><em>EPHEC Entreprendre</em> ne collecte d’information personnelle relative à l’utilisateur (nom ou pseudonyme, adresse courriel ...) que pour le strict besoin des services proposés par <em>EPHEC ASBL</em>, notamment pour l’inscription à des espaces de discussion et de la plateforme d'entrepreneuriat par le biais de formulaire en ligne.</p>
    <p>La base légale de ces traitements est le consentement : l’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie.
      Il est précisé à l’utilisateur des sites de <em>EPHEC Entreprendre</em> le caractère obligatoire ou non de la saisie d’informations qu’il serait amené à fournir.</p>
    <p>En vue d’adapter le site aux demandes de nos visiteurs, nous analysons le trafic de nos sites avec différents outils mis en place.
      Le site génère un cookie avec un identifiant unique, dont la durée de conservation maximale jusqu'à suppression de votre part sur vos appareils.
      Les données recueillies ne sont ni cédées à un tiers ni utilisées à d’autres fins.
      La base légale de ces traitements est l’intérêt légitime.</p>
    <p>Enfin pour répondre à nos obligations légales en tant qu’hébergeur, nous conservons pendant une durée de un an les logs de connexion (adresse IP, date, heure et ressource demandée).
      Ces informations ne sont fournies à personne, sauf en cas d’une demande officielle qui nous serait faite par les autorités judiciaires compétentes.</p>
    <p>L’utilisateur dispose d’un droit d’accès, de modification, de suppression des données nominatives collectées le concernant.
      Pour ce faire, l’utilisateur envoie un message :</p>
    <ul>
      <li>Via le formulaire de contact disponible à l'adresse suivante : <a href="entreprendre.che2-ephec.be/contact" target="_blank">entreprendre.che2-ephec.be/contact</a></li>
      <li>Via courriel : <a href="mailto:ephec-entreprendre@ephec.be">ephec-entreprendre@ephec.be</a></li>
      <li>Via un courrier postal à l'adresse suivante : EPHEC Entreprendre, Avenue Konrad Adenauer 3, 1200 Woluwe-Saint-Lambert, Belgique</li>
    </ul>
    <p>La modification interviendra dans un délai raisonnable à compter de la réception de la demande de l'utilisateur.</p>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <span class="copyright">Copyright &copy; Ephec entreprendre 2019-2020</span>
      </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          </li>
          <li class="list-inline-item">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          </li>
          <li class="list-inline-item">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-inline quicklinks">
          <li class="list-inline-item">
            <a href="confidentialite">Politique de confidentialité</a>
          </li>
          <li class="list-inline-item">
            <a href="cgu">Condition d'utilisation</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
@endsection


