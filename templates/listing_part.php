<div class="col-md-4 my-2 d-flex">
    <div class="card w-100">
        <img src="/uploads/listing/<?= $listing["image"] ?>" class="card-img-top" alt="<?= $listing["title"] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $listing["title"] ?></h5>
            <p class="card-text"><?= $listing["price"] ?>€</p>
            <a href="#" class="btn btn-primary stretches-link">Voir les annonces</a>
        </div>
    </div>
</div>