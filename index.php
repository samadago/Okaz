<?php
require_once 'templates/header.php';

$listings = [
    ["title" => "Test1"],
    ["title" => "Test2"],
    ["title" => "Test3"],
];

?>


<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/images/logo-Okaz.png" class="d-block mx-lg-auto img-fluid" alt="logo Okaz" width="400" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Avec Okaz achetez et vendez vos objets</h1>
            <p class="lead">Trouvez ce que vous cherchez ou donnez une seconde vie aà vos objets en un clic! Okaz est la plateforme incountournable pour vendre, acheter ou echanger tout ce que vous souhaitez:vetements,meubles, appareils electroniques,vehicules et bien plus encore! </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
</div>

<div class="row text-center">
    <h2> Les dernières annonces</h2>

    <?php foreach ($listings as $listing) {

        require 'templates/listing_part.php';
    } ?>

    <?php
    require_once 'templates/footer.php';
    ?>