<?php 
    $targetFolder = __DIR__.'/../webvister/storage/app/public';
    $linkFolder = __DIR__.'/storage';
    symlink($targetFolder,$linkFolder);
    
    echo 'smylink process successfull complated';
?>