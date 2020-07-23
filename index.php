<?php
//including scraping library
include('simple_html_dom.php');
//defining variables
global $webUrl,$html,$devices,$brandName;

$num = 1;

//initialising url to scrap
$webUrl = "https://ee.ge/mobiluri-telefonebi-da-aqsesuarebi/mobiluri-telefoni?page=`$num++`";

//getting url contents
$html = file_get_html($webUrl);


//creating an array with values.
$devices == array($brandName,$modelInfo);

//parsing url and storing data in an array
function getBrandName($html){
  
   //parse webpage and get brand names
   foreach($html-> find('.prod_brand') as $brandName)
   {
      
      echo $brandName -> plaintext;
      echo "<br>";

      $devices [] = $brandName-> attr['class'];


      
      //echo "got this far", $brandName;
     //$devices['BrandName'] = $brandName;

      print_r($devices);
   }

   //store brand names in array uniquely
   //get model names
   foreach($html-> find('p') as $modelInfo)
   {
      
      echo $modelInfo -> plaintext;
      echo "<br>";
      
      $devices [] = $modelInfo-> attr['tabindex'];

      print_r($devices);
   }
   //get price ".price-section" as plain text

   
   
}

 return getBrandName($html,$devices);