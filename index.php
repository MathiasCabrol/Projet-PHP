<!-- Nav bar Mathias -->

<!-- Structure php Joelle -->
<?php 
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

echo $xml->page[$page]->content;

?>

<!-- Footer Théo -->