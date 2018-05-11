<?php
    $myfilename = "Problem01.txt";
    if(file_exists($myfilename)){
      echo file_get_contents($myfilename);
    }
?>