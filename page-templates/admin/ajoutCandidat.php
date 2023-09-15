<?php include '../banner/header.php';

?>

<main class='page-ajout-candidat'>

    <section class='block-ajoutCol'>

        <figure class='block-accueil__bg-img'>
            <img src='../../assets/images/collaborateur/recrutement.jpg' alt=''>
        </figure>

        <div class='block-ajoutCol__paragraphe'>
            <div class='block-ajoutCol__text'>
                <h2 class='block-ajoutCol subtitle-collab'>Nouveau Candidat</h2>

                <h3 class='block-ajoutCol cause-collab'>
                    Le recrutement est un <strong>facteur d'accroissement économique</strong> : il permet d'augmenter le chiffre d'affaires, 
                    <strong>parfaire les marges bénéficiaires</strong>, dégager du temps susceptible d'être alloué à d'autres tâches
                    au sein de l'entreprise, et <strong>apporter de l'aide aux apprenants qualifiés.</strong> 
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
                    <input type="text" class="btn-blue" name="" id="" placeholder="Nom">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" placeholder="Prénom">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="date" class="btn-blue" name="" id="" placeholder="Date de naissance">
                </div>
                
                <div class="select">
                    <select name="" id="">
                        <option value="">Genre</option>
                        <option value="">Homme</option>
                        <option value="">Femme</option>
                    </select>
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" placeholder="Contact">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" placeholder="Adresse">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" placeholder="Statut Marital">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="email" class="btn-blue" name="" id="" placeholder="E-mail">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="text" class="btn-blue" name="" id="" placeholder="Numéro CIN">
                </div>

                <div class="formulaire-collab__content input">
                    <input type="number" class="btn-blue" name="" id="" placeholder="Nombre enfants">
                </div>

                <div>
                    <label for="photo">Sélectionnez une photo :</label> <br>
                    <input type="file" class="btn-blue" name="" id="">
                </div>

                <div>
                    <label for="CV">Sélectionnez un CV :</label> <br>
                    <input type="file" class="btn-blue" name="" id="">
                </div>

                <div>
                    <label for="LM">Sélectionnez une Lettre de motivation : </label>
                    <input type="file" class="btn-blue" name="" id="">
                </div>

                <div class="select">
                    <select name="" id="">
                        <option value="">Départements</option>
                    </select>
                </div>

                <div class="select">
                    <select name="" id="">
                        <option value="">Postes</option>
                    </select>
                </div>

            </div>

                <div class="btn-générer">
                    <a href="envoyerIdentifiant.php" class="btn-blue primary medium">Valider</a>
                </div>

        </div>
    </section>

</main>