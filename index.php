<?php 

$nameRegex = '/^[A-ZÀ-ÖØ][A-Za-zÀ-ÖØ-öø-ÿ\-\']*$/';
$phoneRegex = '/^((([\+]([0-9])*[\.\-\s]?)[0-9]?)||(([0])[0-9]))([\.\-\s])?([0-9]{2}([\.\-\s])?){3}[0-9]{2}$/';
$textRegex = '/^[A-Za-zÀ-ÖØ-öø-ÿ\s\-\'\.]+$/';


if(isset($_POST['send'])){

    //Création tableau d'erreurs vide
    $errorList = [];

    //Condition de validation champ "Nom"
    if(!empty($_POST['your-name'])){
        if(preg_match($nameRegex, $_POST['your-name'])){
            $yourName = htmlspecialchars($_POST['your-name']);
        }else {
            $errorList['your-name'] = 'Merci d\'entrer un nom valide';
        }
    } else {
        $errorList['your-name'] = 'Merci d\'entrer votre nom.';
    }

    //Condition de validation champ e-mail
    if(!empty($_POST['your-email'])){
        if(filter_var($_POST['your-email'], FILTER_VALIDATE_EMAIL)){
            $yourEmail = htmlspecialchars($_POST['your-email']);
        }else {
            $errorList['your-email'] = 'Merci d\'entrer une adresse mail valide';
        }
    } else {
        $errorList['your-email'] = 'Merci d\'entrer votre adresse mail.';
    }

    //Condition de validation champ téléphone
    if(!empty($_POST['your-tel-615'])){
        if(preg_match($phoneRegex, $_POST['your-tel-615'])){
            $yourTel = htmlspecialchars($_POST['your-tel-615']);
        }else {
            $errorList['your-tel-615'] = 'Merci d\'entrer un numéro de téléphone valide';
        }
    } else {
        $errorList['your-tel-615'] = 'Merci d\'entrer votre numéro de téléphone.';
    }

    //Condition de validation champ sujet
    if(!empty($_POST['your-subject'])){
        if(preg_match($textRegex, $_POST['your-subject'])){
            $yourSubject = htmlspecialchars($_POST['your-subject']);
        }else {
            $errorList['your-subject'] = 'Merci d\'entrer un sujet valide';
        }
    } else {
        $errorList['your-subject'] = 'Merci d\'entrer un sujet.';
    }

    //Condition de validation champ sujet
    if(!empty($_POST['your-ville'])){
        if(preg_match($textRegex, $_POST['your-ville'])){
            $yourVille = htmlspecialchars($_POST['your-ville']);
        }else {
            $errorList['your-ville'] = 'Merci d\'entrer une ville valide';
        }
    } else {
        $errorList['your-ville'] = 'Merci d\'entrer votre ville.';
    }

    //Condition de validation champ sujet
    if(!empty($_POST['your-message'])){
            $yourMessage = htmlspecialchars($_POST['your-message']);
    } else {
        $errorList['your-message'] = 'Merci d\'entrer votre message.';
    }
}

$xmlFile = 'source.xml'; 
$xml = simplexml_load_file($xmlFile); 


if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    if (($_GET['page'] >= 1) && ($_GET['page'] <= 4))  {
        $page = $_GET['page']-1;
    } else {
        $page = 0;
    }
} else {
    $page = 0;
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?= $xml->page[$page]->title; ?></title>
</head>
<body>
    <!-- Nav bar Mathias -->
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="">Ocordo</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <?php foreach($xml->page as $menuTitle):
        ?>
      <li class="nav-item">
        <a class="nav-link <?= $menuTitle->attributes()->id == $page+1 ? 'active' : '' ?>" href="<?= $menuTitle->attributes()->id . '.html' ?>"><?= $menuTitle->menu ?></a>
      </li>
      <?php
      endforeach;
      ?>
    </ul>
  </div>
</nav>
<!-- Structure php Joelle -->
<?= $xml->page[$page]->content; ?>
<!-- Footer Théo -->
  <footer class="container-fluid p-4 text-center">
    <section class="row" id="footerBtn">
        <div class="col">
          <a class="btn btn-primary btn-floating m-1" id="facebook" href="" role="button"> <i class="bi bi-facebook"> </i></a>
          <a class="btn btn-primary btn-floating m-1" id="tweeter" href="" role="button"> <i class="bi bi-twitter"> </i></a>
          <a class="btn btn-primary btn-floating m-1" href="" id="instagram" role="button"> <i class="bi bi-instagram"> </i></a>
        </div>
    </section>
    <section class="row mt-4">
      <div class="col">
        <h3>Nous contacter</h3>
          <ul>
            <li>Ocordo Travaux</li>
            <li>11, allée de l'île Gloriette</li>
            <li>44000 Nantes</li>
          </ul>
      </div>
    </section>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <?php if ($page == 3) { ?> <script src="assets/js/script.js"></script> <?php } ?>
</body>
</html>



