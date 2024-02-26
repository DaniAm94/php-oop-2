<?php
require __DIR__.'/../models/Category.php';
require __DIR__.'/../models/Product.php';

$categories=[];


$categories['Cane']= new Category('Cane', 'icona-cane.png');
$categories['Gatto']= new Category('Gatto', 'icona-gatto.png');
$categories['Pesci']= new Category('Pesci', 'icona-pesce.png');
$categories['Uccelli']= new Category('Uccelli', 'icona-uccello.png');

$product1= new Product('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000','Cibo', $categories['Cane'], 12.00);
$product2= new Product('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg','Cibo', $categories['Cane'], 11.60);
$product3= new Product('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg','Cibo', $categories['Gatto'], 17.28);
$product4= new Product('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg','Cibo', $categories['Pesci'], 2.50);
$product5= new Product('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg','Accessori', $categories['Uccelli'], 245.00);
$product6= new Product('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg','Accessori', $categories['Pesci'], 24.99);
$product7= new Product('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg','Giochi', $categories['Cane'], 8.99);
$product8= new Product('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg','Giochi', $categories['Gatto'], 10.00);
$products=[ $product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8];
