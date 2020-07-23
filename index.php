<?php
//including scraping library
include('simple_html_dom.php');

$webUrl = "https://www.apple.com/";

$html = file_get_html($webUrl);

$urls = array();
foreach($html -> find('.ac-gn-content')as $postDiv){

    
 foreach($postDiv->find('a') as $a)
 {
    //echo $a-> attr['href']."<br>";

    $urls [] = $a-> attr['href'];

 }

 print_r($urls);

};
?>