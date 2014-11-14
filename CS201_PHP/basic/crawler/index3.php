<?php

    function domainAvailable($varURL)
    {
    //connecting to a remote url using curl

    //see http://www.php.net/manual/en/function.curl-setopt.php for more info
    $url = "http://www.who.is/whois/".$varURL;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    $data = curl_exec($ch);
    $info = curl_getinfo($ch);  
    curl_close($ch);

    echo "<h1>Data</h1>";
    echo "<pre>".htmlentities($data)."</pre>";

    echo "<h1>Info</h1>";
    echo "<pre>";
    var_dump($info);
    echo "</pre>";


    //  require("simple_form_dom.php");
    // $html = file_get_html($url);


    // $es - $html ->find('.fetch-success')
    // echo "";

    
    echo "http://www.who.is/whois/".$varURL;
    }

$varURL="yahoo.com";
domainAvailable($varURL);

?>

