<?php

    $pyscript = 'C:\\MAMP\\htdocs\\check_faces_new_model.py';
    $python = 'C:\\Users\\admin\\AppData\\Local\\Programs\\Python\\Python37\\python.exe';
    $cmd = "$python $pyscript";
    exec("$cmd", $output);

    header("Location: /index.php");

?>