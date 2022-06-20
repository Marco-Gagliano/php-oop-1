<?php 

require_once __DIR__ . '/movies.php';

$movies = [];

$aotParteUno = new Movie(
  'https://cdn.chili.com/images/public/cms/59/af/02/29/59af0229-515d-479b-bde5-8026d9f0d724.jpg?width=800',
  'L\'attacco dei giganti - Il film - Parte 1: L\'arco e la freccia cremisi',
  '2015-05-12',
  'Tetsuro Araki',
  'Animazione',
  '120',
  '7,5/10',
  'Per oltre cento anni le alte mura che circondano Shiganshina hanno difeso la cittadina da un pericolo che gli abitanti si rifiutano persino di nominare. Chi desidera esplorare il mondo esterno è visto come un pazzo e guardato con disprezzo. Il giovane Eren si sente però come un animale in cattività e, sebbene avvenga spesso che le squadre inviate ritornino decimate, sogna di unirsi al Corpo di Ricerca per scoprire la realtà che lo circonda. Un giorno Eren sogna l\'attacco di esseri giganteschi e, anche se al risveglio ha rimosso ogni ricordo di quanto ha visto, gli resta addosso una stranissima sensazione. Poco più tardi accade l\'imprevisto: un immenso Titano apre una breccia nelle mura di protezione. Per Eren sarà uno shock senza precedenti...',
);
$movies[] = $aotParteUno;

$aotParteDue = new Movie(
  'https://www.eventinews24.com/wp-content/uploads/2015/07/AttaccoGiganti2_POSTER_100x140-1200x1713.jpg',
  'L\'attacco dei giganti. Il film. Parte 2: Le ali della libertà',
  '2015-09-01',
  'Testuro Araki',
  'Animazione',
  '114',
  '7,8/10',
  'Eren scopre che per tutto il tempo è stato rinchiuso nei sotterranei della sede della commissione e che verrà sottoposto al giudizio della corte marziale. La sua unica speranza di salvezza è costituita dal Corpo di Ricerca (nel quale, fra l\'altro, Eren desidera entrare da tempo). Il Corpo lo utilizzerebbe infatti in battaglia per eliminare il maggior numero possibile di nemici...',
);
$movies[] = $aotParteDue;


$aotParteTre = new Movie(
  'https://images.everyeye.it/img-screenshot/dynit-v1-555416.jpg',
  'L\'attacco dei giganti: L\'urlo del risveglio',
  '2018-01-13',
  'Masashi Koizuka',
  'Animazione',
  '115',
  '8,4/10',
  'Per un intero secolo le mura permisero agli umani di vivere in pace. Dimenticarono il terrore di essere soggiogati e l’umiliazione di essere rinchiusi in gabbia. Tuttavia, quando i Giganti penetrarono quelle stesse mura, la battaglia per la sopravvivenza dell’umanità ebbe inizio. In seguito, mentre lo scontro continuava a mietere vittime sia tra i civili che tra i militari, si scoprì che alcuni Giganti si nascondevano tra gli umani. A cinque anni dalla prima breccia nelle mura, gli umani riuscirono a catturare uno di loro, un titano mutaforma, il Gigante Femmina Annie Leonhart.',
);
$movies[] = $aotParteTre;


$aotParteQuattro = new Movie(
  'https://m.media-amazon.com/images/M/MV5BMzQwZjZkMTktYzNkNC00ZWFlLWE4NGEtMjA3YTA4OTEyZWVkXkEyXkFqcGdeQXVyMTA5MTI0Mzc1._V1_FMjpg_UX850_.jpg',
  'Shingeki no Kyojin: Chronicle',
  'TBA',
  'Testuro Araki , Masashi Koizuka',
  'Animazione',
  'TBA',
  'TBA',
  'Shingeki no Kyojin: Chronicle è il quarto film riassuntivo della serie, che racconta le prime tre stagioni della serie Attack on Titan basata sul manga di Hajime Isayama.',
);
$movies[] = $aotParteQuattro;

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
  <title>PHP-OPP-1</title>
</head>
<body>

  <header>
    <h1 class='text-center py-5'>MOVIEFLIX</h1>
  </header>


  <main>
    
    <?php foreach ($movies as $movie => $value):?>
    
    <div class="aot-film">
      <div class="container">
        <div class="row">
          
          <div class="col-6 my-4">
            <img class="w-75" src="<?php echo $value->poster?>" alt="Poster AOT">
          </div>
          
          <div class="col-6 my-4">
            
            <h1>Titolo: </h1><p> <?php echo $value->titolo ?></p>
            <h5>Data Uscita in Italia: </h5><p><?php echo $value->data_uscita_italia?></p>
            <h5>Regia: </h5><p><?php echo $value->regia?></p>
            <h5>Genere: </h5><p><?php echo $value->genere?></p>
            <h5>Durata Minuti: </h6><p><?php echo $value->durata_minuti?></p>
            <h5>Voto Metacritic</h5><p><?php echo $value->voto_metacritic?></p>
            <h5>Descrizione: </h5>
            <p><?php echo $value->descrizione_film?></p>
          </div>
          
        </div>
      </div>
    </div>

    <?php endforeach; ?>

  </main>

  <footer>

  </footer>

</body>
</html>