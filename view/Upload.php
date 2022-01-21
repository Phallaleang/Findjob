<?php

 if($_FILES["upload-photo"]["name"] != ''){
    $test       = explode(".",$_FILES["upload-photo"]["name"]);
    $extension  = end($test);
    $name       = rand(100,99). ' .'. $extension;
    $location   = '.'. $name;
    move_uploaded_file($_FILES["upload-photo"]["tmp_name"], $location);
    echo '<div class="relative">
    <img src="'.$location. '" height="150" width="150" class="img-thumbnail shadow" > <i class="fas fa-times-circle absolute top-2 text-red-500 cursor-pointer -right-6" onclick="removeImg() " title="Delete image"></i>
    </div>
     ';
}

?>