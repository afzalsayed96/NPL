<?php
$dir = "./files/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    $filepart = pathinfo($file);
    $ext = $filepart['extension'];
    if($filepart['extension']=="png" )
    {
        echo "<img src=\"/files/".$file."\">";
        echo "<div> $file </div>";
    }
    }
    closedir($dh);
  }
}

?>