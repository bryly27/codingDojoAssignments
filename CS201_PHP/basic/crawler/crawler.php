<?php
    // http://simplehtmldom.sourceforge.net/
    // MANUAL: http://simplehtmldom.sourceforge.net/manual.htm
    
    require("simple_form_dom.php");
    $html = file_get_html('http://www.godaddy.com/');


    // Find all links 
    foreach($html->find('domainToCheck') as $element) 
       echo $element->href . '<br>';

   ?>
