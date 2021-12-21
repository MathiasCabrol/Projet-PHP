<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Nav bar Mathias -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Structure php Joelle -->
<?php $xmlFile = 'source.xml'; 
$xml = simplexml_load_file($xmlFile); 
echo $xml->page[0]->title;
echo $xml->page[0]->content[0];
echo $xml->page[1]->title;
echo $xml->page[1]->content[0];
?>
<!-- Footer Théo -->
  <footer class="container-fluid p-4 text-center mt-5">
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
  
</body>
</html>


