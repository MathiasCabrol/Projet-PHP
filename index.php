<?php $xmlFile = 'source.xml'; 
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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Nav bar Mathias -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="">Ocordo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <?php for($i=0; $i <= 3; $i++):
        ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= ($i+1) . '.html' ?>"><?= $xml->page[$i]->menu ?></a>
      </li>
      <?php
      endfor;
      ?>
    </ul>
  </div>
</nav>
<!-- Structure php Joelle -->
<?php 
echo $xml->page[$page]->content;
?>
<!-- Footer Théo -->
</body>
</html>



