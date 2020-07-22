<?php

include('simple_html_dom.php');

$webUrl = "https://www.apple.com/";

$html = file_get_html($webUrl);

//ty-grid-list__image
$urls = array();
foreach($html -> find('.ac-gn-content')as $postDiv){

    // echo '<pre>';

    // die(var_dump($postDiv));

 //_ngcontent-sc15
 foreach($postDiv->find('a') as $a)
 {
    //echo $a-> attr['href']."<br>";

    $urls [] = $a-> attr['href'];

 }

 print_r($urls);

};
?>