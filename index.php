<?php 

require_once('vendor/autoload.php');
 
use DiDom\Document;
 
$document = new Document('https://journals.sagepub.com/home/VRT', true);
 
//$main_heading = $document->find('h1')[0];
//echo $main_heading->html();
 
$sub_headings = $document->find('a[href*]');


foreach($sub_headings as $sub_heading) {

  echo $sub_heading->href;

  echo "<br/>";

}