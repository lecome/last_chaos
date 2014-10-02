<?php

 function getTemplate($name,$tempnam) {
    ob_start();
    include ("template/".$tempnam."/".$name.".tpl");
    $text = ob_get_clean();
    return $text;
  }
  
?>