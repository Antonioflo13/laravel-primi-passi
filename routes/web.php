<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () 
{
    $data = 
    [
        // userData
        "name" => "Antonio",
        "surname" => "Flore",
        "age" => "28",

        // productData
        "productName" => "Iphone 12 Pro",
        "price" => "925 $",
        "imagePath" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-pro-max-gold-hero?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1604021660000",
        "description" => 
        "
        iPhone 12 128gb Blue – Blu è il top di gamma Apple del 2020, il 5g più leggero e sottile al mondo. Possiede un display da 6.1 pollici con una risoluzione di 2532×1170 pixel e schermo Super Retina XDR. Il nuovo vetro Ceramic Shield ha un rivestimento di cristalli di ceramica che rendono il vetro fino a 4 volte più resistente agli urti rispetto ai suoi predecessori e molto più resistente a gocce e schizzi d’acqua. Presenta il nuovo chip Apple A14 Bionic e una connettività 5G, valida su tutti i mercati, che consente un trasferimento dati e una navigazione più veloci ed una copertura globale. Tra le altre caratteristiche troviamo una fotocamera posteriore da 12 megapixel con risoluzione di 4000×3000 pixel che consente di scattare foto di buona qualità e di registrare video in 4K. Con la nuova fotocamera di iPhone 12 128gb Blue – Blu è possibile utilizzare la modalità Notte non solo con il grandangolo, ma anche con l’ultra-grandangolo, perfino con poca luce. In questa modalità è in grado infatti di scattare foto nitide e dettagliate. Rispetto ai precedenti modelli, il nuovo grandangolo permette l’entrata della luce del 27% in più. Anche la modalità Ritratto risulta migliorata. Ed hai a disposizione ben 6 effetti di illuminazione. Una delle novità principali dell’iPhone 12 è il design squadrato, che è molto più simile ad alcuni suoi predecessori come Apple iPhone 5 e Apple iPhone SE. Inoltre, sul lato posteriore, è dotato della connessione magnetica MagSafe che permette di collegare vari accessori, come caricatori wireless, centrando la posizione per una ricarica perfetta e più veloce.
        Inoltre Iphone 12 difende la tua privacy: i dati FaceID non vengono salvati sull’iCloud ma restano sul tuo dispositivo.
        ",

        // links
       "links" => 
       [
        "chi siamo",
        "Riconoscimenti",
        "Guida all'acquisto",
        "Guadagna con noi"
       ],
    ];
    return view('helloworld', $data);
});
