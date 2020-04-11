<?php 
function arrayToXml($array, &$xml){
    foreach($array as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
                $subnode = $xml->addChild("$key");
                arrayToXml($value, $subnode);
            }else{
                $subnode = $xml->addChild("course");
                arrayToXml($value, $subnode);
            }
        }else {
            $xml->addChild("$key",htmlspecialchars("$value"));
        }
    }
}