<?php include_once('uiHeader.php'); ?>


    <div class="container py-5">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-primary mb-2">Qui sommes nous ?</p>
                <h2 class="fw-bold">Composition de l'équipe</h2>
                <p class="text-muted">Vos interlocuteurs</p>
            </div>
        </div>
        <div class="row  mx-auto" style="max-width: 700px;">

            <div class="col mb-6">

                <div class="d-flex">
                    <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="100" height="100"
                         src="https://fr.gravatar.com/avatar/<?php echo md5("david@abygcreation.fr");?>?s=800&r=g&d=404"/>
                    <div>
                        <p class="fw-bold text-primary mb-0"><a href="mailto:david@abygcreation.fr">David</a></p>
                        <p class="text-muted mb-0">Dirigeant</p>
                        <p class="text-muted mb-0 fst-italic">Ingénieur généraliste.</p>
                    </div>
                </div>
                <p class="bg-dark border rounded border-dark p-4">" L'analyse des processus est un élément essentiel à
                    la résolution des objectifs. Banalisée à tort, chez <strong class="fw fw-bold">AByGCreation</strong>
                    nous pensons que c'est à cette étape que le projet prend une dimension décisive. "</p>
            </div>


        </div>
    </div>

<?php include_once('uiFooter.php'); ?>