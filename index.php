<?php
require __DIR__.'/data/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Shop</title>
<!-- Bootstrap -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
    <header class="py-4">
        <h1 class="text-center">OOP Animals Shop</h1>
    </header>
    <main class="container-sm"> 
        <ul class="row row-cols-4 row-gap-4 list-unstyled">
        <?php foreach($products as $product):?>
            <li>
                <div class="card text-center " style="min-height: 590px">
                    <img src="<?= $product->img ?>" class="card-img-top" alt="<?= $product->label ?>">
                    <div class="card-body d-flex flex-column justify-content-between ">
                        <h5 class="card-title mb-4"><?= $product->label ?></h5>
                        <div class="category d-flex justify-content-center">
                            <i class="card-text me-3"><?= $product->category->label ?></i>
                            <img style="height: 30px" src="http://localhost/boolean/php-oop-2/data/icons/<?= $product->category->icon ?>" alt="Icona <?= $product->category->label ?>">
                        </div>
                    </div>
                    <ul class="list-group list-group-flush fw-bold ">
                        <li class="list-group-item">
                        <span>Codice prodotto: </span>
                        <em><?= $product->getId() ?></em>
                        </li>
                        <li class="list-group-item"><?= $product->price ?></li>
                        <li class="list-group-item"><?= $product->type ?></li>
                    </ul>
                </div>
            </li>
            <?php endforeach?>
        </ul>
    </main>
    
</body>
</html>