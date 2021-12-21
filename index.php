<!-- Nav bar Mathias -->

<!-- Structure php Joelle -->
<?php $xmlFile = 'source.xml'; 
$xml = simplexml_load_file($xmlFile); 
echo $xml->page[0]->title;
echo $xml->page[0]->content[0];
echo $xml->page[1]->title;
echo $xml->page[1]->content[0];
?>

<!-- Foote Théo -->