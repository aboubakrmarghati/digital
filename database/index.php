<?php 

function current_url() {
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $Validurl = str_replace("&","&amp;",$url);

    return $Validurl;
}

$on_url = current_url();

if ($on_url == "http://127.0.0.1/acc/database/") {
    echo "You Have Been Blocked";
}

?>