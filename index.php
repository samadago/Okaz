<?php
require_once 'templates/header.php';
require_once "libs/listing.php";

$listings = getListings();

$categories = [
    ["name" => "Jeux video", "icon" => "controller"],
    ["name" => "meubles", "icon" => "lamp"],
    ["name" => "Vetements", "icon" => "tag"],
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

<div class="row">
    <h2> Les dernières annonces</h2>

    <?php foreach ($listings as $listing) {

        require 'templates/listing_part.php';
    } ?>

</div>

<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Les categories</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

        <?php
        foreach ($categories as $key => $categorie) {
            require 'templates/category_part.php';
        } ?>


    </div>
</div>

<?php
require_once 'templates/footer.php';
?>