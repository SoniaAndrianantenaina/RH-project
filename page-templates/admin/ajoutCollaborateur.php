<?php include '../banner/header.php';

?>

<main class='page-ajout-collaborateur'>

    <section class='block-ajoutCol'>

        <figure class='block-accueil__bg-img'>
            <img src='../../assets/images/collaborateur/cohésion.jpg' alt=''>
        </figure>

        <div class='block-ajoutCol__paragraphe'>
            <div class='block-ajoutCol__text'>
                <h2 class='block-ajoutCol subtitle-collab'>Nouveau Collaborateur</h2>

                <h3 class='block-ajoutCol cause-collab'>
                    La meilleure des façons de commencer, c'est de prévenir les équipes internes qu'un
                    <strong>nouveau collaborateur</strong> va rejoindre l'entreprise.
                </h3>

            </div>
        </div>

    </section>

    <section class="formulaire">
        <div class="formulaire-collab">
            <div class="block-annonces__item__title">
                <h2 class='title-h2'>VEUILLEZ REMPLIR LE FORMULAIRE SUIVANT :</h2>
            </div>

            <div class="formulaire-collab__content">

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" value="Département">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" value="Poste">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" value="Salaire">
                </div>
                
                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" value="Type Contrat">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" value="Date début">
                </div>


                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" value="Date fin">
                </div>

                
            </div>

                <div class="btn-générer">
                    <a href="envoyerIdentifiant.php" class="btn-blue primary">Générer identifiant et contrat</a>
                </div>

        </div>
    </section>

</main>